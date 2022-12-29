import SignaturePad from "https://cdn.skypack.dev/pin/signature_pad@v4.1.3-nYxPKR50YjQN4V2vbxta/mode=imports,min/optimized/signature_pad.js"
// 📙 Package Documentation: https://www.skypack.dev/view/signature_pad


export default function signature(selector) {

    const signatureFile = "data/signature.png"
    const signatureFileEmpty = "data/more-data/signature-empty.png"

    const canvas = document.querySelector(selector)

    // https://github.com/szimek/signature_pad#options
    const signaturePad = new SignaturePad(canvas, {
        penColor: "hsl(200, 100%, 30%)",
        minDistance: 2,
    })

    /**
    if (signaturePad.isEmpty()) {
        document.querySelector("#clear-signature").disabled = true
    }
    else {
        document.querySelector("#clear-signature").disabled = false
    }
    /**/

    resizeCanvas()


    // event listeners

    // save signature to localStorage on change
    signaturePad.addEventListener("afterUpdateStroke", () => {
        // console.log(signaturePad.toData())
        setSignatureToLocalStorage()
        document.querySelector("#clear-signature").disabled = false
    })

    // button to reset signature
    document.querySelector("#clear-signature")?.addEventListener("click", () => {
        signaturePad.clear()
        // setSignatureToLocalStorage()
        localStorage.removeItem("dev_signature")
        document.querySelector("#clear-signature").disabled = true
    })

    window.onresize = resizeCanvas



    function setSignatureToLocalStorage() {
        let data = signaturePad.toDataURL("image/png")
        localStorage.setItem("dev_signature", data)
    }

    function getSignatureFromLocalStorageOrFile() {
        let data = localStorage.getItem("dev_signature");
        if (data) {
            // console.log(data)
            signaturePad.fromDataURL(data)
            disableResetButtonIfSignatureIsEmpty(data)
        }
        else {
            toDataURL(signatureFile).then(data => {
                // console.log(data)
                localStorage.setItem("dev_signature", data)
                signaturePad.fromDataURL(data)
                disableResetButtonIfSignatureIsEmpty(data)
            })
        }

        // console.log(data)
    }

    

    // needed for retina displays
    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1)
        canvas.width = canvas.offsetWidth * ratio
        canvas.height = canvas.offsetHeight * ratio
        canvas.getContext("2d").scale(ratio, ratio)

        getSignatureFromLocalStorageOrFile()
    }

    function disableResetButtonIfSignatureIsEmpty(testData) {
        toDataURL(signatureFileEmpty).then(data => {
            // console.log(data)
            // localStorage.setItem("dev_signature", data)
            // signaturePad.fromDataURL(data)
            if (testData === data) {
                document.querySelector("#clear-signature").disabled = true
            }
            else {
                document.querySelector("#clear-signature").disabled = false
            }
        })
    }

}


const toDataURL = url => fetch(url)
    .then(response => response.blob())
    .then(blob => new Promise((resolve, reject) => {
        const reader = new FileReader()
        reader.onloadend = () => resolve(reader.result)
        reader.onerror = reject
        reader.readAsDataURL(blob)
    }))
// from https://stackoverflow.com/a/20285053