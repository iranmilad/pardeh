import $ from 'jquery';
let $input = $("input.pin");

$input.on("keydown", function (e) {
    var keyCode = e.keyCode;

    if ((keyCode === 46)                                  // allow delete
        || (keyCode == 86 && (e.ctrlKey || e.metaKey))) { // allow paste
        return true;
    }

    e.preventDefault();

    if (isNumKeyCode(keyCode)) { // digit
        this.value = String.fromCharCode(keyCode);
        moveNext(this);

    } else if (keyCode === 8) { // backspace
        if (!this.value) {
            movePrev(this); // removed .val('') to prevent clearing the previous input field
        } else {
            this.value = '';
        }

    } else if (keyCode === 37 || (e.shiftKey && keyCode === 9)) { // left, shift+tab
        movePrev(this);

    } else if (keyCode === 39 || keyCode === 9) { // right, tab
        moveNext(this);
    }

        // After handling the keydown event, get all pin values and set them to the input with id 'mobile'
        let mobileValue = '';
        $('input.pin').each(function (i, input) {
            mobileValue += input.value;
        });
        $('#code').val(mobileValue).css({
            "opacity": "0",
            "visibility": "hidden"
        });
});


$input.on('paste', function (e) {
    e.preventDefault();
    var data = e.originalEvent.clipboardData.getData('text/plain');
    var digits = data.trim().split('').filter(isNum);
    fill(digits);
});

function fill(digits) {
    $('input.pin').each(function (i, input) {
        input.value = digits[i] || '';
    });
    // focus last input
    $('input.pin').last().focus();
    let mobileValue = '';
    $('input.pin').each(function (i, input) {
        mobileValue += input.value;
    });
    $('#code').val(mobileValue).css({
        "opacity": "0",
        "visibility": "hidden"
    });
}

function isNum(c) {
    return !isNaN(c) && !!c.trim();
}

function isNumKeyCode(keyCode) {
    return 48 <= keyCode && keyCode <= 57;
}

function moveNext(el) {
    return $(el).next().focus();
}

function movePrev(el) {
    return $(el).prev().focus();
}

function startCounter() {
    let counter = 60;
    let $span = $("#count");
    let $resendcode = $("#resendcode");
    $span.removeClass("d-none");
    $resendcode.addClass("d-none");
    let interval = setInterval(function () {
        --counter;
        if (counter >= 0) {
            $span.html(counter);
        }
        if (counter === 0) {
            clearInterval(interval);
            $span.html("");
            $span.addClass("d-none");
            $resendcode.removeClass("d-none");
        }
    }, 1000);
}

window.onload = startCounter

$('#resendcode').on('click', function () {
    // use ajax to send request to server
    $.ajax({
        url: '/resend-verification-code',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            mobile: $('input[name="mobile"]').val()
        },
        success: function (response) {
            if (response) {
                // call startCounter function
                startCounter();
            }
        }
    });
});

