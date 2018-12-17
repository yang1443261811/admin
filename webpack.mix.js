const { mix } = require('laravel-mix');
const path = require('path');

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

let config = {
    resolve: {
        alias: {
            'components':'js/components',
            'dashboard':'js/dashboard',
            'config': 'js/config',
            'plugins': 'js/plugins',
            'home': 'js/home',
            'js': 'js',
        },
        modules: [
            'node_modules',
            path.resolve(__dirname, "resources")
        ]
    },
};

mix.webpackConfig(config);

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/base.scss', 'public/css')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/base.js', 'public/js');
