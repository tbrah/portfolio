import {Module} from "wrapper6";
var $ = jQuery;
export default class Controller extends Module {
	ready(app) {

        var app = angular.module('portApp', ['ngMaterial', 'ngAnimate']);

        //Reverse Filter
        app.filter('reverse', function() {
            return function(items) {
                return items.slice().reverse();
            };
        });

        app.controller('githubCtrl', function($scope, $http){

            $scope.gitRepos = [];

            //Get all the repositories from GitHub
            $http({
            method: 'GET',
            url: 'https://api.github.com/users/tbrah/repos'
            }).then(function successCallback(response) {
                $scope.gitRepos = response.data;
            }, function errorCallback(response) {
                console.log("There was an error " + response);
            });


        });

        app.controller('treehouseCtrl', function($scope, $http){

            $scope.treehouseBadges = [];
            $scope.treehouseGeneral = [];
            $scope.treehousePoints = [];

            $http({
            method: 'GET',
            url: 'https://teamtreehouse.com/ThomasMessell.json'
            }).then(function(response){
                $scope.treehouseBadges = response.data.badges;
                $scope.treehouseGeneral = response.data;
                $scope.treehousePoints = response.data.points;
            }), function errorCallback(response){
                console.log("There was an error " + response);
            }
        });
        
        app.controller('footerCtrl', function($scope, $mdDialog){
            $scope.togglePopUp = false;

            $scope.openPopUp = function(){
                $scope.togglePopUp = true;
            }
        });

	}
}