app.controller('indexCtrl',function(
	$scope,
	$location,
	loginService
){
	$scope.doLogin = function(data){
		loginService.login(data).then(function(res){
			if(res.success){
				window.location.replace("/perfil/");
			}else{
				$scope.loginError = res.error;
			}
		})
	}
});