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