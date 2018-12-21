var app = angular.module('app', []);
app.controller('StatusCRUDController', ['$scope','StatusCRUDService', function ($scope,StatusCRUDService) {

    $scope.updateStatus = function () {
        StatusCRUDService.updateStatus($scope.statu.id,$scope.statu.description_Status)
          .then(function success(response){
              $scope.message = 'status data updated!';
              $scope.errorMessage = '';
              //$scope.status.id = '';
              //$scope.status.description_Status = '';
              $scope.getAllStatus();
          },
          function error(response){
              $scope.errorMessage = 'Error updating status!';
              $scope.message = '';
          });
    }

    $scope.getStatus = function () {
        var id = $scope.statu.id;
        StatusCRUDService.getStatus($id)
          .then(function success(response){
              $scope.statu = response.data;
              $scope.statu.id = $id;
              $scope.message='';
              $scope.errorMessage = '';
             // $scope.getAllStatus();

          },
          function error (response ){
              $scope.message = '';
              if (response.statu === 404){
                  $scope.errorMessage = 'Status not found!';
              }
              else {
                  $scope.errorMessage = "Error getting Status!";
              }
          });
    }

    $scope.addStatus = function () {
        if ($scope.statu != null && $scope.statu.description_Status) {
            StatusCRUDService.addStatus($scope.statu.descrition_Status)
              .then (function success(response){
                  $scope.message = 'status added!';
                  $scope.errorMessage = '';
                 // $scope.status.id = '';
                  //$scope.status.description_Status = '';
                  //$scope.getAllStatus();
              },
              function error(response){
                  $scope.errorMessage = 'Error adding!';
                  $scope.message = '';
            });
        }
        else {
            $scope.errorMessage = 'Please enter a name!';
            $scope.message = '';
        }
    }

    $scope.deleteStatus = function () {
        StatusCRUDService.deleteStatus($scope.statu.id)
          .then (function success(response){
              $scope.message = 'status deleted!';
              $scope.status = null;
              $scope.errorMessage='';
              //$scope.getAllStatus();
          },
          function error(response){
              $scope.errorMessage = 'Error deleting!';
              $scope.message='';
          })
    }

    $scope.getAllStatus = function () {
        StatusCRUDService.getAllStatus()
          .then(function success(response){
              $scope.statu = response.data.data;
      console.log(response.data.data);
             // $scope.message='';
              //$scope.errorMessage = '';
          },
          function error (response ){
              $scope.message='';
              $scope.errorMessage = 'Error!';
          });
    }
    //$scope.getAllStatus();
}]);
    app.service('StatusCRUDService',['$http', function ($http) {
            
            'use strict';

    this.getStatus = function getStatus(statusId){
        return $http({
          method: 'GET',
          //url: urlToRestApi+'/'+statusId,
          url: 'api/status/'+statusId,
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        });
	}

    this.addStatus = function addStatus(description_Status){
        return $http({
          method: 'POST',
          url: urlToRestApi,
          data: {description_Status:description_Status},
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        });
    }

    this.deleteStatus = function deleteStatus(id){
        return $http({
          method: 'DELETE',
          url: urlToRestApi+'/'+id ,
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        })
    }

    this.updateStatus = function updateStatus(id,description_Status){
        return $http({
          method: 'PATCH',
          url: urlToRestApi+'/'+id,
          data: {description_Status:description_Status},
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
        })
    }

    this.getAllStatus = function getAllStatus(){
        return $http({
          method: 'GET',
         // url: urlToRestApi,
         url: 'api/status/',
          headers: { 'X-Requested-With' : 'XMLHttpRequest', 'Accept' : 'application/json'}
    });
    }
    }]);