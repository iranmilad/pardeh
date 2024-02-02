import.meta.glob(["../images/**"]);

import iranData from "./iran_cities_with_coordinates.json";

// core version + navigation, pagination modules:
import $, { data } from "jquery";
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
import noUi from "nouislider";
import "../css/vendors/nouislider/nouislider.css";
import "./tools/alarm";
import "./tools/sweetalert";
import "./search";
import "./messages-dashboard";
import { StarComponent } from "./components";
import { hydrate } from "preact";
import Plyr from "plyr";
import "plyr/dist/plyr.css";

// this is my swiper .headerSlider

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
            slidesPerView: 1,
        },
        567: {
            slidesPerView: 3,
        },
        768: {
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
    autoplay: true,
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
    slidesPerView: "auto",
    spaceBetween: 15,
});

$(document).on("DOMContentLoaded", function () {
    if ($(".province")) {
        const provinceSelect = $(".province");
        provinceSelect.append(
            '<option value="" selected disabled>لطفاً یک استان را انتخاب کنید</option>'
        );
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
        url: "https://jsonplaceholder.typicode.com/posts",
        method: "POST",
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
                url: "https://jsonplaceholder.typicode.com/posts",
                method: "POST",
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

$("#sendMessageBtn").on("click", function (e) {
    var button = $(this);
    var defaultText = "ارسال پیام";
    var closeText = "بستن";

    if (button.text() === defaultText) {
        button.text(closeText);
        button.addClass("btn-danger").removeClass("custom-btn-primary");
    } else {
        button.text(defaultText);
        button.removeClass("btn-danger").addClass("custom-btn-primary");
    }
});

if ($(".price-range,.price-range1").length > 0) {
    let minPrice = $(".minPrice");
    let maxPrice = $(".maxPrice");

    // set max and min values of slider
    maxPrice.val($(".price-range").data("max"));
    minPrice.val($(".price-range").data("min"));

    let slider = $(".price-range");
    let slider1 = $(".price-range1");
    let priceSlider = noUi.create(slider[0], {
        start: [
            +$(".price-range").data("defaultmin"),
            +$(".price-range").data("defaultmax"),
        ],
        connect: true,
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
    let priceSlider1 = noUi.create(slider1[0], {
        start: [
            +$(".price-range").data("defaultmin"),
            +$(".price-range").data("defaultmax"),
        ],
        connect: true,
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
    priceSlider1.on("update", function (values, handle) {
        if (values) {
            // Update the corresponding input field based on the active handle
            if (handle === 0) {
                minPrice.val(`${values[0]}`);
            } else {
                maxPrice.val(`${values[1]}`);
            }
        }
    });
}

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
 * CREATE STAR RATING AS DEFAULT. NOT HOVER THEM TO SHOW RATING
 */
// Use jQuery to find elements with the specified data-stars attribute and render the StarComponent
$(document).ready(function () {
    $(".stared").each(function (e) {
        if ($(this).data("stars")) {
            const dataStars = $(this).attr("data-stars");
            const noLabel = $(this).attr("data-no-label");
            hydrate(
                React.createElement(StarComponent, {
                    dataStars: dataStars,
                    no_label: noLabel !== "" ? true : false,
                }),
                this
            );
        }
    });
});
let product_review_images = new Swiper(".product-review-images", {
    slidesPerView: 8,
    spaceBetween: 10,
});

$(".main-navbar .dropdown [data-bs-toggle='dropdown']")
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
    const swiper = new Swiper(this, {
        modules: [Navigation],
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
            nextEl: $(this).parent().find(".product-option-next")[0],
            prevEl: $(this).parent().find(".product-option-prev")[0],
        },
        breakpoints: {
            120: {
                slidesPerView: 4,
                spaceBetween: 10,
                freeMode: true,
            },
            768: {
                slidesPerView: 6,
            },
        },
    });

    swiper.navigation.nextEl.addEventListener("click", function () {
        swiper.slideNext();
    });

    swiper.navigation.prevEl.addEventListener("click", function () {
        swiper.slidePrev();
    });
});


const targetElement = document.querySelector(".productImage");

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            $(".mobile-review-product").fadeIn(300).addClass("show");
        } else {
            $(".mobile-review-product").fadeOut(300).remove("show");
        }
    });
}, {
    root: null,
    rootMargin: "0px",
    threshold: 0.5
});

observer.observe(targetElement);

$(".mobile-review-product").on('click', () => {
    // scroll to top
    $("html, body").animate({
        scrollTop: 0
    }, {
        duration: 500,
        easing: 'linear'
    });
});
