var gulp = require('gulp');
var uncss = require('gulp-uncss');
var elixir = require("laravel-elixir");

//over-riding laravel-elixir configuration
elixir.config.assetsPath = 'src';
elixir.config.publicPath = '';

//source path configuration
var vendors = 'src/vendors/';
var resourcesAssets = 'src/';
var srcCss = resourcesAssets + 'css/';
var srcJs = resourcesAssets + 'js/';

//destination path configuration
var dest = '';
var destFonts = dest + 'fonts/';
var destCss = dest + 'css/';
var destJs = dest + 'js/';
var destImg = dest + 'img/';
var destImages = dest + 'images';
var destVendors = dest + 'vendors/';
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'airdatepicker': vendors + 'air-datepicker/dist/',
    'bootstrap_datetimepicker': vendors + 'bootstrap-datetimepicker/build/',
    'c3': vendors + 'c3/',
    'fullcalendar': vendors + 'fullcalendar/dist/',
    'chartjs': vendors + 'Chart.js/',
    'countUp': vendors + 'countUp.js/',
    'd3': vendors + 'd3/',
    'dataTables': vendors + 'datatables/media/',
    'fancybox': vendors + 'fancybox/source/',
    'gmaps': vendors + 'gmaps/',
    'holderjs': vendors + 'holderjs/',
    'hover': vendors + 'hover/css/',
    'icheck': vendors + 'iCheck/',
    'ihover': vendors + 'ihover/dist/',
    'jasnyBootstrap': vendors + 'jasny-bootstrap/dist/',
    'circliful': vendors + 'circliful/',
    'blueimp_file_upload': vendors + 'blueimp-file-upload/',
    'mixitup': vendors + 'mixitup/',
    'moment': vendors + 'moment/',
    'nvd3': vendors + 'nvd3/build/',
    'owlcarousel': vendors + 'owl.carousel/owl-carousel/',
    'bootstrap_progressbar': vendors + 'bootstrap-progressbar/',
    'bootstrap_select': vendors + 'bootstrap-select/dist/',
    'select2': vendors + 'select2/dist/',
    'summernote': vendors + 'summernote/dist/',
    'tagsinput': vendors + 'bootstrap-tagsinput/',
    'xeditable': vendors + 'x-editable/dist/'
};

