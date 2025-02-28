/// <binding AfterBuild='build' />
var gulp = require('gulp');
var concat = require('gulp-concat');
var less = require('gulp-less');
var del = require('del');
var sourcemaps = require('gulp-sourcemaps');
var fileinclude = require('gulp-file-include');
var rename = require("gulp-rename");
var replace = require('gulp-replace');
var inlinesource = require('gulp-inline-source');
var terser = require('gulp-terser');
var include = require('gulp-include');

var LessAutoprefix = require('less-plugin-autoprefix');
var autoprefix = new LessAutoprefix({ browsers: ['last 4 versions'] });
var LessPluginCleanCSS = require('less-plugin-clean-css');
var cleanCSSPlugin = new LessPluginCleanCSS({advanced: true});

let cssGlob = 'src/less/*.less',
	cssInlineGlob = [
		'src/less-inline/*.less',
		'!src/less-inline/base.less'
	],
	jsGlob = ['src/js/*.js','!src/js/html5shiv-printshiv.min.js'],
	htmlGlob = [
		'src/html/*.html',
		'!src/html/modules/*.html'
	];


function html() {
	return gulp.src(htmlGlob)
		.pipe(fileinclude({
			prefix: '@@',
			basepath: '@file',
			context: {
				lang: 'ru',
				access: ""
			}
		}))
		.pipe(inlinesource({
			compress: false
		}))
		.pipe(gulp.dest('makeup'));
};

function htmlBuild() {
	return gulp.src('makeup/*.html')
		.pipe(replace('.css?html', '.min.css'))
		.pipe(replace('.js?html', '.min.js'))
		// .pipe(replace('"favicons/', '"/favicons/'))
		.pipe(gulp.dest('makeup'));
};

function css() {
	return gulp.src(cssGlob)
		.pipe(sourcemaps.init())
		.pipe(less({
			// plugins: [autoprefix]
		}).on('error', function(err){
			// gutil.log(err);
			console.log(err);
			this.emit('end');
		}))
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest('makeup/css'));
};

function cssBuild() {
	return gulp.src(cssGlob)
		.pipe(less({
			plugins: [autoprefix,cleanCSSPlugin]
		}).on('error', function(err){
			this.emit('end');
			console.log(err);
		}))
		.pipe(rename(function(path){
			path.basename += '.min';
		}))
		.pipe(gulp.dest('makeup/css'));
};

function cssInline() {
	return gulp.src(cssInlineGlob)
		.pipe(less({
			plugins: [autoprefix,cleanCSSPlugin]
		}).on('error', function(err){
			this.emit('end');
			console.log(err);
		}))
		.pipe(gulp.dest('makeup/css/inline'));
};

function js() {
	return gulp.src(jsGlob)
		.pipe(sourcemaps.init())
		.pipe(include({
			extensions: 'js',
			hardFail: true,
			separateInputs: true
		}))
		.pipe(sourcemaps.write('/'))
		.pipe(gulp.dest('makeup/js'));
};

function jsBuild() {
	return gulp.src(jsGlob)
		// .pipe(concat('index.js'))
		.pipe(include({
			extensions: 'js',
			hardFail: true,
			separateInputs: true
		}))
		.pipe(terser({
			compress: {
				drop_console: true
			}
		}))
		.pipe(rename(function(path){
			path.basename += '.min';
		}))
		.pipe(gulp.dest('makeup/js'));
};

function img() {
	return gulp
		.src('src/img/**/*')
		.pipe(gulp.dest('makeup/img'))
		.on('error', function(err){
			this.emit('end');
			console.log(err);
		});
};

function fonts() {
	return gulp.src('src/fonts/**/*').pipe(gulp.dest('makeup/fonts'));
};

function data() {
	return gulp.src('src/data/**/*').pipe(gulp.dest('makeup/data'));
};

function video() {
	return gulp.src('src/video/**/*').pipe(gulp.dest('makeup/video'));
};

function favicons() {
	return gulp.src('src/favicons/**/*').pipe(gulp.dest('makeup/favicons'));
};

function clear() {
	return del(['makeup']);
};

var build = gulp.series(clear, jsBuild, cssBuild, html, htmlBuild, img, fonts, data, video, favicons);
var watch = gulp.series(clear, js, css, html, img, fonts, data, video, favicons, function(){
	gulp.watch('src/js/**/*.js', js);
	gulp.watch('src/less/**/*.less', css);
	gulp.watch('src/less/**/*.css', css);
	gulp.watch('src/html/**/*.html', html);
	gulp.watch('src/img/**/*.jpg', img);
	gulp.watch('src/img/**/*.jpeg', img);
	gulp.watch('src/img/**/*.gif', img);
	gulp.watch('src/img/**/*.png', img);
	gulp.watch('src/img/**/*.apng', img);
	gulp.watch('src/img/**/*.svg', img);
	gulp.watch('src/fonts/**/*', fonts);
	gulp.watch('src/data/**/*', data);
	gulp.watch('src/video/**/*', video);
	console.log('Watcher started');
});

gulp.task('watch', watch);
gulp.task('build', build);
gulp.task('default', build);
