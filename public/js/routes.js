var app = angular.module("solovino", [
	'ngRoute'
]);

app.config(['$routeProvider',
    function($routeProvider){
      $routeProvider.
        when('/', {
            templateUrl: 'templates/dashboard/index.html',
            controller: 'indexCtrl'
        })
    }
]);
