export default (signed = false, forDownload = false, filename="contract-signed.html") => {    
    if (!forDownload) {

        if (signed) return ''
        
        if (!signed) return `
            <script type="module">
                // ! PREVIEW ONLY
                // Handle submit button in preview
                //document.querySelector("#submit-btn")?.addEventListener("click", (e) => {
                document.querySelector("#signature_form").addEventListener("submit", (e) => {
                    setTimeout(function() { 
                        // 📡 Send message to notify the parent window (received in preview.js)
                        window.top.postMessage('previewAfterClientSigned', '*')
                    }, 1500)
                    
                    e.preventDefault()
                })
            </script>`
        
    } else {

        if (signed) return `
        <script type="module">
            // ! PREVIEW ONLY
            let el = document.querySelector("#hk")
            let client_signature = localStorage.getItem("client_signature")
            el.src = client_signature
            // update timestamp and IP here
            // for both dev and client
        </script>`

        if (!signed) return `
        <script type="module">
            // ! PREVIEW ONLY
            // Handle submit button in preview
            //document.querySelector("#submit-btn")?.addEventListener("click", (e) => {
            document.querySelector("#signature_form").addEventListener("submit", (e) => {
                setTimeout(function() { 
                    window.location.assign("${filename}#hk")
                 }, 1500)
                e.preventDefault()
            })
        </script>`

    }
}