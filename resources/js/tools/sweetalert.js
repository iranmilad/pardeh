import Swal from "sweetalert2";

function $SWAL({title, msg, icon, confirmButtonText}) {
    Swal.fire({
        title,
        text: msg,
        icon,
        confirmButtonText,
    });
}

window.$SWAL = $SWAL;
