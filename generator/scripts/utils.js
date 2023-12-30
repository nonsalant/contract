// wrapper around addEventListener with optional event type at the end
// addEvent() usage: addEvent(element, handler, eventType)
export const addEvent = (element, handler, eventType = "click") => {
    element.addEventListener(eventType, handler);
};

// debounce() usage: const debouncedMyFunc = debounce(myFunc, 200);
// or function debouncedMyFunc() { return debounce(myFunc, 200); }
export const debounce = (callback, wait = 200) => {
    let timeoutId = null;
    return function (...args) {
        window.clearTimeout(timeoutId);
        timeoutId = window.setTimeout(() => {
            callback.apply(null, args);
        }, wait);
    };
};

// addBrackets() usage: addBrackets(element)
export const addBrackets = (element) => {
    let trimmedValue = element.value.trim();

    if (!trimmedValue.startsWith('[')) {
        trimmedValue = '[' + trimmedValue;
    }

    if (!trimmedValue.endsWith(']')) {
        trimmedValue = trimmedValue + ']';
    }

    element.value = trimmedValue;
};

// wrapper around querySelector
// select() usage: const [sel1, sel2] = select(".class1", ".class2")
// [repeaterForm, repeaterOutput, addItemButton] = select( ".repeater-form", "output", ".add-btn");
export const select = (...selectors) => selectors.map(selector => document.querySelector(selector));

// selectAll() usage: const [sel1, sel2] = selectAll(".class1", ".class2")
// wrapper around querySelectorAll
export const selectAll = (...selectors) => selectors.map(selector => document.querySelectorAll(selector));

// Shortcodes
export function doShortcodes(shortcodes, contentString) {
    // Replace names with values in the provided string
    shortcodes.forEach(item => {
        const namePattern = new RegExp(escapeRegExp(item.name), 'g');
        contentString = contentString.replace(namePattern, item.value);
    });

    return contentString;
}
export function doShortcodesFromLocalstorage(main) {
    // localStorage.setItem('repeaterData', jsonString);
    // localStorage.removeItem('repeaterData');
    const shortcodesJsonString = localStorage.getItem('repeaterData');

    if (shortcodesJsonString) {
        const shortcodes = JSON.parse(shortcodesJsonString);
        if (shortcodes[0]) { // console.log(shortcodes[0].name);
            return doShortcodes(shortcodes, main)
        }
    }
    return main;
}
// Function to escape special characters in a string for regex
export function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");
}