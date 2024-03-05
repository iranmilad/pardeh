import $ from "jquery";
import KTBlockUI from "./tools/blockui";
import toastr from "toastr";
import Swiper from "swiper";
import {
    Navigation,
    Thumbs,
    FreeMode,
    Pagination,
    Autoplay,
} from "swiper/modules";
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import "./tools/jquery-zoom";
import { BellProduct, PriceProduct } from "./components";
import { createElement, hydrate } from "preact";

let inputs = $("#product-options input:not([name='_token'])");

// filter inputs based on data-real

let block = new KTBlockUI(document.body, {
    overlayClass: "bigLoading blockui",
});

inputs
    .filter(function () {
        return $(this).data("real") === true;
    })
    .on("change", function () {
        let data = $("#product-options").serializeArray();
        $.ajax({
            type: "POST",
            url: "/api/product",
            data: data,
            beforeSend: function () {
                block.block();
            },
            success: function (response) {
                block.release();
                if (!response.regular_price) {
                    $("#main-cart-price-details").html("");
                    $("#main-cart-price-details").html(
                        hydrate(
                            createElement(BellProduct, {}),
                            document.getElementById("main-cart-price-details")
                        )
                    );
                    $(".sticky-price-time").html(
                        "<span class='tw-text-sm tw-text-brand-500'>ناموجود</span>"
                    );
                    $(".sticky-add-to-cart-btn").append(
                        `<button class="btn custom-btn-primary btn-sm btn-block tw-rounded-xl tw-w-full mt-3 tw-px-3 let-me-know"> <i class="fa-solid fa-bell tw-ml-2"></i> خبرم کن </button>`
                    );
                    letmeknow();

                    /**
                     * Add product images
                     */
                    $("#product-sticky-thumbnail").attr(
                        "src",
                        response.images[0]
                    );
                    $(".productImage .swiper-wrapper .swiper-slide").remove();
                    $(".productImages .swiper-wrapper .swiper-slide").remove();

                    response?.images.forEach((item) => {
                        $(".productImage .swiper-wrapper").append(
                            $("<div>")
                                .addClass("swiper-slide")
                                .append(
                                    $("<img>")
                                        .addClass(
                                            "tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl"
                                        )
                                        .attr("src", item)
                                )
                        );

                        $(".productImages .swiper-wrapper").append(
                            $("<div>")
                                .addClass("swiper-slide")
                                .append(
                                    $("<img>")
                                        .addClass(
                                            "tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl"
                                        )
                                        .attr("src", item)
                                )
                        );
                    });

                    productImage.update();
                    productImages.update();
                    // productImage is a thumbs gallery set to second swiper
                    productImage.slides.forEach(function (slide) {
                        $(slide).find("img").addClass("zoom");
                        zoomElm(slide.querySelector("img.zoom"));
                    });
                } else {
                    $("#main-cart-price-details").html("");
                    $("#main-cart-price-details").html(
                        hydrate(
                            createElement(PriceProduct, response),
                            document.getElementById("main-cart-price-details")
                        )
                    );
                    $(".price-sticky-tag").text(response.regular_price);
                    $(".time_delivery_sticky_tag").text(response.time_delivery);
                    $(".sticky-add-to-cart-btn")
                        .html("")
                        .html(
                            `<button class="btn custom-btn-primary tw-rounded-xl tw-py-2 btn-sm add-to-cart-main-btn"> <i class="fa-solid fa-basket-shopping tw-ml-2"></i> افزودن به سبد خرید </button>`
                        );
                    const priceDetails = $("<div>")
                        .addClass(
                            "tw-w-full tw-pt-4 border-top tw-flex-row tw-flex tw-items-center tw-justify-between"
                        )
                        .append(
                            $("<button>")
                                .addClass(
                                    "btn tw-bg-emerald-400 hover:tw-bg-emerald-500 hover:tw-text-white tw-text-white tw-rounded-xl tw-text-sm tw-w-max wishlist-btn"
                                )
                                .attr("data-bs-toggle", "tooltip")
                                .attr(
                                    "data-bs-title",
                                    "This top tooltip is themed via CSS variables."
                                )
                                .append(
                                    $("<i>").addClass("fa-regular fa-heart")
                                )
                        )
                        .append(
                            $("<button>")
                                .addClass(
                                    "btn custom-btn-primary tw-rounded-xl tw-py-2 btn-sm add-to-cart-main-btn"
                                )
                                .append(
                                    $("<i>").addClass(
                                        "fa-solid fa-basket-shopping"
                                    )
                                )
                                .text("افزودن به سبد خرید")
                        );

                    $("#main-cart-price-details").append(priceDetails);

                    // Add event listener to the newly added button
                    addToCart();

                    // wishlist button
                    wishlist();

                    /**
                     * Add product images
                     */
                    $("#product-sticky-thumbnail").attr(
                        "src",
                        response.images[0]
                    );
                    $(".productImage .swiper-wrapper .swiper-slide").remove();
                    $(".productImages .swiper-wrapper .swiper-slide").remove();

                    response?.images.forEach((item) => {
                        $(".productImage .swiper-wrapper").append(
                            $("<div>")
                                .addClass("swiper-slide")
                                .append(
                                    $("<img>")
                                        .addClass(
                                            "tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-2xl"
                                        )
                                        .attr("src", item)
                                )
                        );

                        $(".productImages .swiper-wrapper").append(
                            $("<div>")
                                .addClass("swiper-slide")
                                .append(
                                    $("<img>")
                                        .addClass(
                                            "tw-block tw-relative tw-w-full tw-h-full tw-object-cover tw-rounded-xl"
                                        )
                                        .attr("src", item)
                                )
                        );
                    });

                    productImage.update();
                    productImages.update();
                    // productImage is a thumbs gallery set to second swiper
                    productImage.slides.forEach(function (slide) {
                        $(slide).find("img").addClass("zoom");
                        zoomElm(slide.querySelector("img.zoom"));
                    });
                }
            },
            error: function (xhr, status, error) {
                block.release();
                toastr.error("مشکلی پیش آمده است");
            },
        });
    });

