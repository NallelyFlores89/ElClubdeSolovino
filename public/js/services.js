app.factory('loginService',function($http, $rootScope){
  return{
      login : function(data){
        return $http.post('/login',data).then(function(res){
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
