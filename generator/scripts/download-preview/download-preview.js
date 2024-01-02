// import generateDownloadPreview from "./generate-download-preview.js"
import generatePreview from "../preview/generate-preview.js"

// download a signable (html) demo

export default function downloadPreview(selector, signed = false) {
    selector = document.querySelector(selector)
    selector?.addEventListener("click", async function (e) {

        e.preventDefault()
        
        //localStorage.removeItem("client_signature")
        let signedFilename = "contract-signed.html"
        let unsignedFilename = "contract-demo.html"
        let filename = signed ? signedFilename : unsignedFilename
        
        const contractPreview = await generatePreview(signed, true, signedFilename)

        selector.disabled = true
        
        downloadFile(filename, contractPreview)
        setTimeout(() => {
            selector.disabled = false
        }, 300)

        // e.preventDefault()
    }, false)

}

// https://ourcodeworld.com/articles/read/189/how-to-create-a-file-and-generate-a-download-with-javascript-in-the-browser-without-a-server
function downloadFile(filename, text) {
    let element = document.createElement('a')
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text))
    element.setAttribute('download', filename)
    element.style.display = 'none'
    document.body.appendChild(element)
    element.click()
    document.body.removeChild(element)
}