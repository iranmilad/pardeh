import $ from "jquery";
import { hydrate } from "preact";

$(".messages-private-box").each(function(e){
    $(this).on("click", function(event){
        let id = $(this).data("id");
        console.log(id)
    });
})
