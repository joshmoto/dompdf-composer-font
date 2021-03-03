let mix = require('laravel-mix');
mix
    .sass('src/scss/pdf.scss','css')
    .setPublicPath('dist')
    .setResourceRoot('../');