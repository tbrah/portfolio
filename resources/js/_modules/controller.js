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
        
        app.controller('popUpCtrl', function($scope, $mdDialog){

            $scope.togglePopUp = false;
            $scope.currentView = '';

            $scope.openPopUp = function(view){
                $scope.currentView = view;
                $scope.togglePopUp = true;
            }

            //Have to do this if check otherwise bugs out when pressing space in input fields.
            //Data attributes didn't work ** Re-try a new method of fixing this **
            $scope.closePopUp = function(e){
                if(($(e.target).hasClass('closePopUp'))){
                    $scope.togglePopUp = false;
                }
            }
        });

        app.controller('skillsetCtrl', function($scope){

            $scope.codingTech = [
                {name:"HTML", level:5},
                {name:"CSS", level:5},
                {name:"jQuery", level:4},
                {name:"AngularJS", level:3},
                {name:"Angular2", level:3},
                {name:"PHP", level:3},
                {name:"MySQL", level:3},
                {name:"Gulp", level:3},
            ];

            $scope.levelsCode = [
                "Tried it once",
                "Used it in a project",
                "Used it in multiple projects  /  Comfortable using it",
                "Use it on a regular basis / Very Comfortable using it",
                "Senpai"
                ];

            $scope.designTech = [
                {name:"Photoshop", level:4},
                {name:"Illustrator", level:4},
                {name:"After Effects", level:2},
                {name:"In-Design", level:3},
            ];

            $scope.levelsDesign = [
                "Tried it once",
                "Used it in a project",
                "Used it in multiple projects  /  Comfortable using it",
                "Use it on a regular basis / Very Comfortable using it",
                "Senpai"
                ];

            $scope.currentTab = "code";
            
            $scope.selectTab = function(tab){
                if(tab == "code"){
                    $scope.currentTab = "code";
                } else {
                    $scope.currentTab = "design";
                }
            };

        });

        //-- Directives --//
        app.directive("codeList", function() {
            return {
                restrict:"E",
                templateUrl: "views/code-list-view.php"
            };
        });

        app.directive("designList", function() {
            return {
                restrict:"E",
                templateUrl: "views/design-list-view.php"
            };
        });

        app.directive("referenceLetter", function() {
            return {
                restrict:"E",
                templateUrl: "views/reference-letter-view.html"
            };
        });

        app.directive("mailForm", function() {
            return {
                restrict:"E",
                templateUrl: "views/form-view.php"
            };
        });

	}
}