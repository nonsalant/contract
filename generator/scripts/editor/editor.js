import Quill from "https://cdn.skypack.dev/pin/quill@v1.3.7-AhkYF0UBjqu955pdu0pJ/mode=imports,min/optimized/quill.js"
// 📙 Package Documentation: https://www.skypack.dev/view/quill
// https://quilljs.com/docs/quickstart/


Quill.register("modules/htmlEditButton", htmlEditButton)
// https://github.com/benwinding/quill-html-edit-button/
import htmlEditButton from "https://cdn.skypack.dev/pin/quill-html-edit-button@v2.2.12-bQePZLc6oeJp4TdDNJk2/mode=imports,min/optimized/quill-html-edit-button.js"
//  📙 Package Documentation: https://www.skypack.dev/view/quill-html-edit-button


import editorSettings from "./editor-settings.js"

import {showToolbar} from "./ios-keyboard-bug.js"


export default function editor(selector) {

    const contractHtmlFile = 'data/contract-content.html'
    const editor = new Quill(selector, editorSettings)

    // ios-keyboard-bug
    // add an event listener to scroll to check if
    // toolbar position has moved off the page
    window.addEventListener("scroll", showToolbar);
    // add an event listener to blur as iOS keyboard may have closed
    // and toolbar position needs to be checked again  //editor.addEventListener("blur", showToolbar);
    // https://codepen.io/DmitrySkripkin/pen/eeXpZB
    editor.on('selection-change', function (range, oldRange) {
        if (range === null && oldRange !== null) {
            showToolbar()
            // console.log('editor blur')
        }
    });

    // Quill Autosave
    // https://codepen.io/quill/pen/RRYBEP

    const Delta = Quill.import('delta');


    // Store accumulated changes
    let change = new Delta();
    editor.on('text-change', function (delta) {
        change = change.compose(delta);
        // console.log(change)
        
        // // if is empty
        // if (isQuillEmpty(editor)) {
        //     console.log("The editor is empty")
        //     localStorage.setItem("contract_html","")
        // }
    });

    // Save periodically
    setInterval(function () {
        if (change.length() > 0) {
            // console.log('Saving changes', change);
            /* 
            Partial changes: { partial: JSON.stringify(change) }
            Entire document: { doc: JSON.stringify(editor.getContents()) }
            */
            localStorage.setItem("contract_html", JSON.stringify(editor.getContents()))
            change = new Delta();
        }
    }, 10 * 1000);

    // save when Ctrl|CMD + S key is pressed (useful for debugging when saving setInterval is large)
    document.addEventListener('keydown', (e) => {
        if (e.key?.toLowerCase() === 's' && e.metaKey) {
            e.preventDefault();

            if (change.length() > 0) {
                localStorage.setItem("contract_html", JSON.stringify(editor.getContents()))
                change = new Delta();
            }
        }
    });

    // Check for unsaved data
    window.onbeforeunload = function () {
        if (change.length() > 0) {
            localStorage.setItem("contract_html", JSON.stringify(editor.getContents()))
            change = new Delta();
        }
    }


    // ✅ contract_html init

    if (!localStorage.getItem("contract_html") || isEmpty(localStorage.getItem("contract_html"))) {
    // if (!localStorage.getItem("contract_html") || isQuillEmpty(editor) ) {

        getHtmlFromFile(editor, contractHtmlFile) 

    } else {
        let data = localStorage.getItem("contract_html")
        // data = stripSlashes(data)

        // const delta = editor.clipboard.convert(data)
        const delta = JSON.parse(data)
        
        editor.setContents(delta, "silent")

        if (isQuillEmpty(editor)) {
            console.log("The editor is empty -- initializing from file.")
            localStorage.setItem("contract_html", "")

            getHtmlFromFile(editor, contractHtmlFile) 
        }

    }

}


function getHtmlFromFile(editor, contractHtmlFile) {
    // init contract_html from file
    fetch(contractHtmlFile).then((response) => response.text()).then((data) => {
        // data = stripSlashes(data)
        const delta = editor.clipboard.convert(data)
        // const delta = JSON.parse(data)
        // console.log(data)
        // console.log(delta)

        editor.setContents(delta, "silent")
        localStorage.setItem("contract_html", JSON.stringify(delta))

    })
}

// Helper functions

// this is needed because contract.php needs single quotes escaped (\')
const stripSlashes = (str) => {
    return str
        .replace(/\\'/g, '\'')
        // .replace(/\"/g, '"')
        // .replace(/\\\\/g, '\\')
        // .replace(/\\0/g, '\0')
}

// detect empty html tags (eg: <p><br></p>)
const isEmpty = (htmlString) => {
    const parser = new DOMParser();
    const { textContent } = parser.parseFromString(htmlString, "text/html").documentElement;
    return !textContent.trim();
}

// https://github.com/quilljs/quill/issues/163#issuecomment-561341501
function isQuillEmpty(quill) {
    if ((quill.getContents()['ops'] || []).length !== 1) { return false }
    return quill.getText().trim().length === 0
}
