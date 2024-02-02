import $ from "jquery";
import "jquery-validation";
import KTBlockUI from "./tools/blockui"

$.validator.addMethod(
    "callbackValidation",
    function (value, element, params) {
        // Call the provided callback function with the value and any additional parameters
        var validationResult = params.callback(value);

        // Check the result of the custom validation
        if (Array.isArray(validationResult)) {
            // validationResult[0] should be a boolean indicating whether the validation passed
            return validationResult[0];
        } else {
            // Default to false if the result is not an array
            return false;
        }
    },
    function (params, element) {
        // Return the custom error message if validation failed
        return params.callback(element.value)[1];
    }
);

const validationPlaces = {
    errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.next('.invalid-feedback,.error').remove();
        error.insertAfter(element);
    },
    errorClass: "is-invalid",
    highlight: function (element, errorClass, validClass) {
        $(element).addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass(errorClass).addClass(validClass);
    },
};

// Register Form Validation
$("#registerForm").validate({
    rules: {
        name: "required",
        family: "required",
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
        },
        confirm_password: {
            required: true,
            equalTo: "#password", // Make sure it's equal to the value of #password
        },
    },
    messages: {
        name: "لطفا نام خود را وارد کنید",
        family: "لطفا نام خانوادگی خود را وارد کنید",
        email: {
            required: "لطفا ایمیل خود را وارد کنید",
            email: "ایمیل وارد شده معتبر نیست",
        },
        password: {
            required: "لطفا رمز عبور خود را وارد کنید",
        },
        confirm_password: {
            required: "لطفا تکرار رمز عبور را وارد کنید",
            equalTo: "تکرار رمز عبور با رمز عبور مطابقت ندارد",
        },
    },
    ...validationPlaces,
});

// Login Form Validation
$("#loginForm").validate({
    rules: {
        phone: {
            required: true,
            minlength: 11,
            maxlength: 11,
            digits: true,
        },
        password: {
            required: true,
        },
    },
    messages: {
        phone: {
            required: "لطفا شماره تلفن خود را وارد کنید",
            minlength: "شماره تلفن باید 11 رقم باشد",
            maxlength: "شماره تلفن باید 11 رقم باشد",
            digits: "شماره تلفن باید عدد باشد",
        },
        password: {
            required: "لطفا رمز عبور خود را وارد کنید",
        },
    },
    ...validationPlaces,
});

// Change Password Form Validation
$("#changepassForm").validate({
    rules: {
        mobile: "required",
    },
    messages: {
        mobile: {
            required: "لطفا شماره تلفن خود را وارد کنید",
        },
    },
    ...validationPlaces,
});

// Verify Form Validation
$("#verifyForm").validate({
    rules: {
        code: {
            required: true,
            minlength: 5,
            maxlength: 5,
        },
    },
    messages: {
        code: {
            required: "لطفا کد تایید را وارد کنید",
            minlength: "کد تایید باید 5 رقم باشد",
            maxlength: "کد تایید باید 5 رقم باشد",
        },
    },
    ...validationPlaces,
});

$("#commentForm").validate({
    rules: {
        name: "required",
        email: {
            required: true,
            email: true,
        },
        content: "required",
    },
    messages: {
        name: "لطفا نام خود را وارد کنید",
        email: {
            required: "لطفا ایمیل خود را وارد کنید",
            email: "ایمیل وارد شده معتبر نیست",
        },
        content: "دیدگاه خود را وارد کنید",
    },
    ...validationPlaces,
});

// contact us form
$("#contactForm").validate({
    rules: {
        name: "required",
        email: {
            required: true,
            email: true,
        },
        subject: "required",
        content: "required",
        phone: {
            required: true,
            minlength: 11,
            maxlength: 11,
            digits: true,
        },
    },
    messages: {
        name: "لطفا نام خود را وارد کنید",
        email: {
            required: "لطفا ایمیل خود را وارد کنید",
            email: "ایمیل وارد شده معتبر نیست",
        },
        subject: "لطفا موضوع را وارد کنید",
        content: "لطفا متن پیام را وارد کنید",
        phone: {
            required: "لطفا شماره تلفن خود را وارد کنید",
            minlength: "شماره تلفن باید 11 رقم باشد",
            maxlength: "شماره تلفن باید 11 رقم باشد",
            digits: "شماره تلفن باید عدد باشد",
        },
    },
    ...validationPlaces,
});

