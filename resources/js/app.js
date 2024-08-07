import.meta.glob(["../images/**"]);

import iranData from "./iran_cities_with_coordinates.json";

// core version + navigation, pagination modules:
import $, { data, fn } from "jquery";
// اضافه کردن token CSRF به هدر درخواست
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Thumbs,
    FreeMode,
} from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "./confirm-code";
import L from "leaflet";
import "leaflet/dist/leaflet.css";
import markerIcon from "../images/marker-icon.svg";
import "./validations";
import KTBlockUI from "./tools/blockui";
import toastr from "toastr";
import "toastr/build/toastr.css";
import "../css/vendors/toaster/toastr.css";
import "./tools/alarm";
import "./tools/sweetalert";
import "./search";
import "./messages-dashboard";
import "./cartDetail";
import "./file-uploader";
import { StarComponent } from "./components";
import { hydrate, createElement } from "preact";
import Plyr from "plyr";
import "plyr/dist/plyr.css";
import "./product.js";
import "./tour.js";
import "./mini-cart.js";
import "./category.js";
import { handleChangeFilter } from "./category.js";
import { Modal } from "bootstrap";

// this is my swiper .headerSlider

new Swiper(".usersSlider", {
    modules: [Pagination, Autoplay],
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: ".usersSlider .swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },
});

document.addEventListener("DOMContentLoaded", function () {
    // Create a map centered at a specific location
    if (document.getElementById("map")) {
        var mymap = L.map("map").setView(
            [35.70222474889245, 51.338657483464765],
            13
        );

        // Add a tile layer (OpenStreetMap tiles)
        L.tileLayer(
            "http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}&BBOX=25.0,35.0,42.0,40.0",
            {
                attribution: "",
                subdomains: ["mt0", "mt1", "mt2", "mt3"],
            }
        ).addTo(mymap);

        var customIcon = L.icon({
            iconUrl: markerIcon, // Set the path to your custom icon image
            iconSize: [32, 32], // Set the size of the icon
            iconAnchor: [16, 32], // Set the anchor point of the icon (centered, bottom point in this case)
            popupAnchor: [0, -32], // Set the popup anchor relative to the icon
        });

        // Add a marker to the map
        L.marker([35.70222474889245, 51.338657483464765])
            .addTo(mymap)
            .bindPopup("آدرس ما");
    }
});

var swiper1 = new Swiper(".headerSlider", {
    modules: [Navigation, Autoplay],
    navigation: {
        nextEl: "#newset-products-next",
        prevEl: "#newset-products-prev",
    },
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 20,
    keyboard: true,
    loop: true,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
    },
});

var swiper1 = new Swiper(".firstSlider", {
    modules: [Navigation, Autoplay],
    navigation: {
        nextEl: "#firstSlider-products-next",
        prevEl: "#firstSlider-products-prev",
    },
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 0,
    keyboard: true,
    loop: true,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
    },
});

var swiper2 = new Swiper(".bestSuggestionsSlider", {
    modules: [Navigation],
    spaceBetween: 10,
    navigation: {
        nextEl: "#suggestions-products-next",
        prevEl: "#suggestions-products-prev",
    },
    breakpoints: {
        120: {
            slidesPerView: "auto",
            freeMode: true,
            centeredSlides: true,
        },
        768: {
            slidesPerView: 4,
        },
    },
});

new Swiper(".blogSwiper", {
    modules: [Autoplay],
    spaceBetween: 20,
    breakpoints: {
        120: {
            slidesPerView: "auto",
        },
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 4,
        },
    },
    loop: true,
    autoplay: {
        delay: 3000,
        stopOnLastSlide: false,
    },
});

new Swiper(".indexblogswiper", {
    modules: [Autoplay],
    spaceBetween: 0,
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    keyboard: true,
});

