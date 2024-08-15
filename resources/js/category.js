import $ from "jquery";
import { hydrate, createElement } from "preact";
import { CategoryPagination } from "./components";
import KTBlockUI from "./tools/blockui";
import queryString from "query-string";
import { RemoveOptionCategory } from "./components";
import noUi from "nouislider";
import "../css/vendors/nouislider/nouislider.scss";

/**
 * there is priceSlider & priceSlider1 in APP.JS which are used for the price range filter
 * if priceSlider & priceSlider1 changes handleChangeFilter is called to update the products
 */
let minChange = false;
let maxChange = false;
if ($(".price-range").length > 0) {
    let minPrice = $(".minPrice");
    let maxPrice = $(".maxPrice");

    // set max and min values of slider
    maxPrice.val($(".price-range").data("max"));
    minPrice.val($(".price-range").data("min"));

    let slider = $(".price-range");
    slider.each(function (index, element) {
        let priceSlider = noUi.create(element, {
            start: [
                +$(".price-range").data("defaultmin"),
                +$(".price-range").data("defaultmax"),
            ],
            connect: true,
            step: $(element).data("step"),
            // show max and min values static under slider
            format: {
                to: function (value) {
                    return parseInt(value);
                },
                from: function (value) {
                    return parseInt(value);
                },
            },
            range: {
                min: $(".price-range").data("min"),
                max: $(".price-range").data("max"),
            },
        });
        priceSlider.on("update", function (values, handle) {
            if (values) {
                // Update the corresponding input field based on the active handle
                if (handle === 0) {
                    minPrice.val(`${values[0]}`);
                } else {
                    maxPrice.val(`${values[1]}`);
                }
            }
        });
        priceSlider.on("change", function (values, handle) {
            if (handle === 0) {
                if (minChange) {
                    setTimeout(() => handleChangeFilter(), 500);
                } else if (
                    minChange === false &&
                    values[0] !== +$(".price-range").data("defaultmin")
                ) {
                    minChange = true;
                    setTimeout(() => handleChangeFilter(), 500);
                } else {
                    minChange = false;
                }
            }

            if (handle == 1) {
                if (maxChange) {
                    setTimeout(() => handleChangeFilter(), 500);
                } else if (
                    maxChange === false &&
                    values[1] !== +$(".price-range").data("defaultmax")
                ) {
                    maxChange = true;
                    setTimeout(() => handleChangeFilter(), 500);
                } else {
                    maxChange = false;
                }
            }
        });
    });
}

const block = new KTBlockUI(document.getElementById("catergory_page"));

function createOptions(page) {
    let params = {};
    block.block();
    let currentURL = window.location.href;
    let newURL = currentURL.split("?")[0];
    let query = queryString.stringify(
        { ...queryString.parse(currentURL.split("?")[1]), page },
        { arrayFormat: "comma" }
    );
    window.history.pushState(null, null, `${newURL}?${query}`);
    return queryString.parse(query);
}

function onChange(page) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: "/api/category",
            type: "POST",
            data: createOptions(page),
            success: (response) => {
                // Code on successful response
                block.release();
                resolve(response);
                $(".category-post").html(response.html);
                // scroll to #products_boxes
                $("html, body").animate(
                    {
                        scrollTop: $("#products_boxes").offset().top - 20,
                    },
                    "fast"
                );
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
    if (total > 0) {
        hydrate(
            <CategoryPagination
                total={total}
                value={value}
                onChange={onChange}
            />,
            document.getElementById("category-pagination")
        );
    }
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

    if (minChange === false) delete groupedFilters.minprice;
    if (maxChange === false) delete groupedFilters.maxprice;

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
        if (total && total > 0) {
            hydrate(
                <CategoryPagination
                    total={total}
                    value={value}
                    onChange={onChange}
                />,
                document.getElementById("category-pagination")
            );
        } else {
            $("#category-pagination").html("");
        }
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

function removeOptionsOnChange(url, item) {
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
                let total = response.total;
                let value = 1;
                $("#category-pagination").html("");
                if (total && total > 0) {
                    hydrate(
                        <CategoryPagination
                            total={total}
                            value={value}
                            onChange={onChange}
                        />,
                        document.getElementById("category-pagination")
                    );
                } else {
                    $("#category-pagination").html("");
                }
                setRemoveOptions(response.removeOptions);
                // Parse the URL to get its query parameters
                let new_url = url;

                // Parse the current URL to get its query parameters
                let currentQuery = queryString.parseUrl(window.location.href, {
                    arrayFormat: "comma",
                }).query;

                // Parse the new URL to get its query parameters
                let newQuery = url;

                // Function to find the queries that have been removed in the new URL

                // For each removed query
                if (item) {
                    $("input[name=" + item.name + "]").each(function () {
                        // If the value of the input element is in the array of removed values
                        if (item.value.includes($(this).val())) {
                            // Uncheck the input element
                            $(this).prop("checked", false);
                        }
                    });
                } else {
                    $(
                        ".category-filters input:is([type=checkbox],[type=radio])"
                    ).prop("checked", false);
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
