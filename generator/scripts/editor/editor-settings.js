const editorSettings = {
    modules: {
        toolbar: '#toolbar',
        // [
        //     [{ header: [1, 2, 3, 4, false] }],
        //     ["bold", "italic", "underline", { script: "super" }, "clean"],
        //     [
        //         { list: "ordered" }, { list: "bullet" }
        //     ],
        //     [{ indent: "-1" }, { indent: "+1" }],
        //     [{ align: ['', 'center', 'right', 'justify'] }],
        //     ["image"],
        // ],
        clipboard: { matchVisual: false }, // https://stackoverflow.com/a/46435236
        htmlEditButton: { // https://github.com/benwinding/quill-html-edit-button/tree/master#customising-the-html-editor
            syntax: true,
            msg: "Edit the content in HTML format",
            okText: "Apply", // Text to display in the OK button, default: Ok,
            cancelText: "Discard<span class='hide-small'>&nbsp;changes</span>", // Text to display in the cancel button, default: Cancel
            // buttonHTML: "<b style='font-size:.65rem; display: block;'>&lt;&nbsp;/&nbsp;&gt;</b>",
            // buttonHTML: "<span style='font-size:.55rem; display: block;'><b>&lt;</b><span style='font-size:.5rem;'>HTML</span><b>&gt;</b></span>",
            buttonHTML: "<span aria-label='Edit HTML' role='button' style='font-size:.75rem; display: block; font-weight:600;'>&lt;<span style='font-size:.65rem;'>/</span>&gt;</span>",
            closeOnClickOverlay: false,
            debug: false,
        },
    },
    theme: "snow",
    // scrollingContainer: '#wysiwyg-wrap',
    scrollingContainer: "html",
    placeholder: "Contract text goes here…",
}

export default editorSettings
