import $ from "jquery";
import {Modal } from 'bootstrap';
import KTBlockUI from "./tools/blockui.js";
import { hydrate ,createElement} from "preact";
import {ShowDetails} from "./components.jsx"

var myModal = new Modal(document.getElementById("priceModal"), {
    keyboard: false,
});

let selectSpan = null;

let block = new KTBlockUI(
    document.querySelector("#priceModal .product_details"),
    {
        overlayClass: "tw-bg-transparent",
    }
);

document.querySelectorAll(".image_dotter").forEach(function (element) {
    $(element)
        .find("span")
        .map(function (index, span) {
            $(span).on("click", (e) => {
                let thisSpan = $(e.target);
                let id = thisSpan.data("id");
                $.ajax({
                    url: `https://jsonplaceholder.typicode.com/posts/${id}`,
                    beforeSend: function () {
                        $("#priceModal .product_details").html("");
                        myModal.show();
                        block.block();
                    },
                    success: function (result) {
                        block.release();
                        let product = {
                            name: "محصول شماره 1",
                            img: "https://picsum.photos/200",
                            price: "25,000,000",
                            discount: "18,000,000",
                        };
                        let productDetails = document.querySelector(
                            "#priceModal .product_details"
                        );
                        hydrate(
                            createElement(ShowDetails, product),
                            productDetails
                        );
                    },
                });
            });
        });
});

$("#priceModal .closeModal").on("click", () => {
    myModal.hide();
    $("#priceModal .product_details").html("");
});

