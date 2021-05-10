const mix = require('laravel-mix');

mix
  .setPublicPath('dist')
  .js('src/js/app.js', 'assets/js/')
  .sass('src/scss/style.scss', 'assets/css/')
  .browserSync({
    proxy: 'http://127.0.0.1:8080/',
    files: 'dist/**/*',
  });