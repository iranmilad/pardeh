import toastr from "toastr";

/**
 * Call Alarm Blade
 *
 */
function Alarm({
    msg,
    title,
    closeButton = true,
    debug = false,
    newestOnTop = false,
    progressBar = false,
    positionClass = "toastr-bottom-right",
    preventDuplicates = true,
    onclick = null,
    showDuration = "300",
    hideDuration = "1000",
    timeOut = "5000",
    extendedTimeOut = "1000",
    showEasing = "swing",
    hideEasing = "linear",
    showMethod = "fadeIn",
    hideMethod = "fadeOut",
    type = "success",
}) {
    toastr.options = {
        closeButton: eval(closeButton),
        debug: eval(debug),
        newestOnTop: eval(newestOnTop),
        progressBar: eval(progressBar),
        positionClass,
        preventDuplicates: eval(preventDuplicates),
        onclick: eval(onclick),
        showDuration,
        hideDuration,
        timeOut,
        extendedTimeOut,
        showEasing,
        hideEasing,
        showMethod,
        hideMethod,
    };
    if (type === "success") toastr.success(msg, title);
    if (type === "info") toastr.info(msg, title);
    if (type === "warning") toastr.warning(msg, title);
    if (type === "error") toastr.error(msg, title);
}

window.Alarm = Alarm;