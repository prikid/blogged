const mix = require('laravel-mix');

mix.options({processCssUrls: false})
	.sass('resources/sass/app.scss', 'publishable/assets/css')
	.js('resources/js/app.js', 'publishable/assets/js')
	.copy('publishable/assets', '../web/public/vendor/binarytorch/blogged/assets');