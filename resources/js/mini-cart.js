import $ from "jquery";
import KTBlockUI from "./tools/blockui";
import toastr from "toastr";
/**
 * This file is for mini-cart blade component
 */

let block = new KTBlockUI(document.querySelector("#miniCart .offcanvas-body"));

$("#miniCart .remove-item").on("click", function () {
    let item = $(this).closest(".mini-cart-box");
    $.ajax("/api/remove-cart", {
        beforeSend: function () {
            block.block();
        },
        method: "POST",
        data: {
            id: item.data("id"),
        },
        success: function (response) {
            block.release();
            item.fadeOut(300, () => {
                item.remove();
                if (response.cart && response.cart.count > 0) {
                    $(".navbar-cart span").text(response.cart.count);
                    $("#mini-cart-price").text(response.cart.total);
                }
                else{
                    $("#miniCart .offcanvas-body").html(
                        "<p class='text-center'>سبد خرید خالی است</p>"
                    );
                }
            });
        },
        error: function (xhr, status, error) {
            block.release();
            toastr.error("خطایی رخ داده است");
        },
    });
});
