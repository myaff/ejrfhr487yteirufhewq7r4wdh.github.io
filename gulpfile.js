var gulp = require('gulp'),
	sass = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
	cache = require('gulp-cache'),
    svg = require('gulp-svg-sprite'),
	runTimestamp = Math.round(Date.now()/1000),
	sourcemaps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer');
	concat = require('gulp-concat'),
	uglify = require('gulp-uglifyjs');
	
// Source and dest folders
var source = 'src/',
	dest = 'dist/';


// Our scss source folder
var scss = {
	in: [source + 'sass/template_styles.scss', 
		 source + 'sass/styles.scss', 
		 source + 'sass/pages/mfc-map.scss',
		 source + 'sass/pages/faq.scss',],
	out: dest,
	watch: source + 'sass/**/*',
	sassOpts: {
		outputStyle: 'nested',
		precison: 3,
		errLogToConsole: true
	}
};

gulp.task('sass', function(){
	return gulp.src(scss.in)
			   .pipe(sourcemaps.init())
			   .pipe(sass(scss.sassOpts))
			   .pipe(sourcemaps.write())
			   .pipe(autoprefixer())
			   .pipe(gulp.dest(scss.out));
});

gulp.task('images', function(){
	var imgminOpts = {
		interlaced: true,
		progressive: true
	};
	gulp.src(source + 'images/content/**/*')
		.pipe(cache(imagemin(imgminOpts)))
		.pipe(gulp.dest('images'));
	gulp.src(source + 'images/template/**/*')
		.pipe(cache(imagemin(imgminOpts)))
		.pipe(gulp.dest(dest + 'images'));
});


gulp.task('svg', function(){
	var svgConfig = {
		shape: {
			dimension: {
				maxWidth: 30,
				maxHeight: 30,
				attributes: false
			},
			spacing: {
				padding: 0
			},
			transform: ['svgo']
		},
		svg: {
			xmlDeclaration      : false,
			doctypeDeclaration  : false
		},
		mode: {
			css: false,
			view: false,
			defs: false,
			stack: false,
			symbol: {
				dest: 'svg',
				sprite: 'sprite.svg',
				bust: false,
				example: true
			}
		}
	};
	return gulp.src(source + 'images/svg/*.svg')
		.pipe(svg(svgConfig))
		.pipe(gulp.dest(dest + 'images'));
});

gulp.task('jslibs', function(){
	return gulp.src([
			source + 'libs/jquery/dist/jquery.min.js',
			source + 'libs/bootstrap/javascripts/bootstrap.min.js',
			source + 'libs/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
			source + 'libs/inputmask-multi/js/jquery.inputmask-multi.min.js',
			source + 'libs/svg4everybody/dist/svg4everybody.min.js',
			source + 'libs/slick-carousel/slick/slick.min.js',
			source + 'libs/chosen/chosen.jquery.js'
		])
		.pipe(concat('libs.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest(dest + 'js'));
});

gulp.task('js', ['jslibs'], function(){
	return gulp.src(source + 'js/**/*.js')
			   .pipe(concat('scripts.js'))
			   .pipe(gulp.dest(dest + 'js'));
});

gulp.task('default', ['sass', 'js'], function(){
	gulp.watch(scss.watch, ['sass']);
	gulp.watch(source + 'js/**/*.js', ['js']);
	gulp.watch(source + 'images/svg/*.svg', ['svg']);
});