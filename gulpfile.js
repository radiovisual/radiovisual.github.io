'use strict';
require('dotenv').config();

var ftp = require('vinyl-ftp');
var gutil = require('gulp-util');
var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var uglifycss = require('gulp-uglifycss');
var concat = require('gulp-concat');
var sass = require('gulp-sass');

/**
 * Concat/minify all SASS files into a single css file.
 *
 */
gulp.task('sass', function () {
	return gulp.src(['./dist/sass/*.scss', '!./dist/sass/mixins.scss'])
		.pipe(sass().on('error', sass.logError))
		.pipe(uglifycss({
			"maxLineLen": 80,
			"uglyComments": true
		}))
		.pipe(concat('styles.min.css'))
		.pipe(gulp.dest('./dist/css'));
});

/**
 * Concat/minify all JS dependencies into a single file.
 *
 */
gulp.task('build-deps', function() {
	console.log('building dependencies to file: ./src/js/vendor/build/dependencies.min.js');
	return gulp.src(['./dist/js/vendor/*.js'])
		.pipe(uglify({
			preserveComments: 'license'
		}))
		.pipe(concat('dependencies.min.js'))
		.pipe(gulp.dest('./dist/js/vendor/build/'));
});

/**
 * Set the browserSync defaults and start the watch process.
 *
 */
gulp.task('browser-sync', function () {
	browserSync.init({
		server: {
			baseDir: './dist'
		}
	});
	gulp.watch(['./dist/**/*.html'], ['reload']);
	gulp.watch(['./dist/css/*.css'], ['reload']);
	gulp.watch(['./dist/sass/*.scss'], ['reloadsass']);
	gulp.watch(['./dist/js/*.js'], ['reload']);
});

gulp.task('reload', function () {
	browserSync.reload();
});

/**
 * Send your website files to the server via FTP
 *
 */
gulp.task('ftp', function () {
	var conn = ftp.create({
		host:     process.env.FTP_HOST,
		user:     process.env.FTP_USER,
		password: process.env.FTP_PASS,
		parallel: 2,
		log:      gutil.log
	});
	var globs = [
		'dist/**/*'
	];
	// using base = '.' will transfer everything to /public_html correctly
	// turn off buffering in gulp.src for best performance
	return gulp.src(globs, {base: 'dist', buffer: false})
		.pipe(conn.newer('/')) // only upload newer files
		.pipe(conn.dest('/'));
});