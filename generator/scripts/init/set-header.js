export default function setHeaderData() {    
    const contractHeaderFile = "data/more-data/php-partials/contract_header.phpsrc"
    if (!localStorage.getItem("contract_header")) {
        fetch(contractHeaderFile).then((r)=>r.text()).then((data) => {
            localStorage.setItem("contract_header", data)
        })
    }
}

// trim spaces and ignore [placeholder-text]
const trimPlaceholders = (fieldValue) => {
    let val = fieldValue.trim()
    if (val.startsWith("[") && val.endsWith("]"))
        return ""
    else
        return val
}



const addSlashes = (str) => {
    return str
        .replace(/'/g, "\\'")
}
