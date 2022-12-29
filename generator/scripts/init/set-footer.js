export default function setFooterData() {

    const dataPath = "data"

    const contractFooterFile = dataPath + "/more-data/php-partials/contract_footer.phpsrc"
    const contractCssFile = dataPath + "/style.min.css"
    const uiUnsigned = dataPath + "/more-data/html-partials/ui-unsigned.html.xml"
    const contractScriptUnsignedFile = dataPath + "/more-data/scripts/contract_script_unsigned.js"
    const uiSigned = dataPath + "/more-data/html-partials/ui-signed.html.xml"
    const contractScriptSignedFile = dataPath + "/more-data/scripts/contract_script_signed.js"
    const qrCodeScriptFile = dataPath + "/more-data/scripts/qr-code.js" // qrCode




    if (localStorage.getItem("contract_footer") === null) {
        fetch(contractFooterFile).then((response) => response.text()).then((data) => {
            localStorage.setItem("contract_footer", data)
        })
    }


    if (!localStorage.getItem("contract_css")) {
        fetch(contractCssFile).then((response) => response.text()).then((data) => {
            data = addSlashes(data)
            localStorage.setItem("contract_css", data)
        })
    }


    fetch(uiUnsigned).then((response) => response.text()).then((data) => {
        localStorage.setItem("ui_unsigned", data)
    })
    fetch(uiSigned).then((response) => response.text()).then((data) => {
        localStorage.setItem("ui_signed", data)
    })


    fetch(contractScriptUnsignedFile).then((response) => response.text()).then((data) => {
        localStorage.setItem("contract_script_unsigned", data)
    })
    fetch(contractScriptSignedFile).then((response) => response.text()).then((data) => {
        localStorage.setItem("contract_script_signed", data)
    })

    fetch(qrCodeScriptFile).then((response) => response.text()).then((data) => {
        localStorage.setItem("qr_code_script", data)
    })

}

const addSlashes = (str) => {
    return str
        .replace(/'/g, "\\'")
}