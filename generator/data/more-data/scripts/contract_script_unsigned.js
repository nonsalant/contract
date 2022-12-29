import SignaturePad from "https://cdn.skypack.dev/pin/signature_pad@v4.1.3-nYxPKR50YjQN4V2vbxta/mode=imports,min/optimized/signature_pad.js"
// 📙 Package Documentation: https://www.skypack.dev/view/signature_pad

signature("#signature-pad")

function signature(selector) {

    if (!document.querySelector(selector)) return

    const canvas = document.querySelector(selector)

    // https://github.com/szimek/signature_pad#options
    const clientSignaturePad = new SignaturePad(canvas, {
        penColor: "hsl(200, 100%, 30%)",
        minDistance: 2,
    })

    resizeCanvas()

    if (localStorage.getItem("client_signature")) {
        document.querySelector("#submit-btn").disabled = false
        // document.querySelector("#reset").disabled = false
    }


    // event listeners

    // save signature to localStorage on change
    clientSignaturePad.addEventListener("afterUpdateStroke", () => {
        let data = clientSignaturePad.toDataURL("image/png")

        document.querySelector("#client_signature").value = data
        localStorage.setItem("client_signature", data)

        // ! probably remove these:
        document.querySelector("#submit-btn").disabled = false
        // document.querySelector("#reset").disabled = false
    })

    // button to reset signature
    document.querySelector("#reset")?.addEventListener("click", (e) => {
        clientSignaturePad.clear()
        localStorage.removeItem("client_signature")
        document.querySelector("#client_signature").value = null
        document.querySelector("#submit-btn").disabled = true
        // document.querySelector("#reset").disabled = true
    })

    // form submit
    document.querySelector("#signature_form").addEventListener("submit", (e) => {
        // e.preventDefault();
        e.target.querySelector(".to-go").classList.add("gone")

        e.target.querySelectorAll(".loading-signed").forEach((el) => {
            el.classList.remove("hidden")
        })

        e.target.querySelector("#canvas-container").classList.add("just-signed")

        e.target.querySelector(".to-go").addEventListener('transitionend', (e) => {
            e.target.classList.add("hidden")
        })

        let otherElements = document.querySelectorAll("#content > *:not(#ui-unsigned, #dev_signature)")
        otherElements.forEach(element => {
            // element.style.cssText = `opacity: .5;`
            element.style.opacity = "0.5"
        })

    })
    
    window.onresize = resizeCanvas


    // needed for retina displays
    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1)
        canvas.width = canvas.offsetWidth * ratio
        canvas.height = canvas.offsetHeight * ratio
        canvas.getContext("2d").scale(ratio, ratio)

        let data = localStorage.getItem("client_signature");
        if (data) {
            // console.log(data)
            clientSignaturePad.fromDataURL(data)
            // disableResetButtonIfSignatureIsEmpty(data)
            document.querySelector("#client_signature").value = data
        }
    }

}