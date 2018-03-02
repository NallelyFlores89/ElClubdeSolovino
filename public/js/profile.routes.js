var app = angular.module("solovino", [
	'ngRoute'
]);

app.config(['$routeProvider',
    function($routeProvider){
      $routeProvider.
        when('/', {
            templateUrl: 'templates/profile/index.html',
            controller: 'homeCtrl'
        }).
        when('/perfil', {
            templateUrl: 'templates/profile/profile.html',
            controller: 'profileCtrl'
        }).
        when('/mis-mascotas', {
            templateUrl: 'templates/profile/profile.html',
            controller: 'myPetCtrl'
        })
    }
]);
