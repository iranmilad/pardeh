<!-- !!DATA IS FILLED BY JS!!  -->

<!-- action must be fill. and action address must be redirect without change anything -->
<!-- if user clicks on each chat, /?id is added in address. -->
<!-- for example if user sends a message with ?id=2. after redirect, that chat is shown when page is loaded -->

<div class="chatbox">
    <div class="header">
        <!-- TITLE OF MESSAGE -->
        <span></span>
        <button class="btn custom-btn-primary btn-sm  tw-rounded-xl" id="chatbox-back">بازگشت</button>
    </div>
    <div class="main">
        <!-- MESSAGES -->
    </div>
    <div class="tw-px-5">
        <form action="/dashboard/notifications" method="post" class="send-box" id="send-box">
            @csrf
            <input type="hidden" name="session" value="">
            <button type="button" class="btn tw-text-gray-400" id="exist-message-file">
                <i class="fa-regular fa-paperclip "></i>
            </button>
            <textarea name="message" id="" placeholder="متن خود را بنویسید"></textarea>

            <!-- value is filled liek: value="[1,2,3,4]" -->
            <!-- an array of ids of uploaded files -->
            <input type="hidden" name="file" id="exist-msg-file">
            <button type="submit" class="btn custom-btn-primary" id="sendMessage">
                <i class="fa-solid fa-paper-plane-top"></i>
            </button>
        </form>
    </div>
</div>
