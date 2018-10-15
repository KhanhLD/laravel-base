let mix = require('laravel-mix');

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

var assetPath = 'public/assets/';
var assetsCopy = [
    ['vendor/almasaeed2010/adminlte/dist', 'adminlte'],
    ['vendor/almasaeed2010/adminlte/plugins', 'adminlte/plugins'],
    ['node_modules/font-awesome/css', 'font-awesome/css'],
    ['node_modules/font-awesome/fonts', 'font-awesome/fonts'],
    ['node_modules/ionicons/fonts', 'ionicons/fonts'],
    ['node_modules/ionicons/css', 'ionicons/css'],
    ['node_modules/jquery/dist', 'js'],
    ['node_modules/bootstrap/dist', 'bootstrap'],
];

for (var i = 0; i < assetsCopy.length; i++) {
    mix.copy(assetsCopy[i][0], assetPath + assetsCopy[i][1]);
}

mix.sass('resources/assets/sass/admin/admin.scss',  assetPath + 'css/admin')
