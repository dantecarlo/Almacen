(function(ang) {

	var app = ang.module('app');

	app.config(function($mdThemingProvider) {
		$mdThemingProvider.theme('default').primaryPalette('pink');
	});

})(angular)