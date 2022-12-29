export default function clearData(selector) {
    // clear localStorage and refresh page
    document.querySelector(selector)?.addEventListener("click", () => {
        localStorage.clear()
        location.reload()
    })
}