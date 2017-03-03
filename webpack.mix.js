const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .combine([
       'resources/assets/css/accordion.min.css',
       'resources/assets/css/ad.min.css',
       'resources/assets/css/breadcrumb.min.css',
       'resources/assets/css/button.min.css',
       'resources/assets/css/card.min.css',
       'resources/assets/css/checkbox.min.css',
       'resources/assets/css/comment.min.css',
       'resources/assets/css/dimmer.min.css',
       'resources/assets/css/divider.min.css',
       'resources/assets/css/dropdown.min.css',
       'resources/assets/css/embed.min.css',
       'resources/assets/css/feed.min.css',
       'resources/assets/css/flag.min.css',
       'resources/assets/css/form.min.css',
       'resources/assets/css/grid.min.css',
       'resources/assets/css/header.min.css',
       'resources/assets/css/icon.min.css',
       'resources/assets/css/image.min.css',
       'resources/assets/css/input.min.css',
       'resources/assets/css/item.min.css',
       'resources/assets/css/label.min.css',
       'resources/assets/css/list.min.css',
       'resources/assets/css/loader.min.css',
       'resources/assets/css/menu.min.css',
       'resources/assets/css/message.min.css',
       'resources/assets/css/modal.min.css',
       'resources/assets/css/nag.min.css',
       'resources/assets/css/popup.min.css',
       'resources/assets/css/progress.min.css',
       'resources/assets/css/rail.min.css',
       'resources/assets/css/rating.min.css',
       'resources/assets/css/reset.min.css',
       'resources/assets/css/reveal.min.css',
       'resources/assets/css/search.min.css',
       'resources/assets/css/segment.min.css',
       'resources/assets/css/shape.min.css',
       'resources/assets/css/sidebar.min.css',
       'resources/assets/css/site.min.css',
       'resources/assets/css/statistic.min.css',
       'resources/assets/css/step.min.css',
       'resources/assets/css/sticky.min.css',
       'resources/assets/css/tab.min.css',
       'resources/assets/css/table.min.css',
       'resources/assets/css/transition.min.css',
       'resources/assets/css/video.min.css',
   ],'public/css/vendor.css')
