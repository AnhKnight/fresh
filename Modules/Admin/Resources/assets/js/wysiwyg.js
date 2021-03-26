import tinyMCE from 'tinymce';

let isRTL = $('body').hasClass('rtl');

let direction = (isRTL) ? 'rtl' : 'ltr';

tinyMCE.baseURL = `${FleetCart.baseUrl}/modules/admin/js/wysiwyg`;

tinyMCE.init({
    selector: '.wysiwyg',
    theme: 'modern',
    mobile: { theme: 'mobile' },
    height: 300,
    branding: false,
    image_advtab: true,
    image_title: true,
    relative_urls: false,
    directionality: direction,
    cache_suffix: `?v=${FleetCart.version}`,
    plugins: 'lists, link, table, paste, autosave, autolink, wordcount, code, image, fullscreen',
    toolbar: 'styleselect bold italic underline | bullist numlist | alignleft aligncenter alignright | outdent indent | link table code image',
    file_browser_callback : elFinderBrowser
});

function elFinderBrowser(field_name, url, type, win) {
    tinymce.activeEditor.windowManager.open({
        file: route('admin.file_manager.index')+'?for_editor=true',// use an absolute path!
        title: 'elFinder 2.0',
        width: 900,
        height: 450,
        resizable: 'yes',
    }, {
        setUrl: function (url) {
            win.document.getElementById(field_name).value = url;
        },
    });
    return false;
}
