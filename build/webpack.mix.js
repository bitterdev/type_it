let mix = require('laravel-mix');
const path = require("path");

mix.setResourceRoot('../');
mix.setPublicPath('../');

mix
    .js('assets/type-it.js', '../blocks/type_it/view.js')