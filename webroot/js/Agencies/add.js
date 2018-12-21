

var app = angular.module('linkedlists', []);



app.controller('CategoriesController', function ($scope, $http) {
    "use strict";
        //var url = "http://localhost/LaurenPerez_TP1/categories/getCategories.json";

    // l'url vient de add.ctp
    $http.get(urlToLinkedListFilter).then(function (response) {
        
        $scope.categories = response.data;
    });
})(app);