new Swiper(".discountedSwiper", {
    modules: [Navigation],
    navigation: {
        nextEl: "#discounted-products-next",
        prevEl: "#discounted-products-prev",
    },
    breakpoints: {
        120: {
            slidesPerView: "auto",
            centeredSlides: true,
            cssMode: true,
            spaceBetween: 10,
        },
        567: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1320: {
            slidesPerView: 4,
        },
    },
    spaceBetween: 30,
    freeMode: true,
});

new Swiper(".category-boxes-slider", {
    modules: [Navigation],
    slidesPerView: "8",
    spaceBetween: 15,
    navigation: {
        nextEl: "#category-products-next",
        prevEl: "#category-products-prev",
    },
    breakpoints: {
        120: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        567: {
            slidesPerView: 3,
        },
        756: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 6,
        },
        1320: {
            slidesPerView: 8,
        },
    },
});

$(document).on("DOMContentLoaded", function () {
    if ($(".province")) {
        const provinceSelect = $(".province");
        const selectedProvince = $(this).val();

        // provinceSelect.append(
        //     '<option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>'
        // );
        iranData.forEach((province) => {
            provinceSelect.append(new Option(province.name, province.name));
            // select first province
        });

        // وقتی یک استان انتخاب می‌شود
        $(".province").on("change", function (event) {
            const selectedProvince = $(this).val();
            let elem = $(event.target).data("province-target");
            let citySelect = $(elem);

            // حذف تمام گزینه‌های فعلی در لیست شهر
            citySelect.empty();

            // اگر استانی انتخاب نشده باشد، لیست شهرها غیرفعال می‌شود
            if (selectedProvince === "") {
                citySelect.prop("disabled", true);
            } else {
                // فعال کردن لیست شهرها
                citySelect.prop("disabled", false);

                // افزودن گزینه‌های جدید به لیست شهر
                const cities = iranData.find(
                    (province) => province.name === selectedProvince
                ).cities;
                cities.forEach((city) => {
                    citySelect.append(new Option(city.name, city.name));
                });

                // بروزرسانی Select2 برای لیست شهرها
                citySelect.trigger("change");
            }
        });


    }
});

/**
 * Edit Comments in dashboard of user
 */

// Delete Comment in dashboard of user
$(".deleteSentComment").on("click", function () {
    let parent = $(this).parent().parent().parent().parent().parent();
    $.ajax({
        url: "/dashboard/comment/delete",
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            parent.animate(
                {
                    opacity: 0,
                },
                300,
                function () {
                    $(this).remove();
                }
            );
        },
    });
});

// remove item from favorite list of user
$(".remove-favorite-user").on("click", function (e) {
    e.preventDefault();
    let parent = $(this).parent().parent().parent().parent();
    let id = $(this).attr("data-id");
    // create a div with remove and cancel button. with 100% width and 100% height and position absolute and z-index 1000 and background color rgba(0,0,0,0.5) and text-align center and display flex and justify-content center and align-items center add it to parent
    let div = $("<div/>", {
        class: "favorites-remove-backdrop",
    });
    let div2 = $("<div/>", {
        class: "d-flex flex-column justify-content-center align-items-center tw-space-y-3",
    });
    let cancelBtn = $("<button/>", {
        type: "button",
        class: "btn btn-sm btn-danger cancel-form px-3 tw-rounded-md",
        text: "لغو",
        click: function () {
            $(div).remove();
        },
    });
    let removeBtn = $("<button/>", {
        type: "button",
        class: "btn btn-sm custom-btn-primary px-3 tw-rounded-md",
        text: "حذف",
        click: function () {
            $.ajax({
                url: "/api/wishlist",
                method: "DELETE",
                data: {
                    id,
                },
                success: function (response) {
                    parent.animate(
                        {
                            opacity: 0,
                        },
                        300,
                        function () {
                            $(this).remove();
                        }
                    );
                },
            });
        },
    });
    div2.append(removeBtn);
    div2.append(cancelBtn);
    div.append(div2);
    $(this).parent().parent().parent().hide().append(div).fadeIn(100);
});

