import $ from "jquery";
import "@sjmc11/tourguidejs/src/scss/tour.scss" // Styles
import {TourGuideClient} from "@sjmc11/tourguidejs/src/Tour";

const tg = new TourGuideClient({
    nextLabel: "بعدی",
    prevLabel: "قبلی",
    hidePrev: true,
    doneLabel: "اتمام",
    skipLabel: "رد کردن",
    closeLabel: "بستن",
    showClose: true,
    rememberStep: true,
    finishLabel: "متوجه شدم",
    showStepDots: false,
    showStepProgress: false,
    steps: [
        {
            content: "برای مشاهده اطلاعات کامل خدمت، روی علامت + در کنار آن در بخش خدمات کلیک کنید",
            target: ".tour-guide"
        }
    ],
    debug: false
})

$("#show-tour-guide").on("click" , function(){
    tg.start();
})

if($("#show-tour-guide").length > 0){
    if(!document.cookie.includes('tour=false')) {
        tg.start()
    }
}

tg.onFinish(() => {
    // add tour false to cookie
    const date = new Date();
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    document.cookie = `tour=false; expires=${date.toUTCString()}; path=/`;
})