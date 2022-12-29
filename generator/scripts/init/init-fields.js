import { contractData } from "../../data/contract-data.js"
import initFilenameField from "./init-filename-field.js"


export default function initFields() {
    
    // init names and emails
    initField("client_name", contractData.client.name)
    initField("client_email", contractData.client.email)
    initField("dev_name", contractData.dev.name)
    initField("dev_email", contractData.dev.email)
    
    // init file name
    initFilenameField()
}



function initField(fieldName, fieldValue) {
    if (!localStorage.getItem(fieldName)) {
        localStorage.setItem(fieldName, fieldValue)
    }
    const val = localStorage.getItem(fieldName)
    const el = document.querySelector("#" + fieldName)
    // if (!el) return
    handleDom(el, fieldName, val)
}



// set field value and event listener
const handleDom = (el, itemName, val) => {
    el.value = val
    el.addEventListener("change", (e) => {
        localStorage.setItem(itemName, e.target.value)
    })
}