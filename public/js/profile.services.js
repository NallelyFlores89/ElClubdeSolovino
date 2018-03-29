app.factory('petService',function($http, $rootScope){
  return{
      save : function(data){
        return $http.post('pets', data).then(function(res){
          return res.data
        }, function(error){
          if(error.status == 401){
            return 401;
          }else{
            return null;
          }
        });
      },
  }
});
