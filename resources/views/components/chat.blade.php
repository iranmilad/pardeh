<div class="chatbox">
    <div class="header">
        <span>
            نحوه ی انتخاب بهترین پرده برای کتابفروشی
        </span>
        <button class="btn custom-btn-primary btn-sm  tw-rounded-lg" id="chatbox-back">بازگشت</button>
    </div>
    <div class="main">
        <div class="your">
            <div class="text-chat">
                <span>سلام این عکس پرده هایی هست که من نصب کردم</span>
                <span class="chat-time">12/05/1402</span>
            </div>
            <div class="files">
                <a href="{{ Vite::asset('resources/images/categories/1.jpg') }}" target="_blank">
                    <img src="{{ Vite::asset('resources/images/categories/1.jpg') }}" alt="">
                </a>
                <a href="{{ Vite::asset('resources/images/categories/2.jpg') }}" target="_blank">
                    <img src="{{ Vite::asset('resources/images/categories/2.jpg') }}" alt="">
                </a>
                <a href="{{ Vite::asset('resources/images/categories/3.jpg') }}" target="_blank">
                    <img src="{{ Vite::asset('resources/images/categories/3.jpg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="its-box">
            <div class="profile">
                <i class="fa-light fa-user"></i>
            </div>
            <div class="its">
                <div class="text-chat">
                    <span>سلام ، خیلیم عالی</span>
                    <span class="chat-time">12/05/1402</span>
                </div>
                <div class="files">
                    <a href="{{ Vite::asset('resources/images/categories/1.jpg') }}" target="_blank">
                        <img src="{{ Vite::asset('resources/images/categories/1.jpg') }}" alt="">
                    </a>
                    <a href="{{ Vite::asset('resources/images/categories/2.jpg') }}" target="_blank">
                        <img src="{{ Vite::asset('resources/images/categories/2.jpg') }}" alt="">
                    </a>
                    <a href="{{ Vite::asset('resources/images/categories/3.jpg') }}" target="_blank">
                        <img src="{{ Vite::asset('resources/images/categories/3.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tw-px-5">
        <form action="" method="post" class="send-box" id="send-box">
            <button class="btn tw-text-gray-400" id="exist-message-file">
                <i class="fa-regular fa-paperclip "></i>
            </button>
            <textarea name="message" id="" placeholder="متن خود را بنویسید"></textarea>
            <input type="hidden" name="file" id="exist-msg-file">
            <button class="btn custom-btn-primary" id="sendMessage">
                <i class="fa-solid fa-paper-plane-top"></i>
            </button>
        </form>
    </div>
</div>