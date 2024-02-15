import $ from "jquery";
import { hydrate } from "preact";
import "jquery-validation";

$(".messages-private-box").each(function(e){
    $(this).on("click", function(event){
        let id = $(this).data("id");
        $(".chatbox").fadeIn(200);
        // if with is less than 992px add overflow hidden to body
        if($(window).width() < 992){
            $("body").css("overflow", "hidden");
            // set scroll to top 0
        }
    });
})

$("#chatbox-back").on("click", function(event){
    $(".chatbox").fadeOut(200);
    $("body").css("overflow", "auto");
});

let allowSend = false;

$("#send-box [name='message']").on("input", function(event){
    let val = $(this).val().trim();
    // check no space and no empty and no null and whitespace
    let regex = new RegExp("^(?![\\s\\S])");
    if(val.length > 0 && !regex.test(val)){
        allowSend = true;
        $("#sendMessage").css("display", "block");
    } else {
        allowSend = false;
        $("#sendMessage").css("display", "none");
    }
});