$(".payment-accordion:not(.disabled) input[type=checkbox]").on(
    "change",
    function () {
        // Uncheck all checkboxes except for this one
        $(".payment-accordion input[type=checkbox]")
            .not(this)
            .prop("checked", false);

        // Get the associated accordion body
        let accordionBody = $(this)
            .parent()
            .parent()
            .parent()
            .find(".payment-accordion-body");

        if ($(this).prop("checked")) {
            // If the checkbox is checked, slide down the accordion body
            $(".payment-accordion-body").slideUp();
            accordionBody.slideDown(300);
        } else {
            // If the checkbox is unchecked, slide up the accordion body
            accordionBody.slideUp(300);
        }
    }
);

let checked_shipping = false;

$(document).ready(function () {
    if (!$("#credit_payment").is(":checked")) {
        $("#last-shipping-pay").prop("disabled", true);
    }
    $("#credit_payment").on("change", function (e) {
        if ($(e.target).prop("checked")) {
            $("#last-shipping-pay").removeAttr("disabled");
            checked_shipping = true;
        }
    });
});

$("#last-shipping-pay")
    .parent()
    .on("submit", (event) => {
        if (!checked_shipping) {
            event.preventDefault();
            toastr.error("لطفا نحوه پرداخت را انتخاب کنید");
        }
    });

/**
 * CREATE STAR RATING AS DEFAULT. NOT HOVER THEM TO SHOW RATING
 */
// Use jQuery to find elements with the specified data-stars attribute and render the StarComponent
$(document).ready(function () {
    $(".stared").each(function (e) {
        if ($(this).data("stars")) {
            const dataStars = $(this).attr("data-stars");
            const noLabel = $(this).attr("data-no-label");
            hydrate(
                createElement(StarComponent, {
                    dataStars: dataStars,
                    no_label: noLabel !== "" ? true : false,
                }),
                this
            );
        }
    });
});
let product_review_images = new Swiper(".product-review-images", {
    slidesPerView: "auto",
    spaceBetween: 10,
});

$(".navbar-link-menu[data-bs-toggle='dropdown']")
    .on("mouseenter", function () {
        $(this).parent().find(".dropdown-menu").addClass("show").css({
            right: "0",
        });
    })
    .parent()
    .on("mouseleave", function (e) {
        if (!$(e.relatedTarget).closest(".dropdown-menu").length) {
            $(this).find(".dropdown-menu").removeClass("show");
        }
    });

/**
 * To show special video player everywhere
 */

const player = new Plyr(".cs-player");

/**
 * Sliders for options in product page
 */

$(".swiper-product-options").each(function () {
    let next = $(this).parent().find(".product-option-next")[0];
    let prev = $(this).parent().find(".product-option-prev")[0];
    const swiper = new Swiper(this, {
        modules: [Navigation],
        navigation: {
            nextEl: next,
            prevEl: prev,
        },
        slidesPerView: "auto",
        spaceBetween: 10,
    });
    // swiper.navigation.nextEl.addEventListener("click", function () {
    //     swiper.slideNext();
    // });

    // swiper.navigation.prevEl.addEventListener("click", function () {
    //     swiper.slidePrev();
    // });
});

$(".mobile-review-product").on("click", () => {
    // scroll to top
    $("html, body").animate(
        {
            scrollTop: 0,
        },
        {
            duration: 500,
            easing: "linear",
        }
    );
});

let isStickyEnabled = true;
// SHOW ADD TO CART BOX IN PRODUCT
function toggleProductToggle() {
    var scrollPosition = $(window).scrollTop();
    var triggerPosition = window.innerWidth > 768 ? 480 : 1300; // Adjust this value based on when you want to show the button

    if (scrollPosition > triggerPosition && isStickyEnabled) {
        $(".sticky-bottom.active").addClass("show");
    } else {
        $(".sticky-bottom.active").removeClass("show");
    }
}

$(window).on("scroll", function () {
    toggleProductToggle();
});

toggleProductToggle();

