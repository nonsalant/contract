import QRious from "https://cdn.skypack.dev/pin/qrious@v4.0.2-vbPhILY2CQRjQ1N29BGh/mode=imports,min/optimized/qrious.js";
// 📙 Package Documentation:  https://www.skypack.dev/view/qrious

qrCode("#qr-code")

export default function qrCode(selector) {
    
    if (!document.querySelector(selector)) return
    
    const canvas = document.querySelector(selector)

    let qr = new QRious({
        element: canvas,
        value: window.location.href,
        foreground: "hsl(200, 30%, 20%)",
        padding: 0,
        size: 500,
    })

    // event listeners

    const modal = document.querySelector("#modal-qr")
    const openModal = document.querySelector("#show-modal-qr")
    const closeModal = document.querySelector("#close-modal-qr")

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
}
