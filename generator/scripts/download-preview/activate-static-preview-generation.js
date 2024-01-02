import downloadPreview from "./download-preview.js"

export default () => {
    const html = `
        <h3>Generate Preview files</h3>
        <button id="download-preview" type="button"
            style="margin-inline-start: 2px; justify-self: start;"
            class="button size-300 | animate slide delay-4">
            <span>contract-demo.html</span>
            <span class="icon">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon-download"></use>
                </svg>
            </span>
        </button>
        <button id="download-preview-signed" type="button" style="margin-inline-start: 2px; justify-self: start;"
            class="button size-300 | animate slide delay-4">
            <span>contract-signed.html</span>
            <span class="icon">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon-download"></use>
                </svg>
            </span>
        </button>
    `;
    
    document.querySelector("#download-form > *:last-child").innerHTML += html

    downloadPreview("#download-preview")
    downloadPreview("#download-preview-signed", true)

}