let isTaptoTop = true;
// SHOW ADD TO CART BOX IN PRODUCT
function toggleTapToTop() {
    var scrollPosition = $(window).scrollTop();
    var triggerPosition = window.innerWidth > 768 ? 200 : 300; // Adjust this value based on when you want to show the button

    if (scrollPosition > triggerPosition && isTaptoTop) {
        $("#backtotop").addClass("show");
    } else {
        $("#backtotop").removeClass("show");
    }
}

$(window).on("scroll", function () {
    toggleTapToTop();
});

toggleTapToTop();

/**
 * Increase and Decrease the number of product in product page
 */
$(".product-counter-inner .count-plus").on("click", (e) => {
    e.preventDefault();
    let input = $(e.target).parent().parent().find("input");
    let value = parseInt(input.val()) + 1;
    input.val(value);
    if (value > 0) {
        $(".product-counter-inner .count-minus").css("opacity", 1);
    }
});

$(".product-counter-inner .count-minus").on("click", (e) => {
    e.preventDefault();
    let input = $(e.target).parent().parent().find("input");
    let value = parseInt(input.val()) - 1;
    if (value >= 1) {
        input.val(value);
        if (value === 1) {
            $(".product-counter-inner .count-minus").css("opacity", 0.4);
        }
    }
});

$(".product-counter-inner input").on("change", (e) => {
    let value = parseInt($(e.target).val());
    if (isNaN(value) || value < 1) {
        $(e.target).val(1);
        $(".product-counter-inner .count-minus").css("opacity", 0.4);
    } else if (value === 1) {
        $(".product-counter-inner .count-minus").css("opacity", 0.4);
    } else {
        $(".product-counter-inner .count-minus").css("opacity", 1);
    }
});

/**
 * Remove item from cart
 */
$(".product-basket .remove-item").on("click", function (e) {
    // remove its parent .product-basket
    e.preventDefault();
    $.ajax("/api/remove-cart", {
        method: "POST",
        data: {
            id: $(this).data("id"),
        },
        success: function (response) {
            window.location.reload();
        },
        error: function () {
            toastr.error("خطایی رخ داده است. مجددا تلاش کنید");
        },
    });
});

/**
 * Remove all items from cart
 */
let removeAllCartsBlock = new KTBlockUI(
    document.getElementById("remove-all-carts"),
    {
        overlayClass: "",
        // overlayClass white and blue
        overlayClass: "tw-bg-white tw-bg-opacity-75",
    }
);
$("#remove-all-carts").on("click", function (e) {
    e.preventDefault();
    $.ajax("/api/remove-all-cart", {
        method: "POST",
        beforeSend: function () {
            removeAllCartsBlock.block();
        },
        success: function (response) {
            removeAllCartsBlock.release();
            window.location.reload();
        },
        error: function (err) {
            removeAllCartsBlock.release();
            toastr.error("خطایی رخ داده است. مجددا تلاش کنید");
        },
    });
});

// Shipping checkbox to collapse #anotherAddress
$("#sendtoanotheraddress").on("change", function () {
    if ($(this).is(":checked")) {
        $("#anotherAddress").slideDown();
    } else {
        $("#anotherAddress").slideUp();
    }
});


//Submit Review in User Dashboard Execute the code after the DOM (Document Object Model) is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Find the "Submit Review" button by its id
    var reviewSubmitBtn = document.getElementById("reviewSubmit");
    if(reviewSubmitBtn){
        // Add a click event listener to the button
        reviewSubmitBtn.addEventListener("click", function() {
            // Find the form by its id
            var reviewForm = document.getElementById("reviewForm");

            // Submit the form
            reviewForm.submit();
        });

    }
});




// showing send comment modal
$(".send-comment-btn-order").on("click", function (e) {
    let modal = new Modal("#commentModal");
    let id = $(this).data("id");
    let order = $(this).data("order");
    window["productId"] = id;
    window["orderId"] = order;
    $("#product_id").val(id);
    modal.show();
});

if ($("#commentModal").length > 0) {
    const myModalEl = document.getElementById("commentModal");
    myModalEl.addEventListener("hidden.bs.modal", (event) => {
        window["productId"] = "";
    });
}
