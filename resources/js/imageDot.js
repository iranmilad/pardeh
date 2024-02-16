import $ from "jquery";
import "./bootstrap.bundle.min.js"
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
                        $("#priceModal .product_details").html(result.html)
                        $("#priceModal .modal-footer a").attr("href",`/product/`)
                        block.release();
                    },
                });
            });
        });
});

$("#priceModal .closeModal").on("click", () => {
    myModal.hide();
    $("#priceModal .product_details").html("");
});

