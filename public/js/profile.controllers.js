app.controller('homeCtrl',function(
	$scope
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
	$document,
	$uibModal,
	petService
){
	$scope.profileTab = 'mypets';
	$scope.pets = [
		{
			'name' : 'Fido',
			'age' : '3',
			'kind_id' : '2',
			'race_id' : '3',
			'color_id' : '1',
			'photo' : 'https://misanimales.com/wp-content/uploads/2016/10/cara-de-un-perro.jpg'
		},
		{
			'name' : 'Ahri',
			'age' : '2',
			'kind_id' : '1',
			'race_id' : '5',
			'color_id' : '1',
			'photo' : 'https://www.petdarling.com/articulos/wp-content/uploads/2014/11/eliminar-pis-de-gato.jpg'
		},
	];
	$scope.newPet = function(){
	    var parentElem =  angular.element($document[0].querySelector('.modal-solovino'));
	    var modalInstance = $uibModal.open({
	      ariaLabelledBy: 'modal-title',
	      ariaDescribedBy: 'modal-body',
	      templateUrl: 'new_pet.html',
	      controller: 'NewPetCtrl',
	      // controllerAs: '$ctrl',
	      windowClass : 'custome-modal',
	      appendTo: parentElem,
	      resolve: {}
	    });

	    modalInstance.result.then(function(res){
	    	if(res){
	    		$scope.pets.push(res);
	    		petService.save(res).then(function(res){
	    			console.log(res);
	    		});
	    	}
	    }, function(res){
	    });
	}
});

app.controller('NewPetCtrl', function(
	$scope,
	$uibModalInstance,
	Upload
){
  	$scope.kinds = [
  		{'id':'1','kind':'Gato'},
  		{'id':'2','kind':'Perro'},
  		{'id':'3','kind':'Ave'}
  	];

  	$scope.genders = [
  		{'id':'1','gender':'Hembra'},
  		{'id':'2','gender':'Macho'},
  	];

  	$scope.colors = [
  		{'id':'1','color':'Blanco'},
  		{'id':'2','color':'Negro'},
  		{'id':'3','color':'Café'},
  		{'id':'4','color':'Gris'}
  	];

  	$scope.races = [
  		{'id':'1','race':'Labrador', 'kind_id':2},
  		{'id':'2','race':'Chihuahua', 'kind_id':2},
  		{'id':'3','race':'Mestizo', 'kind_id':2},
  		{'id':'4','race':'Gran Danés', 'kind_id':2},
  		{'id':'5','race':'Siames', 'kind_id':1}
  	];

  	$scope.birthdayCalendar = {
    	opened: false
  	};  	

  	$scope.acquisitionCalendar = {
    	opened: false
  	};

	$scope.dateOptions = {
	    formatYear: 'yy',
	    maxDate: new Date(2020, 5, 22),
	    minDate: new Date(),
	    startingDay: 1,
	};

  	$scope.openBirthdayCalendar = function() {
    	$scope.acquisitionCalendar.opened = true;
  	};  	

  	$scope.openAcquisitionCalendar = function() {
    	$scope.birthdayCalendar.opened = true;
  	};

  	$scope.save = function(pet){
		$uibModalInstance.close(pet);
  	}
	$scope.close = function(){
    	$uibModalInstance.close();
  	}
    $scope.submit = function() {
      if ($scope.form.file.$valid && $scope.file) {
        $scope.upload($scope.file);
      }
    };
});