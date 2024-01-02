import downloadPreview from "./download-preview.js"

export default () => {
    
    const selector = "#download-form > *:last-child"

    const html = `
    <h3>Generate Preview files</h3>
    <p>
        <button id="download-preview" type="button" class="button size-300">
            <span>contract-demo.html</span>
            <span class="icon">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon-download"></use>
                </svg>
            </span>
        </button>
    </p>
    <p>
        <button id="download-preview-signed" type="button" class="button size-300">
            <span>contract-signed.html</span>
            <span class="icon">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon-download"></use>
                </svg>
            </span>
        </button>
    </p>`;

    document.querySelector(selector).innerHTML += html

    downloadPreview("#download-preview")
    downloadPreview("#download-preview-signed", true)

}