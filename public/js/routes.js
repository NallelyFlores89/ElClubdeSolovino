var app = angular.module("solovino", [
	'ngRoute'
]);

app.config(['$routeProvider',
    function($routeProvider){
      $routeProvider.
        when('/', {
            templateUrl: 'templates/index.html',
            controller: 'indexCtrl'
        }).
        when('/inicio', {
            templateUrl: 'templates/profile/index.html',
            controller: 'homeCtrl'
        })
    }
]);
