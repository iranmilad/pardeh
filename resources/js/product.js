import $ from "jquery";
import KTBlockUI from "./tools/blockui";

let inputs = $("#product-options input:not([name='_token'])");

// filter inputs based on data-real

let block = new KTBlockUI(document.body,{
    overlayClass: "bigLoading blockui",
})

inputs.filter(function() {
    return $(this).data("real") === true;
}).on("change", function() {
    let data = $("#product-options").serializeArray();
    dataToServer(data);
});

function dataToServer(data){
    $.ajax({
        type: "POST",
        url: "/product",
        data: data,
        beforeSend: function(){
            block.block();
        },
        success: function(response){
          block.release();
            console.log(response);
        },
        error: function(xhr, status, error){
          block.release();
            console.log(xhr);
        }
    });
}