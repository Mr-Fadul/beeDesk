const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
// adicionar mais uri faz com que una mais folhas css em uma só
.styles([
    'resources/views/site/css/style.css'
],'public/site/css/style.css')
.styles([
    'resources/views/site/css/style.css'
],'public/menu/css/style.css')
//sass do bootstrap padrão
// .sass('node_modules/bootstrap/scss/bootstrap.scss','public/site/css/bootstrap.css')
//sass bootstrap com adicional para edição
.sass('resources/views/site/scss/style.scss','public/menu/css/bootstrapplus.css')

//script jquery
.scripts([
    'node_modules/jquery/dist/jquery.js'
],'public/site/js/jquery.js')
.scripts([
    'node_modules/jquery/dist/jquery.js'
],'public/menu/js/jquery.js')
//script bootstrap
.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
],'public/site/js/bootstrap.js')
.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
],'public/menu/js/bootstrap.js')
//menu ->
// .styles([
//    'resources/views/site/css/style.css'
// ],'public/menu/css/style.css')
// .scripts([
//     'resources/views/site/js/script.js'
// ],'public/menu/js/script.js')

.version();
// js('resources/js/app.js', 'public/js')
// .sass('resources/sass/app.scss', 'public/css');
