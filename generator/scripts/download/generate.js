import { doShortcodesFromLocalstorage } from "../utils.js";

export default async function generate() {

    // get timestamp
    // const dev_timestamp = Math.round(+new Date() / 1000);
    // const timestampOptions = { year: 'numeric', month: 'long', day: 'numeric' }
    // const timestampOptions = { dateStyle: "medium", timeStyle: "long" }
    // const dev_timestamp = date.toLocaleDateString("en-US", timestampOptions)

    const date = new Date()
    const dev_timestamp = new Intl.DateTimeFormat('en',
        { dateStyle: "long", timeStyle: "long" }
    ).format(date)

    const dev_timestamp_offset = date.getTimezoneOffset()

    // get IP
    const dev_ip = await fetch("https://api.ipify.org").then((data) => { return data.text() })
    // console.log(dev_timestamp)
    // console.log(dev_ip)

    // generate header
    let header = localStorage.getItem("contract_header")
    let lines = header.split("\n")
    lines[1] = (localStorage.getItem("client_email")    || null ) ?? "[client_email]"
    lines[2] = (localStorage.getItem("dev_email")       || null ) ?? "[dev_email]"
    lines[3] = (localStorage.getItem("dev_signature")   || null ) ?? "[dev_signature]"
    lines[4] = dev_ip
    lines[5] = dev_timestamp
    lines[6] = dev_timestamp_offset
    lines[7] = (localStorage.getItem("dev_name")        || null ) ?? "[dev_name]"
    lines[8] = (localStorage.getItem("client_name")     || null ) ?? "[client_name]"
    header = lines.join("\n")

    // generate main (escape single quotes)
    let main = "\n\n\n\$CONTRACT_HTML='\n  "
        + addSlashes(document.querySelector(".editor-container .ql-editor").innerHTML)
        + "\n';\n\n"
    
    // replace each shortcode w/ its value
    main = doShortcodesFromLocalstorage(main)


    // generate footer 

    let footer = localStorage.getItem("contract_footer")
    // remove first line
    let footerWithoutFirstLine = footer.split("\n")
    footerWithoutFirstLine = footerWithoutFirstLine.slice(1)
    footer = footerWithoutFirstLine.join("\n")

    // console.log(footer)

    // put css in footer
    let contract_css = addSlashes(localStorage.getItem("contract_css"))
    // console.log(contract_css)
    footer = footer.replace(
        `<style></style>`,
        `<style>${contract_css}</style>`
    )

    // put html for unsigned contract in footer
    footer = footer.replace(
        `<div id="ui-unsigned"></div>`,
        `<div id="ui-unsigned">`+
            "  "+indentLinesAndAddSlashes(localStorage.getItem("ui_unsigned"), 4)
        +"\n  </div><!--.ui-unsigned-->"
    )

    // put html for unsigned contract in footer
    footer = footer.replace(
        `<div id="ui-signed"></div>`,
        `<div id="ui-signed">`+
            "  "+indentLinesAndAddSlashes(localStorage.getItem("ui_signed"), 6)
        +"\n    </div><!--.ui-signed-->"
    )


    // put js for unsigned contract in footer
    footer = footer.replace(
        `<script id="contract_script_unsigned" type="module"></script>`,
        `<script id="contract_script_unsigned" type="module">` 
        + 
        	indentLinesAndAddSlashes(localStorage.getItem("contract_script_unsigned", 1)) 
        + "\n  </script>"
    )

    // put js for qr code in footer
    footer = footer.replace(
        `<script id="qr_code_script" type="module"></script>`,
        `<script id="qr_code_script" type="module">` 
        + 
        	indentLinesAndAddSlashes(localStorage.getItem("qr_code_script", 1)) 
        + "\n  </script>"
    )
    

    // put js for signed contract in footer
    footer = footer.replace(
        `<script id="contract_script_signed"></script>`,
        `<script id="contract_script_signed">` 
        + 
        	indentLinesAndAddSlashes(localStorage.getItem("contract_script_signed", 1))
        + "\n  </script>"
    )


    let output = header + main + footer
    return (output)
}

const addSlashes = (str) => {
    return str
        .replace(/'/g, "\\'")
}

const indentLinesAndAddSlashes = (str="", indentationLevel=2) =>{
    const space = " ".repeat(indentationLevel)
    str = str.split("\n").join("\n"+space)
    //console.log(str)
    return "\n"+space+ str
        .replace(/'/g, "\\'")
}

// const stripSlashes = (str) => {
//     return str
//         .replace(/\\'/g, "\'")
//     // .replace(/\"/g, '"')
//     // .replace(/\\\\/g, '\\')
//     // .replace(/\\0/g, '\0')
// }

// function randomID() {
//     let text = ""
//     const possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
//     for (let i = 0; i < 5; i++)
//         text += possible.charAt(Math.floor(Math.random() * possible.length))
//     return text
// }

