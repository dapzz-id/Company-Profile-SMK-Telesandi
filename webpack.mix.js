const mix = require('laravel-mix');

// Config SCSS
mix.setPublicPath('public');
mix.sass('resources/sass/style.scss', 'public/css/output/index/style.css');
mix.sass('resources/sass/style-p2db.scss', 'public/css/output/index/style-p2db.css')

// Config Tailwind
const tailwindcss = require('tailwindcss');
mix.js('resources/js/app.js', 'public/js').postCss('public/css/input/style.css', 'public/css/output/style.css', [tailwindcss('./tailwind.config.js')]);
