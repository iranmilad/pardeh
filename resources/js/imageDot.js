import $ from "jquery";
import * as bootstrap from "bootstrap";
import KTBlockUI from "./tools/blockui.js";

var myModal = new bootstrap.Modal(document.getElementById("priceModal"), {
    keyboard: false,
});

let selectSpan = null;

let block = new KTBlockUI(
    document.querySelector("#priceModal .product_details"),
    {
        overlayClass: "tw-bg-transparent",
    }
);

function showProduct() {
    document.querySelectorAll(".image_dotter").forEach(function (element) {
        $(element)
            .find("span")
            .map(function (index, span) {
                $(span).on("click", (e) => {
                    let thisSpan = $(e.target);
                    let id = thisSpan.data("id");
                    $.ajax({
                        url: `/api/imgdot/${id}`,
                        beforeSend: function () {
                            $("#priceModal .product_details").html("");
                            myModal.show();
                            block.block();
                        },
                        success: function (result) {
                            $("#priceModal .product_details").html(result.html);
                            $("#priceModal .modal-footer a").attr(
                                "href",
                                `/product/`
                            );
                            block.release();
                        },
                    });
                });
            });
    });
}

$("#priceModal .closeModal").on("click", () => {
    myModal.hide();
    $("#priceModal .product_details").html("");
});

// with regex find [marker id="1"]
let regex = /\[marker id="(\d+)"\]/g;
let matches = document
    .querySelector(".blog-post-content")
    .innerHTML.match(regex);
let markers = [];
if (matches) {
    matches.forEach((match) => {
        let id = match.match(/\d+/)[0];
        markers.push(id);
    });
}

markers.forEach((id) => {
    $.ajax({
        url: `/api/marker/${id}`,
        beforeSend: function () {
            block.block();
        },
        success: function (result) {
            // remove the marker from the content
            document.querySelector(".blog-post-content").innerHTML = document
                .querySelector(".blog-post-content")
                .innerHTML.replace(`[marker id="${id}"]`, result.html);
                showProduct();
            block.release();
        },
    });
});
