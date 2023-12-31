import { contractData } from "../../data/contract-data.js"
import { addEvent, debounce } from "../utils.js"

export default function repeater(repeater = ".repeater-form", output = "output", addBtn = ".add-btn") {
    // Cache frequently used elements
    const repeaterForm = document.querySelector(repeater);
    const repeaterOutput = repeaterForm.querySelector(output);
    const addItemButton = repeaterForm.querySelector(addBtn);

    //  Save data + form submit Event Listener
    const saveData = () => {
        const items = [];
        const seenNames = new Set();

        const repeaterItems = repeaterForm.querySelectorAll(".repeater-item");
        repeaterItems.forEach((item) => {
            const nameInput = item.querySelector(".repeater-item-name");
            const valueInput = item.querySelector(".repeater-item-value");
            const name = nameInput.value.trim();
            const value = valueInput.value.trim();
            if (name !== "" && value !== "") {
                if (seenNames.add(name)) {
                    items.push({ name, value });
                }
            }
        });

        localStorage.setItem("repeaterData", JSON.stringify(items));
        console.log("Saved.");
        console.log(JSON.stringify(items));
    };
    addEvent(repeaterForm, (event) => {
        console.log("Form submitted");
        saveData();
        event.preventDefault();
    }, "submit");

    // Add new item + Event Listener
    const insertAddNewInputs = () => {
        const template = repeaterForm.querySelector(".repeater-item-template");
        const clone = template.content.cloneNode(true);
        repeaterOutput.appendChild(clone);
    };
    const addItemHandler = (event) => {
        // remove empty last-child (only if both fields are empty)
        repeaterForm.querySelector(".repeater-item:last-child:has(.repeater-item-name:placeholder-shown):has(.repeater-item-value:placeholder-shown)")?.remove()
        insertAddNewInputs();
        event.preventDefault();
        // console.log(event.target)
        repeaterForm.querySelector(".repeater-item:last-child input").focus();
    };
    addEvent(addItemButton, addItemHandler);
    addEvent(addItemButton, addItemHandler, "mousedown");

    // Remove item + Event Listener
    const removeItem = (item) => {
        item.remove();
        saveData();
        if (repeaterOutput.children.length === 0) {
            insertAddNewInputs();
        }
    };
    addEvent(repeaterForm, (event) => {
        if (event.target.classList.contains("remove-btn")) {
            const removedItem = event.target.closest(".repeater-item");
            removeItem(removedItem);
            event.preventDefault();
        }
    }, "click");

    // Debounced save + Event Listener
    const debouncedSave = debounce(saveData, 200);
    addEvent(repeaterForm, (event) => {
        const input = event.target;
        if (
            input.classList.contains("repeater-item-name") ||
            input.classList.contains("repeater-item-value")
        ) {
            debouncedSave();
        }
    }, "input");

    // init
    const init = () => {

        console.clear();

        repeaterForm.querySelector(".save-btn").style.display = "none";
        // repeaterForm.querySelector(".add-btn").style.cssText = "opacity: 0; overflow: hidden; pointer-events: none;";

        // ! BUG: doesn't default from json if ls empty

        // Load data from localStorage on page load
        const savedData = localStorage.getItem("repeaterData");
        if (savedData) {
            const parsedData = JSON.parse(savedData) ?? [];

            if (parsedData.length > 0) {
                repeaterOutput.innerHTML = ""; // Clear existing content
            } else {
                const shortcodes = contractData.shortcodes || [];
                shortcodes.forEach((shortcode) => {
                    const template = repeaterForm.querySelector(".repeater-item-template");
                    const clone = template.content.cloneNode(true);
                    clone.querySelector(".repeater-item-name").setAttribute("value", shortcode.name);
                    clone.querySelector(".repeater-item-value").setAttribute("value", shortcode.value);
                    repeaterOutput.appendChild(clone);
                    saveData();
                });
            }

            parsedData.forEach((item) => {
                const template = repeaterForm.querySelector(".repeater-item-template");
                const clone = template.content.cloneNode(true);
                const nameInput = clone.querySelector(".repeater-item-name");
                const valueInput = clone.querySelector(".repeater-item-value");
                nameInput.value = item.name;
                valueInput.value = item.value;
                repeaterOutput.appendChild(clone);
            });
        }

        // display input if empty
        if (repeaterOutput.children.length === 0) {
            insertAddNewInputs(); // Call the function to add a new item on page load
        }

    };
    init();
}

///

// Toggle overflow:visible when details finishes opening
const initialOpenDetailsElements = document.querySelectorAll("details[open]");
initialOpenDetailsElements.forEach(item => { item.style.overflow = "visible"; });
const detailsElements = document.querySelectorAll("details");
detailsElements.forEach(item => {
    item.addEventListener("transitionend", (event) => {
        const element = event.target;
        if (element.open === true) {
            element.style.overflow = "visible";
            // element.style.maxHeight = "300vh";
        } else {
            // if (!element.querySelector("&:is(summary)"))
            element.style.overflow = "hidden";
            // element.style.maxHeight = "90vh";
            // element.querySelector("& > *:not(summary)").style.height = "0";
            // alert("hidden")
        }
    });
});

///

// repeater(".repeater-form", "output", ".add-btn");
repeater();

///


// // Utils

// // wrapper around querySelector
// // select() usage: const [sel1, sel2 ] = select(".class1", ".class2")
// // [repeaterForm, repeaterOutput, addItemButton] = select( ".repeater-form", "output", ".add-btn");
// function select(...selectors) {
// 	return selectors.map(selector => document.querySelector(selector));
// };
// function selectAll(...selectors) {
// 	return selectors.map(selector => document.querySelectorAll(selector));
// };
// // wrapper around addEventListener with optional event type at the end
// function addEvent(element, handler, eventType="click") {
// 	element.addEventListener(eventType, handler);
// }
// // debounce() usage: const debouncedMyFunc = debounce(myFunc, 200);
// // or function debouncedMyFunc() { return debounce(myFunc, 200); }
// function debounce(callback, wait=200) {
//   let timeoutId = null;
//   return function (...args) {
//     window.clearTimeout(timeoutId);
//     timeoutId = window.setTimeout(() => {
//       callback.apply(null, args);
//     }, wait);
//   };
// };
// function addBrackets(element){
// 		// Trim the value
// 		let trimmedValue = element.value.trim();

// 		// Check if it begins with "[", add if not
// 		if (!trimmedValue.startsWith('[')) {
// 				trimmedValue = '[' + trimmedValue;
// 		}

// 		// Check if it ends with "]", add if not
// 		if (!trimmedValue.endsWith(']')) {
// 				trimmedValue = trimmedValue + ']';
// 		}

// 		// Update the element value
// 		element.value = trimmedValue;
// }