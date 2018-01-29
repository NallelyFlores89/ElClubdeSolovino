app.controller('indexCtrl',function(
	$scope,
	$location,
	loginService
){
	$scope.doLogin = function(data){
		loginService.login(data).then(function(res){
			console.log(res);
			if(res.success){
				$location.url('/inicio');
			}else{
				$scope.loginError = res.error;
			}
		})
	}
});

app.controller('homeCtrl',function(
	$scope,
){
	console.log('inicio');
	$scope.profileTab = 'mypets';

});

app.controller('profileCtrl',function(
	$scope,
){
	console.log('perfil');
});

app.controller('myPetCtrl',function(
	$scope,
){
	console.log('mi mascota');
	$scope.profileTab = 'mypets';
});