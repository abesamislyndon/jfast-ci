var app = angular.module("jfastApp", []);

app.controller("forController", function($scope, $http){
getApproval();

function getApproval(){
    //$http.post("http://localhost:8888/jfast-ci/joblist_bank/json_approval").success(function(data){
	 $http.get("http://localhost:8888/jfast-ci/joblist_bank/json_approval").success(function(data)
	 	{ 
	 		$scope.aprovals = data;
	 	}); 
   }
});



