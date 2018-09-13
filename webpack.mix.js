let mix = require('laravel-mix');

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .browserSync({
     proxy:'localhost:8000',
     scrollRestoreTechnique:'cookie',
     files: [
       'resources/views/**/*.blade.php'
     ],
     scrollElements: ['.scroller']
   });