let mix = require('laravel-mix');

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

mix.react('resources/assets/js/app.js', 'public/js');
mix.copy('resources/assets/css/star-rating.css', 'public/css');
mix.copy('resources/assets/bootstrap/css/bootstrap.min.css', 'public/css');
mix.js('resources/assets/js/chart.js', 'public/js');
mix.js('resources/assets/js/bootstrap-formhelpers-phone.js', 'public/js');
mix.js('resources/assets/js/bootstrap.js', 'public/js');
mix.js('resources/assets/js/bootstrap.min.js', 'public/js');
mix.js('resources/assets/js/style.js', 'public/js');
mix.js('resources/assets/js/analityc.js', 'public/js');
mix.copy('resources/assets/css/style.css', 'public/css');


mix.copy('resources/assets/plugins/pace/pace.min.js', 'public/js');
mix.copy('resources/assets/plugins/jquery/jquery-1.11.1.min.js', 'public/js');
mix.copy('resources/assets/plugins/modernizr.custom.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-ui/jquery-ui.min.js', 'public/js');
mix.copy('resources/assets/plugins/tether/js/tether.min.js', 'public/js');
mix.copy('resources/assets/plugins/jquery/jquery-easy.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-unveil/jquery.unveil.min.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-bez/jquery.bez.min.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-ios-list/jquery.ioslist.min.js', 'public/js');
mix.copy('resources/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-actual/jquery.actual.min.js', 'public/js')
mix.copy('resources/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js', 'public/js');
mix.copy('resources/assets/js/pages.js', 'public/js');
mix.copy('resources/assets/plugins/pace/pace-theme-flash.css', 'public/css');
mix.copy('resources/assets/plugins/jquery-scrollbar/jquery.scrollbar.css', 'public/css');
mix.copy('resources/assets/plugins/select2/css/select2.min.css', 'public/css');
mix.copy('resources/assets/css/pages-icons.css', 'public/css');
mix.copy('resources/assets/css/corporate.css', 'public/css');
mix.copy('resources/assets/plugins/switchery/css/switchery.min.css', 'public/css');
mix.copy('resources/assets/plugins/select2/js/select2.full.min.js', 'public/js');
mix.copy('resources/assets/plugins/classie/classie.js', 'public/js');
mix.copy('resources/assets/plugins/jquery-validation/js/jquery.validate.min.js', 'public/js');