elixir.config.sourcemaps = false;
elixir(function(mix) {

    //airdatepicker
    mix.copy(paths.airdatepicker + 'css/datepicker.min.css', destVendors + 'air-datepicker/css');
    mix.copy(paths.airdatepicker + 'js/datepicker.min.js', destVendors + 'air-datepicker/js');
    mix.copy(paths.airdatepicker + 'js/i18n/datepicker.en.js', destVendors + 'air-datepicker/js');

    //bootstrap-datetimepicker
    mix.copy(paths.bootstrap_datetimepicker + 'css/bootstrap-datetimepicker.min.css', destVendors + 'bootstrap-datetimepicker/css');
    mix.copy(paths.bootstrap_datetimepicker + 'js/bootstrap-datetimepicker.min.js', destVendors + 'bootstrap-datetimepicker/js');

    //c3 charts
    mix.copy(paths.c3 + 'c3.min.css', destVendors + 'c3/css');
    mix.copy(paths.c3 + 'c3.min.js', destVendors + 'c3/js');

    // fullcalendar
    mix.copy(paths.fullcalendar + 'fullcalendar.css', destVendors + 'fullcalendar/css');
    mix.copy(paths.fullcalendar + 'fullcalendar.print.css', destVendors + 'fullcalendar/css');
    mix.copy(paths.fullcalendar + 'fullcalendar.min.js', destVendors + 'fullcalendar/js');

    // Chart.js
    mix.copy(paths.chartjs + 'Chart.min.js', destVendors + 'chartjs');

    // countUp js
    mix.copy(paths.countUp + 'countUp.min.js', destVendors + 'countup/js');

    //d3
    mix.copy(paths.d3 + 'd3.min.js', destVendors + 'd3');

    // datatables
    mix.copy(paths.dataTables + 'js/jquery.dataTables.js', destVendors + 'datatables/js');
    mix.copy(paths.dataTables + 'css/dataTables.bootstrap.min.css', destVendors + 'datatables/css');

    //fancybox
    mix.copy(paths.fancybox + 'source', destVendors + 'fancybox/js');
    mix.copy(paths.fancybox + 'lib/jquery.mousewheel-3.0.6.pack.js', destVendors + 'fancybox/js');

    // gmaps
    mix.copy(paths.gmaps + 'examples/examples.css', destVendors + 'gmaps/css');
    mix.copy(paths.gmaps + 'gmaps.min.js', destVendors + 'gmaps/js');


    //holderjs
    mix.copy(paths.holderjs + 'holder.min.js', destJs);

    //hover
    mix.copy(paths.hover + 'hover-min.css', destVendors + 'hover/css');

    //icheck
    mix.copy(paths.icheck + 'icheck.js', destVendors + 'iCheck/js');
    mix.copy(paths.icheck + 'skins/all.css', destVendors + 'iCheck/css');
    mix.copy(paths.icheck + 'skins/*', destVendors + 'iCheck/css');

    //ihover
    mix.copy(paths.ihover + 'scripts/app.js', destVendors + 'ihover/js');
    mix.copy(paths.ihover + 'styles/main.css', destVendors + 'ihover/css');


    //jasny-bootstrap
    mix.copy(paths.jasnyBootstrap + 'css/jasny-bootstrap.min.css', destVendors + 'jasny-bootstrap/css');
    mix.copy(paths.jasnyBootstrap + 'js/jasny-bootstrap.min.js', destVendors + 'jasny-bootstrap/js');

    //circliful
    mix.copy(paths.circliful + 'css/circliful.css', destVendors + 'circliful/css');
    mix.copy(paths.circliful + 'js/circliful.min.js', destVendors + 'circliful/js');

    // blueimp-file-uploadd
    mix.copy(paths.blueimp_file_upload + 'css/jquery.fileupload.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.blueimp_file_upload + 'css/jquery.fileupload-ui.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.blueimp_file_upload + 'css/jquery.fileupload-noscript.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.blueimp_file_upload + '/css/jquery.fileupload-ui-noscript.css', destVendors + 'blueimp-file-upload/css');
    mix.copy(paths.blueimp_file_upload + 'js/vendor/jquery.ui.widget.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.iframe-transport.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-process.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-image.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-audio.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-video.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-validate.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'js/jquery.fileupload-ui.js', destVendors + 'blueimp-file-upload/js');
    mix.copy(paths.blueimp_file_upload + 'img/loading.gif', destVendors + 'blueimp-file-upload/img');


    //mixitup
    mix.copy(paths.mixitup + 'build/jquery.mixitup.min.js', destVendors + 'mixitup/js');

    // moment
    mix.copy(paths.moment + 'min/moment.min.js', destVendors + 'moment/js');

    //nvd3
    mix.copy(paths.nvd3 + 'nv.d3.min.js', destVendors + 'nvd3/js');
    mix.copy(paths.nvd3 + 'nv.d3.min.css', destVendors + 'nvd3/css');

    // owl-carousel
    mix.copy(paths.owlcarousel + 'owl.carousel.css', destVendors + 'owl.carousel/css');
    mix.copy(paths.owlcarousel + 'owl.theme.css', destVendors + 'owl.carousel/css');
    mix.copy(paths.owlcarousel + 'owl.transitions.css', destVendors + 'owl.carousel/css');
    mix.copy(paths.owlcarousel + 'owl.carousel.min.js', destVendors + 'owl.carousel/js');

    // bootstrap progressbar
    mix.copy(paths.bootstrap_progressbar + 'css/bootstrap-progressbar-3.3.4.min.css', destVendors + 'bootstrap-progressbar/css');
    mix.copy(paths.bootstrap_progressbar + 'bootstrap-progressbar.min.js', destVendors + 'bootstrap-progressbar/js');

    //bootstrap-select
    mix.copy(paths.bootstrap_select + 'css/bootstrap-select.min.css', destVendors + 'bootstrap-select/css');
    mix.copy(paths.bootstrap_select + 'js/bootstrap-select.min.js', destVendors + 'bootstrap-select/js');

    //select2
    mix.copy(paths.select2 + 'css/select2.min.css', destVendors + 'select2/css');
    mix.copy(paths.select2 + 'js/select2.js', destVendors + 'select2/js');
    mix.copy(paths.select2 + 'js/select2.full.js', destVendors + 'select2/js');

    // summer note
    mix.copy(paths.summernote + 'summernote.css', destVendors + 'summernote/css');
    mix.copy(paths.summernote + 'summernote.min.js', destVendors + 'summernote');

    // bootstrap tagsinput
    mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.css', destVendors + 'bootstrap-tagsinput/css');
    mix.copy(paths.tagsinput + 'examples/assets/app.css', destVendors + 'bootstrap-tagsinput/css');
    mix.copy(paths.tagsinput + 'examples/assets/app_bs3.js', destVendors + 'bootstrap-tagsinput/js');
    mix.copy(paths.tagsinput + 'dist/bootstrap-tagsinput.js', destVendors + 'bootstrap-tagsinput/js');

    // x-editable
    mix.copy(paths.xeditable + 'bootstrap3-editable/css/bootstrap-editable.css', destVendors + 'x-editable/css');
    mix.copy(paths.xeditable + 'bootstrap3-editable/js/bootstrap-editable.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'bootstrap3-editable/img', destVendors + 'x-editable/img');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css', destVendors + 'x-editable/css');
    mix.copy(paths.xeditable + 'inputs-ext/typeaheadjs/typeaheadjs.js', destVendors + 'x-editable/js');
    mix.copy(paths.xeditable + 'inputs-ext/address/address.js', destVendors + 'x-editable/js');
    //sass compilation
    mix.sass(['bootstrap/app.scss'], 'css/bootstrap.css');
});
/*
 |--------------------------------------------------------------------------
 | UnCSS
 |--------------------------------------------------------------------------|
 | UnCSS can be used to remove unwanted css from our files
 |
 */
gulp.task('uncss', function() {        
    return gulp.src(['css/stylespage.css']).pipe(uncss({ html: ['*.html'] })).pipe(gulp.dest('./out'));

});
