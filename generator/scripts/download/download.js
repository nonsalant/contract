import generate from "./generate.js"

export default function download(selector) {
    document.querySelector(selector)?.addEventListener("submit", async function (e) {
        e.preventDefault()
        document.querySelector("#download").disabled = true
        const text = await generate()
        const filename = localStorage.getItem("contract_filename")+".php"
        downloadFile(filename, text)
        setTimeout(() => {
            document.querySelector("#download").disabled = false
            // e.preventDefault()
        }, 300)
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