// shipping form
let shippingForm = $("#shippingForm").validate({
    rules: {
        name: "required",
        family: "required",
        mobile: {
            required: true,
            minlength: 11,
            maxlength: 11,
            digits: true,
        },
        province: "required",
        city: "required",
        address: "required",
        postal_code: {
            required: true,
            minlength: 10,
            maxlength: 10,
            digits: true,
        },
        shipping_name: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            }
        },
        shipping_family: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            }
        },
        shipping_mobile: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            },
            minlength: 11,
            maxlength: 11,
            digits: true,
        },
        shipping_province: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            }
        },
        shipping_city: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            }
        },
        shipping_address: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            }
        },
        shipping_postal_code: {
            required: function() {
                return $("#sendtoanotheraddress").is(":checked")
            },
            minlength: 10,
            maxlength: 10,
            digits: true,
        },
    },
    messages: {
        name: "لطفا نام خود را وارد کنید",
        family: "لطفا نام خانوادگی خود را وارد کنید",
        mobile: {
            required: "لطفا شماره تلفن خود را وارد کنید",
            minlength: "شماره تلفن باید 11 رقم باشد",
            maxlength: "شماره تلفن باید 11 رقم باشد",
            digits: "شماره تلفن باید عدد باشد",
        },
        province: "لطفا استان خود را وارد کنید",
        city: "لطفا شهر خود را وارد کنید",
        address: "لطفا آدرس خود را وارد کنید",
        postal_code: {
            required: "لطفا کد پستی خود را وارد کنید",
            minlength: "کد پستی باید 10 رقم باشد",
            maxlength: "کد پستی باید 10 رقم باشد",
            digits: "کد پستی باید عدد باشد",
        },
        shipping_name: "لطفا نام را وارد کنید",
        shipping_family: "لطفا نام خانوادگی را وارد کنید",
        shipping_mobile: {
            required: "لطفا شماره تلفن را وارد کنید",
            minlength: "شماره تلفن باید 11 رقم باشد",
            maxlength: "شماره تلفن باید 11 رقم باشد",
            digits: "شماره تلفن باید عدد باشد",
        },
        shipping_province: "لطفا استان را وارد کنید",
        shipping_city: "لطفا شهر را وارد کنید",
        shipping_address: "لطفا آدرس را وارد کنید",
        shipping_postal_code: {
            required: "لطفا کد پستی را وارد کنید",
            minlength: "کد پستی باید 10 رقم باشد",
            maxlength: "کد پستی باید 10 رقم باشد",
            digits: "کد پستی باید عدد باشد",
        },
    },
    ...validationPlaces,
});

$("#shipping-pay").on("click", function(e){
    shippingForm.form();
    $("#shippingForm").submit();
});

// dashboard user info
$("#userinfo").validate({
    rules: {
        name: "required",
        family: "required",
        mobile: {
            required: true,
            minlength: 11,
            maxlength: 11,
            digits: true,
        },
        province: "required",
        city: "required",
        address: "required",
        postal_code: {
            required: true,
            minlength: 10,
            maxlength: 10,
            digits: true,
        },
    },
    messages: {
        name: "لطفا نام خود را وارد کنید",
        family: "لطفا نام خانوادگی خود را وارد کنید",
        mobile: {
            required: "لطفا شماره تلفن خود را وارد کنید",
            minlength: "شماره تلفن باید 11 رقم باشد",
            maxlength: "شماره تلفن باید 11 رقم باشد",
            digits: "شماره تلفن باید عدد باشد",
        },
        province: "لطفا استان خود را وارد کنید",
        city: "لطفا شهر خود را وارد کنید",
        address: "لطفا آدرس خود را وارد کنید",
        postal_code: {
            required: "لطفا کد پستی خود را وارد کنید",
            minlength: "کد پستی باید 10 رقم باشد",
            maxlength: "کد پستی باید 10 رقم باشد",
            digits: "کد پستی باید عدد باشد",
        },
    },
    ...validationPlaces,
});

// change password in user dashboard
$("#changepass-dashboard").validate({
    // currentpass, password, confirm_password
    rules: {
        currentpass: "required",
        password: {
            required: true,
        },
        confirm_password: {
            required: true,
            equalTo: "#password", // Make sure it's equal to the value of #password
        },
    },
    messages: {
        currentpass: "لطفا رمز عبور فعلی خود را وارد کنید",
        password: {
            required: "لطفا رمز عبور خود را وارد کنید",
        },
        confirm_password: {
            required: "لطفا تکرار رمز عبور را وارد کنید",
            equalTo: "تکرار رمز عبور با رمز عبور مطابقت ندارد",
        },
    },
    ...validationPlaces,
});