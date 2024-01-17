import { doShortcodesFromLocalstorage } from "../utils.js";
import previewOnly from "./preview-only.js";

export default async function generatePreview(signed=false, forDownload=false, filename="contract-signed.html") {

    const signatureFileEmpty = "data/more-data/signature-empty.png"

    let clientSignatureData
    if (localStorage.getItem("client_signature") !== null) { 
        clientSignatureData = localStorage.getItem("client_signature")
    }
    else {
        // todo: instantiate signature and get data; get rid of empty signature png file
        clientSignatureData = await toDataURL(signatureFileEmpty)
        localStorage.setItem("client_signature", clientSignatureData)
    }
    
    // get css
    let contract_css = localStorage.getItem("contract_css")

    // get main from editor (don't escape single quotes)
    let main = document.querySelector(".editor-container .ql-editor").innerHTML
    
    // replace each shortcode w/ its value
    main = doShortcodesFromLocalstorage(main)

    // js for unsigned contract
    let contract_script_unsigned = `
        <script id="contract_script_unsigned" type="module">
            ${localStorage.getItem("contract_script_unsigned")}
        </script>

        <script id="qr_code_script" type="module">
            ${localStorage.getItem("qr_code_script")}
        </script>`

    // js for signed contract
    let contract_script_signed = `
        <script id="contract_script_signed">
            ${localStorage.getItem("contract_script_signed")}
        </script>`

    let contract_script, clientSignature_html, ui_html, compiled_signatures, previewOverrides


    if (signed) {
        const client_timestamp = getTimestamp()
        const dev_timestamp = localStorage.getItem("dev_timestamp") ?? client_timestamp
        // get IP
        const client_ip = await fetch("https://api.ipify.org").then((data) => { return data.text() })
        
        contract_script = contract_script_signed
        clientSignature_html = `<img id="hk" src="${clientSignatureData}" />`
        ui_html = localStorage.getItem("ui_signed")
        ui_html = `<div id="ui-unsigned">${ui_html}</div>`
        compiled_signatures = `
        <div class="compiled-signatures">
            <div class="compiled-signature">
                <strong>${localStorage.getItem("dev_name")}</strong>
                <img id="dev_signature" src="${localStorage.getItem("dev_signature")}" />
                <div class="date-ip">
                    <strong>Signed on:</strong> ${dev_timestamp}
                    <br><strong>IP address:</strong> ${client_ip} <br>
                </div>
            </div>
            <div class="compiled-signature">
                <strong>${localStorage.getItem("client_name")}</strong>
                ${clientSignature_html}
                <div id="date-ip" class="date-ip">
                    <strong>Signed on:</strong> ${client_timestamp}
                    <br><strong>IP address:</strong> ${client_ip}<br>
                </div>
            </div>
        </div>`
    }
    else {
        localStorage.setItem("dev_timestamp", getTimestamp())

        contract_script = contract_script_unsigned
        clientSignature_html = ""
        ui_html = localStorage.getItem("ui_unsigned")
        ui_html = `<div id="ui-unsigned">${ui_html}</div>`
        compiled_signatures = `<img id="dev_signature" src="${localStorage.getItem("dev_signature")}" />`
    }

    previewOverrides = previewOnly(signed, forDownload, filename)


    // to do: move to external file; make function w/ props
    const output = `<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signed Contract</title>
        <style>${contract_css}</style>
    </head>
    <body style="overscroll-behavior: contain;">
        <div id="content" class="ql-editor">

            ${main}

            ${compiled_signatures}

            ${ui_html}

        </div> <!-- #content -->

        ${contract_script}
        <!-- ! PREVIEW ONLY -->
        ${previewOverrides}
    </body>
    </html>
`


    return (output)
}

const getTimestamp = () => {
    const date = new Date()
    let timestamp = new Intl.DateTimeFormat("en",
        { dateStyle: "long", timeStyle: "long" }
    ).format(date)
    return timestamp
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
