import setHeaderData from "./set-header.js"
import initFields from "./init-fields.js"
import setFooterData from "./set-footer.js"

export default function setData() {
    // init from data files or localStorage
    setHeaderData()
    initFields()
    setFooterData()
}