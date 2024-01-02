// init data

import initFromLocalStorageOrDataFiles from "./init/set-data.js"
initFromLocalStorageOrDataFiles()


// components

import editor from "./editor/editor.js"
editor("#main")

import signature from "./signature/signature.js"
signature("#generator-signature-pad")


// action buttons

import download from "./download/download.js"
download("#download-form")

import preview from "./preview/preview.js"
preview("#show-modal-preview")
// preview("#preview-signed", true)

// // static preview generation
// // for demo and demo-signed external html files
// import staticPreviewGeneration from "./download-preview/activate.js"
// staticPreviewGeneration()

import clearData from "./init/clear-data.js"
clearData("#clear-local-storage")

// import qrCode from "../data/more-data/scripts/qr-code.js"
// // qrCode("#qr-code") // is already called inside the file
// qrCode("#generator-qr-code")
