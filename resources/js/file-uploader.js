import Uppy from "@uppy/core";
import XHRUpload from "@uppy/xhr-upload";
import ThumbnailGenerator from "@uppy/thumbnail-generator";
import StatusBar from "@uppy/status-bar";
import ProgressBar from "@uppy/progress-bar";
import Dashboard from "@uppy/dashboard";
import "@uppy/dashboard/dist/style.min.css";
import Persian from "@uppy/locales/lib/fa_IR";

import "@uppy/core/dist/style.min.css";
import "@uppy/drag-drop/dist/style.min.css";
import "@uppy/status-bar/dist/style.min.css";
import "@uppy/progress-bar/dist/style.min.css";

const uppy = new Uppy({
    debug: true,
    autoProceed: true,
    restrictions: {
        maxFileSize: 1000000,
        maxNumberOfFiles: 10,
        minNumberOfFiles: 1,
        allowedFileTypes: ["image/*"],
    },
    allowMultipleUploadBatches: false,
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

uppy.on("upload-success", (file, response) => {
    const fileId = response.body.id; // Adjust this based on your server response
    document.querySelector(hiddenInputSelector).value = fileId;
});
