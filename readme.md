# web-dev-boilerplate

> A basic web development boilerplate.

Features:

- [x] HTML5 Boilerplate
- [x] Gulp
- [x] Auto FTP deployment
- [x] Auto-reloading via BrowserSync
- [x] SASS
- [x] Auto JS dependency file minimization + concatenation
- [x] Quick git init
- [ ] React Starter
- [ ] Sourcemaps
- [ ] Browserify

## Install

Clone this boilerplate repo, install the dependencies, then start your own git repo
```
$ git clone --depth=1 https://github.com/radiovisual/web-dev-boilerplate.git
$ npm install
$ npm run setup
```

## Commands

This boilerplate comes with the following gulp commands:

- `gulp`: The default command which will compile the app and launch browserSync.
- `gulp sass`: Compile all the SASS files in the dist/sass directory and place the resulting CSS files into `dist/css`
- `guilp build-deps`: Minify/concat all the `dist/js/vendor` .js files into a single .js file.
- `gulp browser-sync`: Watches/reloads browser when the following files have been changed: `html`, `js`, `css` and `scss`
- `gulp ftp`: Syncs your entire `dist` directory to your FTP server. Requires that you have a `.env` file or the following
 values available to your environment: `FTP_HOST`, `FTP_USER`, and `FTP_PASS`

## License


MIT @ [Michael Wuergler](http://numetriclabs.com).

Portions of this boilerplate include Boilerplate Source from other Boilerplate Projects:

| Project | License |
| ------  | ------- |
| [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate) | [MIT License](https://github.com/h5bp/html5-boilerplate/blob/master/LICENSE.txt) |
| [React Boilerplate](https://github.com/mxstbr/react-boilerplate) | [MIT License](https://github.com/mxstbr/react-boilerplate/blob/master/LICENSE.md) |
