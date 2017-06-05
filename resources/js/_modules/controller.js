import {Module} from "wrapper6";
var $ = jQuery;
export default class Controller extends Module {
	ready(app) {

        var app = angular.module('portApp', []);

        app.controller('portCtrl', function($scope, $http){

            $scope.gitRepos = [];

            //Get all the repositories from GitHub
            $http({
            method: 'GET',
            url: 'https://api.github.com/users/tbrah/repos'
            }).then(function successCallback(response) {
                $scope.gitRepos = response.data;
                console.log($scope.gitRepos);
            }, function errorCallback(response) {
                console.log("There was an error " + response);
            });


        });

	}
}