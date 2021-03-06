/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

module.exports = {

	// Project options.
	projectURL: 'wp-starter.local', // Local project URL of your already running WordPress site. Could be something like wpgulp.local or localhost:3000 depending upon your local WordPress setup.
	productURL: './', // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.
	themeName: 'Awesome Theme',
	themeDirName: 'wp-starter',
	browserAutoOpen: false,
	injectChanges: true,
	localPort: 3000,

	// Style options.
	styleSRC: './src/sass/*.scss', // Path to main .scss file.
	styleDestination: './dist/css/', // Path to place the compiled CSS file. Default set to root folder.
	outputStyle: 'expanded', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// JS Vendor options.
	jsVendorSRC: './src/js/vendor/*.js', // Path to JS vendor folder.
	jsVendorDestination: './dist/js/', // Path to place the compiled JS vendors file.
	jsVendorFile: 'vendor', // Compiled JS vendors file name. Default set to vendors i.e. vendors.js.

	// JS Custom options.
	jsCustomSRC: './src/js/custom/*.js', // Path to JS custom scripts folder.
	jsCustomDestination: './dist/js/', // Path to place the compiled JS custom scripts file.
	jsCustomFile: 'custom', // Compiled JS custom file name. Default set to custom i.e. custom.js.

	// Images options.
	imgSRC: './src/images/**/*', // Source folder of images which should be optimized and watched. You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
	imgDST: './dist/img/', // Destination folder of optimized images. Must be different from the imagesSRC folder.

	// Watch files paths.
	watchStyles: './src/sass/**/*.scss', // Path to all *.scss files inside css folder and inside them.
	watchJsVendor: './src/js/vendor/*.js', // Path to all vendor JS files.
	watchJsCustom: './src/js/custom/*.js', // Path to all custom JS files.
	watchPhp: './**/*.php', // Path to all PHP files.

	// Translation options.
	translationFile: 'EXAMPLE.pot', // Name of the translation file.
	translationDestination: './languages', // Where to save the translation files.
	packageName: 'Example Name', // Package name.
	bugReport: 'https://example.com/contact/', // Where can users report bugs.
	lastTranslator: 'John Smith <your_email@email.com>', // Last translator Email ID.
	team: 'JohnSmithCo <your_email@email.com>', // Team's Email ID.
};
