import $ from "jquery";
import KTBlockUI from "./tools/blockui";
import toastr from "toastr";
import Swiper from "swiper";
import { Navigation, Thumbs, FreeMode, Pagination, Autoplay } from "swiper/modules";
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";
import "./tools/jquery-zoom";

let inputs = $("#product-options input:not([name='_token'])");

// filter inputs based on data-real

let block = new KTBlockUI(document.body,{
    overlayClass: "bigLoading blockui",
})

inputs.filter(function() {
    return $(this).data("real") === true;
}).on("change", function() {
    let data = $("#product-options").serializeArray();
    $.ajax({
        type: "POST",
        url: "/api/product",
        data: data,
        beforeSend: function(){
            block.block();
        },
        success: function(response){
            block.release();
            if(!response.price){
                $("#main-cart-price-details").html(`
                    <h4 class="text-center tw-text-brand-500">ناموجود</h4>
                    <div class="text-center tw-text-sm">
                        این کالا فعلا موجود نیست اما می‌توانید زنگوله را بزنید تا به محض موجود شدن، به شما خبر دهیم.
                    </div>
                    <div class="tw-w-full tw-flex tw-items-center tw-justify-center">
                        <button class="btn custom-btn-primary btn-sm btn-block tw-rounded-xl tw-w-full mt-3">
                        خبرم کن</button>
                    </div>
                `);
            }
        },
        error: function(xhr, status, error){
            block.release();
            console.log(xhr);
        }
    });
});


$(".add-to-cart-main-btn").on("click", function(){
    let data = $("#product-options").serializeArray();
    $.ajax({
        type: "POST",
        url: "/api/add-to-cart",
        data: data,
        beforeSend: function(){
            block.block();
        },
        success: function(response){
            block.release();
            toastr.success(response.message);
            if (response.cart && response.cart.count > 0) {
                $(".navbar-cart span").text(response.cart.count);
            }
        },
        error: function(xhr, status, error){
            block.release();
            toastr.error("مشکلی پیش آمده است")
        }
    });
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
$(document).ready(function(){

    if($(".zoom").length > 0){
        zoomElm(productImage.slides[productImage.activeIndex].querySelector('img.zoom'));
        productImage.on("slideChange", function (e) {
          // remove zoom from previous .swiper-slide img.zoom
          // $('.productImage .swiper-slide img.zoom').trigger('zoom.destroy');
          // add zoom to current .swiper-slide img.zoom
          $(productImage.slides[productImage.activeIndex]).find('img').addClass('zoom');
          zoomElm(productImage.slides[productImage.activeIndex].querySelector('img.zoom'));
        });
    }
  });

function zoomElm(el){
    $(el).wrap('<span style="display:inline-block;"></span>')
    .css({
      'display': 'block',
      'border-radius': '16px',
    })
    .parent()
    .zoom({
      url: $(el).attr('data-zoom'),
      magnify: 1.2,
      callback: function(){
        $(this).on("click", function(elm){
            Fancybox.show(newGallery,{
                startIndex: productImage.activeIndex,
            })
        })
      },
    });
}