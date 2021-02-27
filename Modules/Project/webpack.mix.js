let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Project/Resources/assets/admin/js/main.js', 'Modules/Project/Assets/admin/js/category_project.js')
    .js('Modules/Project/Resources/assets/admin/js/project.js', 'Modules/Project/Assets/admin/js/project.js')
    .scripts('Modules/Project/node_modules/jstree/dist/jstree.js', 'Modules/Project/Assets/admin/js/jstree.js')
    .sass('Modules/Project/Resources/assets/admin/sass/main.scss', 'Modules/Project/Assets/admin/css/category_project.css')
    .sass('Modules/Project/Resources/assets/admin/sass/project.scss', 'Modules/Project/Assets/admin/css/project.css')
    .copy('Modules/Project/node_modules/jstree/dist/themes/default/32px.png', 'Modules/Project/Assets/admin/css')
    .copy('Modules/Project/node_modules/jstree/dist/themes/default/40px.png', 'Modules/Project/Assets/admin/css')
    .copy('Modules/Project/node_modules/jstree/dist/themes/default/throbber.gif', 'Modules/Project/Assets/admin/css')
    .then(() => {
        execSync('npm run rtlcss Modules/Project/Assets/admin/css/category.css Modules/Project/Assets/admin/css/category_project.rtl.css');
    });
