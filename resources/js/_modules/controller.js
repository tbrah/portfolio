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

        //activeTech Filter
        app.filter('activeTech', function(){
           return function(item){

               var newArray = {};

               angular.forEach(item, function(value, key){
                    if(value > 0){
                        newArray[key] = value;
                    }
               });

               return newArray
           }
        });

        //Github Data Service
        app.factory('githubService', function ($http) {
            var promise;
            var myService = {
                async: function () {
                    if (!promise) {
                        // $http returns a promise, which has a then function, which also returns a promise
                        promise = $http.get('https://api.github.com/users/tbrah/repos').then(function (response) {
                            // The then function here is an opportunity to modify the response
                            console.log(response);
                            // The return value gets picked up by the then in the controller.
                            return response.data;
                        });
                    }
                    // Return the promise to the controller
                    return promise;
                }
            };
            return myService;
        });



        app.controller('laptopCtrl', function ($scope, githubService, colorService){

            $scope.portfolio = [];

            githubService.async().then(function(data){
                
                angular.forEach(data, function(value, key){

                    if(value.name == "portfolio"){
                        $scope.portfolio.push(value);
                        console.log($scope.portfolio);
                    }

                });          
                $scope.data = data;
            });

            $scope.tabState = false;

            $scope.showTab = function(){
                $scope.tabState = !$scope.tabState;
            }

            $scope.viewSeleted ="";

            $scope.viewSelector = function(view){
                $scope.viewSelected = view;
            };

            //default color
            $scope.color = "#de6161";
            $scope.twoColor = "#54a8e0";

            $scope.secondaryColor = 'linear-gradient(150deg, ' + $scope.color + ' 25%, ' + $scope.twoColor + ' 94%)';

            $scope.$watch('color', function(val){  
                $scope.color = val;
                $scope.secondaryColor = 'linear-gradient(150deg, ' + $scope.color + ' 25%, ' + $scope.twoColor + ' 94%)';
                $scope.myStyle = {
                    'background': 'linear-gradient(150deg, ' + $scope.color + ' 25%, ' + $scope.twoColor + ' 94%)'
                };
                colorService.setData(val, "primColor");
            });

            $scope.$watch('twoColor', function(val){
                $scope.twoColor = val;
                $scope.secondaryColor = 'linear-gradient(150deg, ' + $scope.color + ' 25%, ' + $scope.twoColor + ' 94%)';
                $scope.myStyle = {
                    'background': 'linear-gradient(150deg, ' + $scope.color + ' 25%, ' + $scope.twoColor + ' 94%)'
                };
                colorService.setData(val, "secColor");
            });

            // Reseting the colors
            $scope.changeColor = function(){
                $scope.color = "#de6161";
                $scope.twoColor = "#54a8e0";
                $scope.myStyle = {
                    'background': 'linear-gradient(150deg, #de6161 25%, #54a8e0 94%)'
                };
            };
            
        });

        app.controller('treeGitCtrl', function ($scope, $http, githubService){

            $scope.treehouseBadges = [];
            $scope.treehouseGeneral = [];
            $scope.treehousePoints = [];
            $scope.sortedArray;
            $scope.courseController = "total";

            $http({
            method: 'GET',
            url: 'https://teamtreehouse.com/ThomasMessell.json'
            }).then(function(response){
                $scope.treehouseBadges = response.data.badges;
                $scope.treehouseGeneral = response.data;
                $scope.treehousePoints = response.data.points;
                $scope.sortCourses();
            }), function errorCallback(response){
                console.log("There was an error " + response);
            }

            $scope.sortedCourse = [];

            //This should maybe be a filter instead.
            $scope.sortCourses = function(){

                angular.forEach($scope.treehouseBadges, function(value, key){

                    //Filter out the array and look for specific techonology courses.
                    var checkArray = value.courses.filter(function(e){
                        return e.title.toLowerCase().includes("c#");
                    });

                    //If the checkArray contains anything push it to the scope.
                    if(checkArray.length > 0){
                        $scope.sortedCourse.push(value);
                    }

                });

                //console.log($scope.sortedCourse);

            };

            $scope.gitRepos = [];

            githubService.async().then(function (data) {
                $scope.gitRepos = data;
            });

        });

        app.controller('introCtrl', function($scope, colorService){
                $scope.primColor = colorService.getData("primColor");
                $scope.secColor = colorService.getData("secColor");

                console.log($scope.secColor);

                $scope.$watch(function () {
                    return colorService.primColor;
                }, function (newVal) {
                    $scope.primColor = newVal;
                });

                $scope.$watch(function (){
                    return colorService.secColor;
                }, function(newVal){
                    $scope.secColor = newVal;
                });
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

        app.service('colorService', function () {
            this.primColor = "#de6161";
            this.secColor = "#54a8e0";

            this.getData = function(color){
                if(color == "primColor"){
                    return this.primColor;
                } else if (color == "secColor"){
                    return this.secColor;
                }
            };

            this.setData = function(val, color){
                console.log(val, color);
                if(color == "primColor"){
                    this.primColor = val;
                } else if (color == "secColor"){
                    this.secColor = val;
                }
            }
        });

        app.controller('skillsetCtrl', function($scope, colorService){

            $scope.primColor = colorService.getData("primColor");
            $scope.secColor = colorService.getData("secColor");

            $scope.$watch(function () {
                return colorService.primColor;
            }, function (newVal) {
                $scope.primColor = newVal;
            });

            $scope.$watch(function (){
                return colorService.secColor;
            }, function(newVal){
                $scope.secColor = newVal;
            });

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

        app.directive("colorPicker", function(){
            return {
                restrict:"E",
                templateUrl: "views/color-picker-view.php"
            };
        });

	}
}