const mix = require('laravel-mix');

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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
// mix.copy('resources/back','public/admin');
// mix.styles('resources/back/assets/plugins/bootstrap/css/bootstrap.min.css','public/admin/style.css');
// mix.styles('resources/colors/css/apple','public/admin/style.css');
mix.styles([
    'resources/colors/plugins/jquery-ui/jquery-ui.min.css',
    'resources/colors/plugins/bootstrap/4.0.0/css/bootstrap.min.css',
    'resources/colors/plugins/font-awesome/5.0/css/fontawesome-all.min.css',
    'resources/colors/plugins/DataTables/media/css/dataTables.bootstrap.min.css',
    'resources/colors/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css',
    'resources/colors/plugins/animate/animate.min.css',
    'resources/colors/css/default/style.min.css',
    'resources/colors/css/default/style-responsive.min.css',
    'resources/colors/css/default/theme/default.css',
],'public/assets/css/base.css');

mix.scripts('resources/colors/plugins/pace/pace.min.js','public/assets/js/pace.js');
mix.scripts('resources/colors/js/demo/login-v2.demo.js','public/assets/login-v2.demo.js');

mix.scripts([
    'resources/colors/plugins/jquery/jquery-3.2.1.min.js',
    'resources/colors/plugins/jquery-ui/jquery-ui.min.js',
    'resources/colors/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js',
    'resources/colors/plugins/slimscroll/jquery.slimscroll.min.js',
    'resources/colors/plugins/js-cookie/js.cookie.js',
    'resources/colors/plugins/DataTables/media/js/jquery.dataTables.js',
    'resources/colors/plugins/DataTables/media/js/dataTables.bootstrap.min.js',
    'resources/colors/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js',
    'resources/colors/js/theme/default.min.js',
    'resources/colors/js/apps.min.js',
    'resources/colors/js/my_app.js',
],'public/assets/js/appz.js');

mix.copy('resources/colors','public/assets');
// mix.copy('resources/colors/css/default/images','public/assets/css/images');
// mix.copy('resources/colors/plugins/font-awesome/5.0/webfonts','public/assets/webfonts');

// blog assets config
const resBlog = 'resources/front/';
mix.copy(resBlog,'public/blog');

mix.styles([
    resBlog+'plugins/bootstrap3/css/bootstrap.min.css',
    resBlog+'plugins/font-awesome/css/font-awesome.min.css',
    resBlog+'plugins/animate/animate.min.css',
    resBlog+'css/blog/style.min.css',
    resBlog+'css/blog/style-responsive.min.css',
],'public/blog/css/main.css')
mix.styles(resBlog+'css/blog/theme/default.css','public/blog/css/theme/default.css');
mix.scripts('resources/colors/plugins/pace/pace.min.js','public/blog/js/pace.js');
mix.scripts([
    resBlog+'plugins/jquery/jquery-3.2.1.min.js',
    resBlog+'plugins/bootstrap3/js/bootstrap.min.js',
    resBlog+'plugins/js-cookie/js.cookie.js',
    resBlog+'plugins/masonry/masonry.min.js',
    resBlog+'js/blog/apps.min.js',

],'public/blog/js/appz.js')