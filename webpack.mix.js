const mix = require('laravel-mix');

mix.options({processCssUrls: false})
	.sass('resources/sass/app.scss', 'publishable/assets/css')
	.js('resources/js/app.js', 'publishable/assets/js')
	.sourceMaps(true, 'source-map')
	.copy('publishable/assets', '../prikidapp/public/vendor/binarytorch/blogged/assets');