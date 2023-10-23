const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    let mix = require('laravel-mix');
    mix .js('resources/scripts/app.js', 'public/js/app.js')
        .sass('resources/styles/app.scss', 'public/css/app.css')
        .copyDirectory('src', 'public');
};
