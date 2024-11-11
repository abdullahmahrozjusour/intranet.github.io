var array = [
    '#descEn',
    '#descAr',
    '#titleEn',
    '#titleAr',
];

for (let index = 0; index < array.length; index++) {
    let direction = 'ltl';
    let height = 500;
    if (array[index] == '#descAr' || array[index] == '#titleAr') {
        direction = 'rtl';
    }
    if (array[index] == '#titleAr' || array[index] == '#titleEn') {
        height = 100;
    }
    tinymce.init({
        selector: array[index],
        height: 1000,
        menubar: true,
        statusbar: false,
        plugins: 'autoresize anchor autolink charmap codesample directionality image insertdatetime table help link lists media nonbreaking pagebreak preview searchreplace visualblocks visualchars fullscreen',
        toolbar: 'undo redo | bold italic strikethrough underline | blockquote bullist numlist | table backcolor | alignleft aligncenter alignright alignjustify outdent indent | link image media | removeformat fullscreen help',
        skin: 'bootstrap',
        toolbar_drawer: 'floating',
        min_height: height,
        autoresize_bottom_margin: 16,
        directionality: direction,
        setup: (editor) => {
            editor.on('init', () => {
                editor.getContainer().style.transition = "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
            });
            editor.on('focus', () => {
                editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
                    editor.getContainer().style.borderColor = "#80bdff"
            });
            editor.on('blur', () => {
                editor.getContainer().style.boxShadow = "",
                    editor.getContainer().style.borderColor = ""
            });
        }
    });
}
