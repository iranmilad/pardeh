import $ from "jquery";
import { Modal } from "bootstrap";
import KTBlockUI from "./tools/blockui.js";


let block = new KTBlockUI(document.querySelector("#detailsModal .modal-body"), {
    overlayClass: "tw-bg-transparent",
});

$(".cart-show-detail").on("click", function () {
    const productId = $(this).data("product-id");
    let myModal = new Modal("#detailsModal", {
        keyboard: false,
    });
    $.ajax({
        url: `/api/cart/${productId}`,
        beforeSend: function () {
            block.block();
        },
        success: function (result) {
            $("#detailsModal .modal-body").html("");
            block.release();
            myModal.show();
            $("#detailsModal .modal-body").html(result.html);
        },
        error: function (error) {
            console.log(error);
        }
    });
});
