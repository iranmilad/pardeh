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

function onChange(page) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "/api/category",
            type: "GET",
            data: {
                url: window.location.pathname,
            },
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
        filters = $(".category-filters.category-filters-mobile").serializeArray();
    } else {
        filters = $(".category-filters.category-filters-desktop").serializeArray();
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
            type: "GET",
            beforeSend: () => {
                block.block();
            },
            data: {
                url,
            },
            success: (response) => {
                block.release();
                resolve(response);
                $(".category-post").html(response.html);
                // set whole window url to url
                // window.history.pushState({}, "", url);
                let new_url = queryString.parseUrl(url);
                if (Object.keys(new_url.query).length > 0) {
                    let newQuery = queryString.stringify(new_url.query, {
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
        let elm = document.createElement("div");
        $(".removeItemsBox")
            .removeClass("d-none")
            .children(".card-body")
            .append(elm);
        hydrate(
            createElement(RemoveOptionCategory, {
                options,
                onChange: removeOptionsOnChange,
            }),
            elm
        );
    } else {
        $(".removeItemsBox").addClass("d-none").children(".card-body").html("");
    }
}
