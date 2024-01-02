export default () => {
    return `
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
        </script>
    `;
}