function addToCart() {
    $(".add-to-cart-main-btn").on("click", function () {
        let data = $("#product-options").serializeArray();
        $.ajax({
            type: "POST",
            url: "/api/add-to-cart",
            data: data,
            beforeSend: function () {
                block.block();
            },
            success: function (response) {
                block.release();
                toastr.success(response.message);
                if (response.cart && response.cart.count > 0) {
                    $(".navbar-cart span").text(response.cart.count);
                }
            },
            error: function (xhr, status, error) {
                block.release();
                toastr.error("مشکلی پیش آمده است");
            },
        });
    });
}

addToCart();

let productImages = new Swiper(".productImages", {
    modules: [Navigation, Thumbs, FreeMode],
    slidesPerView: 5,
    spaceBetween: 10,
    freeMode: true,
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    navigation: {
        nextEl: "#product-images-next",
        prevEl: "#product-images-prev",
    },
});

var productImage = new Swiper(".productImage", {
    modules: [Navigation, Thumbs],
    spaceBetween: 10,
    slidesPerView: 1,
    thumbs: {
        swiper: productImages,
    },
    navigation: {
        nextEl: "#product-preview-images-next",
        prevEl: "#product-preview-images-prev",
    },
});

/**
 * It is used to show comments' images in a gallery
 */
Fancybox.bind('[data-fancybox="comments"]', {
    // Your custom options for a specific gallery
});

/**
 * Gallery for product page
 */
let galleries = document.querySelectorAll('img[data-fancybox="gallery"]');
let newGallery = [];
galleries.forEach((gallery) => {
    newGallery.push({
        src: gallery.src,
        thumb: gallery.src,
    });
});
// fancybox.close();
$(document).ready(function () {
    if ($(".zoom").length > 0) {
        productImage.slides.forEach(function (slide) {
            $(slide).find("img").addClass("zoom");
            zoomElm(slide.querySelector("img.zoom"));
        });
    }
});

function zoomElm(el) {
    $(el)
        .wrap(
            '<span style="display:inline-block;width:100%;height:100%"></span>'
        )
        .css({
            display: "block",
            "border-radius": "16px",
        })
        .parent()
        .zoom({
            url: $(el).attr("data-zoom"),
            magnify: 1.2,
            callback: function () {
                $(this).on("click", function (elm) {
                    Fancybox.show(newGallery, {
                        startIndex: productImage.activeIndex,
                    });
                });
            },
        });
}

/**
 * if user is not logged in redirect to login page
 * else send url to server
 * also i send all of options to server
 */
function letmeknow() {
    $(".let-me-know").on("click", function () {
        // get token cookie
        let token = document.cookie
            .split(";")
            .filter((item) => item.includes("token="))[0]
            .split("=")[1];
        if (token) {
            $.ajax({
                type: "POST",
                url: "/api/letmeknow",
                data: {
                    // url of product
                    url: window.location.href,
                    // all options
                    options: $("#product-options").serializeArray(),
                },
                beforeSend: function () {
                    block.block();
                },
                success: function (response) {
                    block.release();
                    toastr.success(response.message);
                },
                error: function (xhr, status, error) {
                    block.release();
                    toastr.error("مشکلی پیش آمده است");
                },
            });
        } else {
            window.location.href = "/login";
        }
    });
}

// if run it first to make sure it might when page is loaded default product is unavailable
letmeknow();

/**
 * Add product to wishlist
 */
function wishlist() {
    $(".wishlist-btn").on("click", function () {
        $.ajax({
            type: "POST",
            url: "/api/wishlist",
            data: {
                url: window.location.href,
            },
            beforeSend: function () {
                block.block();
            },
            success: function (response) {
                block.release();
                toastr.success(response.message);
            },
            error: function (xhr, status, error) {
                block.release();
                toastr.error("مشکلی پیش آمده است");
            },
        });
    });
}

// if run it first to make sure it might when page is loaded default wishlist button works
wishlist();
