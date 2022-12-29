import { contractSettings } from "../../data/more-data/contract-settings.js"



export default function initFilenameField() {
    const unix = Math.round(+new Date() / 1000)

    let filenameSettings = contractSettings.filename
    
    let filename_prefix = contractSettings.filename
    let filename_value = contractSettings.filename

    if (filenameSettings.has_timestamp) {
        if (filenameSettings.name) {
            // !
            filename_prefix = filenameSettings.name + filenameSettings.timestamp_separator
        }
        else {
            // ! doesn't re-init when filenameSettings.name is empty
            filename_prefix = ""
        }
        filename_value = filename_prefix + unix
    }

    const fieldName = "contract_filename"
    const fieldValue = filename_value

    if (!localStorage.getItem(fieldName)) {
        localStorage.setItem(fieldName, fieldValue)
    }

    let val = localStorage.getItem(fieldName)
    val = addTimestampIfNeeded(val, filenameSettings.has_timestamp, filename_prefix, unix)

    const el = document.querySelector("#" + fieldName)
    // if (!el) return
    handleDom(el, fieldName, val)
}



function addTimestampIfNeeded(val, filename_timestamp, filename_prefix, unix) {
    // if it looks like a timestamp reset it:
    if (isTimestamp(filename_prefix, val)) {
        val = filename_prefix + unix
        localStorage.setItem("contract_filename", val)
    }
    return val
}



// check if like: contract-0123456789 (prefix, separator, 10 digits)
const isTimestamp = (prefix, str) => {
    let matches = str.split(prefix)
    if (matches[1] && matches[1].match(/^[0-9]{10}$/) && !matches[2])
        return true
    else
        return false
}



// set field value and event listener
const handleDom = (el, itemName, val) => {
    el.value = val
    el.addEventListener("change", (e) => {
        localStorage.setItem(itemName, e.target.value)
    })
}