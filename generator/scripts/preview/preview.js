import generatePreview from "./generate-preview.js"


export default function preview(selector, signed = false) {

    document.querySelector(selector)?.addEventListener("click", async function (e) {
        const contractPreview = await generatePreview(signed)
        let iframe = document.getElementById('iframe').contentWindow.document

        localStorage.removeItem("client_signature")

        iframe.open()
        iframe.write(contractPreview)
        iframe.close()
        
        e.preventDefault()
    }, false)

}


// previewAfterClientSigned
// generate-preview.js triggers this when submit is clicked in preview iframe 📡

window.onmessage = function (e) {
    if (e.data == 'previewAfterClientSigned') {
        previewAfterClientSigned()
    }
};

async function previewAfterClientSigned() {
    const contractPreview = await generatePreview(true)
    let iframe = document.getElementById('iframe').contentWindow.document

    iframe.open()
    iframe.write(contractPreview)
    iframe.close()
}


// event listeners
// modal open and close buttons

const modal = document.querySelector("#modal-preview")
const openModal = document.querySelector("#show-modal-preview")
const closeModal = document.querySelector("#close-modal-preview")

openModal?.addEventListener("click", (e) => {
    if (modal?.open === false)
        modal.showModal()
})

closeModal?.addEventListener("click", (e) => {
    modal?.close()
})

// close modal when click events happen outside of it
modal?.addEventListener("click", (e) => {
    const rect = modal.getBoundingClientRect()
    if (
        e.clientY < rect.top ||
        e.clientY > rect.bottom ||
        e.clientX < rect.left ||
        e.clientX > rect.right
    ) {
        modal.close()
    }
})

// // old selectors used event delegation with el.matches()
// document.addEventListener("click", (e) => {
//     const el = e.target
//     if (el.matches(".preview, .preview *")) {
//         document.querySelector('.modal-preview').classList.add('is-active');
//     }
//     if (el.matches(".modal-preview :is(.modal-background,.delete)")) {
//         el.closest(".modal-preview.is-active").classList.remove("is-active")
//     }
// })