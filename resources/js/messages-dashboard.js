import $ from "jquery";
import { hydrate, createElement } from "preact";
import "jquery-validation";
import KTBlockUI from "./tools/blockui";

let block = new KTBlockUI(document.getElementById("messages-whole-box"));

$(".messages-private-box").on("click", function (event) {
    let id = $(this).data("id");
    window.history.pushState("", "", `?id=${id}`);
    fetchMessages(id);
});

document.addEventListener("DOMContentLoaded", function () {
    let url = new URL(window.location.href);
    let id = url.searchParams.get("id");
    if (id) {
        fetchMessages(id);
    }
});

$("#chatbox-back").on("click", function (event) {
    $(".chatbox").fadeOut(200);
    window.history.pushState("", "", window.location.pathname);
    $("body").css("overflow", "auto");
});

function fetchMessages(id) {
    $.ajax({
        url: `/api/messages/${id}`,
        method: "GET",
        beforeSend: function () {
            block.block();
        },
        success: function (data) {
            $(".chatbox .header span").html(data.message.title);
            hydrate(
                createElement(Messages, { messages: data.message.messages }),
                document.querySelector(".chatbox .main")
            );
            block.release();
            $(".chatbox").fadeIn(200);
            if ($(window).width() < 992) {
                $("body").css("overflow", "hidden");
                // set scroll to top 0
            }
        },
        error: function (xhr, status, error) {
            block.release();
        },
    });
}

let allowSend = false;

$("#send-box [name='message']").on("input", function (event) {
    let val = $(this).val().trim();
    // check no space and no empty and no null and whitespace
    let regex = new RegExp("^(?![\\s\\S])");
    if (val.length > 0 && !regex.test(val)) {
        allowSend = true;
        $("#sendMessage").css("display", "block");
    } else {
        allowSend = false;
        $("#sendMessage").css("display", "none");
    }
});

const Messages = ({ messages }) => {
    console.log(messages)
    return messages.map((message, id) => {
        if (message.you === true) {
            return (
                <div class="your">
                    <div class="text-chat">
                        <span>{message.message}</span>
                        <span class="chat-time">{message.created_at}</span>
                    </div>
                    <div class="files">
                        {message.files.map((file, id) => (
                            <a key={id} href={file} target="_blank">
                                <img src={file} alt={`ID_` + id} />
                            </a>
                        ))}
                    </div>
                </div>
            );
        } else {
            return (
                <div class="its-box">
                    <div class="profile">
                        <i class="fa-light fa-user"></i>
                    </div>
                    <div class="its">
                        <div class="text-chat">
                            <span>{message.message}</span>
                            <span class="chat-time">{message.created_at}</span>
                        </div>
                        <div class="files">
                            {message.files.map((file, id) => (
                                <a key={id} href={file} target="_blank">
                                    <img src={file} alt={`ID_` + id} />
                                </a>
                            ))}
                        </div>
                    </div>
                </div>
            );
        }
    });
};
