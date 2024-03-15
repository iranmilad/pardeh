import $ from "jquery";
import { hydrate, createElement } from "preact";
import { CategoryPagination } from "./components";
import KTBlockUI from "./tools/blockui";
import queryString from "query-string";
import { RemoveOptionCategory } from "./components";

/**
 * there is priceSlider & priceSlider1 in APP.JS which are used for the price range filter
 * if priceSlider & priceSlider1 changes handleChangeFilter is called to update the products
 */

const block = new KTBlockUI(document.getElementById("products_boxes"));

function createOptions(url){
    let params = {};
    if(url){
        queryString.parse(url)
    }
    else if(url === ""){
        params = {}   
    }
    else{
        params = queryString.parse(window.location.search);
    }
    return params;
}

function onChange(page) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "/api/category",
            type: "POST",
            data: createOptions(),
            beforeSend: () => {
                // Code before sending the request
                block.block();
                let currentURL = window.location.href;
                let newURL = currentURL.split("?")[0];
                let query = queryString.stringify(
                    { ...queryString.parse(currentURL.split("?")[1]), page },
                    { arrayFormat: "comma" }
                );
                window.history.pushState(null, null, `${newURL}?${query}`);
            },
            success: (response) => {
                // Code on successful response
                block.release();
                resolve(response);
                $(".category-post").html(response.html);
            },
            error: (err) => {
                // Code on error
                block.release();
                reject(err);
                window.history.pushState({}, "", `?page=${page - 1}`);
            },
        });
    });
}

if ($(".first-pagination").length > 0) {
    let total = $(".first-pagination").data("total");
    let value = $(".first-pagination").data("value");
    $(".first-pagination").remove();
    hydrate(
        <CategoryPagination total={total} value={value} onChange={onChange} />,
        document.getElementById("category-pagination")
    );
}

$(".category-filters input").on("change", handleChangeFilter);

export function handleChangeFilter(e) {
    let filters = {};
    // if windows size is less than 768px
    if (window.innerWidth < 768) {
        filters = $(
            ".category-filters.category-filters-mobile"
        ).serializeArray();
    } else {
        filters = $(
            ".category-filters.category-filters-desktop"
        ).serializeArray();
    }

    let groupedFilters = filters.reduce((result, filter) => {
        if (!result[filter.name]) {
            result[filter.name] = [];
        }
        result[filter.name].push(filter.value);
        return result;
    }, {});

    let query = queryString.stringify(groupedFilters, { arrayFormat: "comma" });

    // clean the query
    let currentURL = window.location.href;

    // Create a new URL without queries
    let newURL = currentURL.split("?")[0];

    // Use history.pushState to change the URL without refreshing
    history.pushState(null, null, newURL);
    window.history.pushState({}, "", `?${query}`);

    // jquery function
    $(async () => {
        let data = await onChange(1);
        let total = data.total;
        let value = 1;
        let removeOptions = data.removeOptions;
        setRemoveOptions(removeOptions);
        $("#category-pagination").html("");
        hydrate(
            <CategoryPagination
                total={total}
                value={value}
                onChange={onChange}
            />,
            document.getElementById("category-pagination")
        );
    });
}

/**
 * Sort worker
 * add sort to the query in url
 */
$(document).ready(function () {
    $("#category-sort input,#category-sort-mobile").on("change", function (e) {
        let sort = $(e.target).serializeArray();
        sort = sort.reduce((result, filter) => {
            result[filter.name] = filter.value;
            return result;
        }, {});

        // Preserve existing queries and add the new 'sort' query
        let queryParams = new URLSearchParams(window.location.search);
        queryParams.delete("page"); // Remove only the 'page' query
        queryParams.set("sort", sort.sort);

        // Construct the new URL
        let newURL = `${window.location.pathname}?${queryParams.toString()}`;

        // Update the URL without refreshing
        window.history.pushState({}, "", newURL);

        // jquery function
        $(async () => {
            let data = await onChange(1);
            let total = data.total;
            let value = 1;
            $("#category-pagination").html("");
            hydrate(
                <CategoryPagination
                    total={total}
                    value={value}
                    onChange={onChange}
                />,
                document.getElementById("category-pagination")
            );
        });
    });
});

function removeOptionsOnChange(url) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "/api/category",
            type: "POST",
            beforeSend: () => {
                block.block();
            },
            data: url,
            success: (response) => {
                block.release();
                resolve(response);
                $(".category-post").html(response.html);
                // Parse the URL to get its query parameters
                let new_url = url;

                // Parse the current URL to get its query parameters
                let currentQuery = queryString.parseUrl(window.location.href).query;

                // Parse the new URL to get its query parameters
                let newQuery = url;

                // Function to find the queries that have been removed in the new URL
                function findRemovedQueries(currentQuery, newQuery) {
                    return Object.keys(currentQuery).reduce((result, key) => {
                        // If the key is not 'page', 'sort', 'minprice', 'maxprice' and it does not exist in the new query,
                        // then it has been removed
                        if (
                            key !== "page" &&
                            key !== "sort" &&
                            key !== 'minprice' &&
                            key !== 'maxprice' &&
                            !(key in newQuery)
                        ) {
                            // Add the removed query to the result
                            result[key] = currentQuery[key];
                        }
                        return result;
                    }, {});
                }

                // Get the queries that have been removed in the new URL
                let removedQueries = findRemovedQueries(currentQuery, newQuery);

                // For each removed query
                for (let [key, value] of Object.entries(removedQueries)) {
                    // Split the value by comma to get an array of values
                    let newVal = value.split(",");

                    // For each input element with the name of the removed query
                    $("input[name=" + key + "]").each(function () {
                        // If the value of the input element is in the array of removed values
                        if (newVal.includes($(this).val())) {
                            // Uncheck the input element
                            $(this).prop("checked", false);
                        }
                    });
                }


                if (Object.keys(new_url).length > 0) {
                    let newQuery = queryString.stringify(new_url, {
                        arrayFormat: "comma",
                    });
                    window.history.pushState({}, "", `?${newQuery}`);
                } else {
                    // clean the query
                    let currentURL = window.location.href;

                    // Create a new URL without queries
                    let newURL = currentURL.split("?")[0];

                    // Use history.pushState to change the URL without refreshing
                    history.pushState(null, null, newURL);
                }
                // compare the url with the current url and find the difference basis on name and value and save them in variable
            },
            error: (err) => {
                block.release();
                reject(err);
            },
        });
    });
}

function setRemoveOptions(options) {
    if (options.length > 0) {
        $(".removeItemsBox")
            .removeClass("d-none")
            .children(".card-body")
            .html("");
        $(".removeItemsBox").each(function () {
            let elm = document.createElement("div");
            $(this).children(".card-body").html("").append(elm);
            hydrate(
                createElement(RemoveOptionCategory, {
                    options,
                    onChange: removeOptionsOnChange,
                }),
                elm
            );
        });
    } else {
        $(".removeItemsBox").addClass("d-none").children(".card-body").html("");
    }
}
