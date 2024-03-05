import Uppy from "@uppy/core";
import XHRUpload from "@uppy/xhr-upload";
import ThumbnailGenerator from "@uppy/thumbnail-generator";
import StatusBar from "@uppy/status-bar";
import ProgressBar from "@uppy/progress-bar";
import Dashboard from "@uppy/dashboard";
import "@uppy/dashboard/dist/style.min.css";
import Persian from "@uppy/locales/lib/fa_IR";
import $ from "jquery";
import "./bootstrap.bundle.min.js";
import "@uppy/core/dist/style.min.css";
import "@uppy/drag-drop/dist/style.min.css";
import "@uppy/status-bar/dist/style.min.css";
import "@uppy/progress-bar/dist/style.min.css";

if(document.getElementById("upload-file-modal")){
    const uppy = new Uppy({
        autoProceed: false,
        // file types and size
        restrictions: {
            maxFileSize: 10000000,
            maxNumberOfFiles: 10,
            minNumberOfFiles: 1,
            allowedFileTypes: ["image/*"],
        },
        allowMultipleUploadBatches: false,
        // tranlsation
        locale: Persian,
    });
    
    uppy.use(XHRUpload, {
        endpoint: "/api/file/upload",
        fieldName: "file",
        formData: true,
    });
    
    uppy.use(ThumbnailGenerator, {
        thumbnailWidth: 200,
    });
    
    uppy.use(ProgressBar, { target: "#progress-bar" });
    
    // uppy.use(StatusBar,{target:"#upload-status-bar"})
    
    uppy.use(Dashboard, {
        inline: true,
        target: "#file-uploader",
        proudlyDisplayPoweredByUppy: false,
    });
    
    
    // Function to update the file input value
    function updateFileInputValue(inputId, fileId) {
        let fileInput = document.getElementById(inputId);
        let fileValue = fileInput.value;
        let fileArray = fileValue.split(",");
        fileArray.push(fileId);
        fileInput.value = fileArray.join(",");
    }
    
    // Function to remove the file from the input
    function removeFileFromInput(inputId, fileId) {
        let fileInput = document.getElementById(inputId);
        let fileValue = fileInput.value;
        let fileArray = fileValue.split(",");
        let index = fileArray.indexOf(fileId);
        fileArray.splice(index, 1);
        fileInput.value = fileArray.join(",");
    }
    
    uppy.on("upload-success", (file, response) => {
        const fileId = response.body.id; // Adjust this based on your server response
    
        if (UploadType === "new") {
            updateFileInputValue("new-msg-file", fileId);
        }
    
        if (UploadType === "exist") {
            updateFileInputValue("exist-msg-file", fileId);
        }
    });
    
    // Set event for removing a file
    uppy.on("file-removed", (file, reason) => {
        // Send request to server to remove the file
        $.ajax({
            url: "/api/file/remove",
            method: "DELETE",
            data: {
                id: file.id,
            },
            success: function (response) {
                if (UploadType === "new") {
                    removeFileFromInput("new-msg-file", file.id);
                }
    
                if (UploadType === "exist") {
                    removeFileFromInput("exist-msg-file", file.id);
                }
            },
        });
    });
    
    // if uppy is empty, show a message
    uppy.on("file-removed", () => {
        if(uppy.getFiles().length === 0){
            $(".uppy-Dashboard-AddFiles-list").html("<p>10 فایل با حداکثر حجم 10 مگابایت</p>")
        }
    });
    
    $(".uppy-Dashboard-AddFiles-list").html("<p>10 فایل با حداکثر حجم 10 مگابایت</p>")
    
    /**
     * @type {enum} 
     */
    let UploadType = "";
    
    $('#new-message-file').on('click', function () {
        UploadType = "new";
        let modal = new bootstrap.Modal(document.getElementById("upload-file-modal"));
        modal.show();
    })
    
    $('#exist-message-file').on('click', function () {
        UploadType = "exist";
        let modal = new bootstrap.Modal(document.getElementById("upload-file-modal"));
        modal.show();
    })

    $("#commentsFileUpload").on("click",function(){
        UploadType = "new";
        let modal = new bootstrap.Modal(document.getElementById("upload-file-modal"));
        modal.show();
    })
}

