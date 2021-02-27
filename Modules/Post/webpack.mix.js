let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Post/Resources/assets/admin/js/main.js', 'Modules/Post/Assets/admin/js/category_post.js')
    .scripts('Modules/Post/node_modules/jstree/dist/jstree.js', 'Modules/Post/Assets/admin/js/jstree.js')
    .sass('Modules/Post/Resources/assets/admin/sass/main.scss', 'Modules/Post/Assets/admin/css/category_post.css')
    .copy('Modules/Post/node_modules/jstree/dist/themes/default/32px.png', 'Modules/Post/Assets/admin/css')
    .copy('Modules/Post/node_modules/jstree/dist/themes/default/40px.png', 'Modules/Post/Assets/admin/css')
    .copy('Modules/Post/node_modules/jstree/dist/themes/default/throbber.gif', 'Modules/Post/Assets/admin/css')
    .then(() => {
        execSync('npm run rtlcss Modules/Post/Assets/admin/css/category.css Modules/Post/Assets/admin/css/category_post.rtl.css');
    });
