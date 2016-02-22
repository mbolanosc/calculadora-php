angular.module('proyectoUno', [])
    /**
     * Definimos un servicio que interactuará con el back-end.
     */
    .service('CalculadoraService', ['$http',
        function($http) {
            var doSomething = function doSomething(firstvalue, secondvalue, operation) {
                var url = 'controllerCalculator.php';
                url += '?firstvalue=' + firstvalue;
                url += '&secondvalue=' + secondvalue;
                url += '&operation=' + operation;

                return $http({url: url});
            };

            return {
                doSomething: doSomething
            }
        }])
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('ProyectoUnoController',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.result = 0;

                };
                var actualVal = 1;
                $scope.operation = "";
                $scope.firstvalue=0,
                $scope.secondvalue=0;
                
                $scope.numberClicked = function numberClicked(number) {
                    if (actualVal === 1) {
                        $scope.firstvalue = number;
                    } else if (actualVal === 2) {
                        $scope.secondvalue = number;
                    }
                 }

                 $scope.replaceNumber = function replaceNumber() {
                    if (actualVal === 1) {
                        actualVal = 2;
                    } else if (actualVal === 2) {
                        actualVal = 1;
                    }
                 }

                  $scope.doSomethingPlus = function doSomethingPlus() {
                    $scope.operation = "plus";
                    $scope.replaceNumber();
                 }

                 $scope.doSomethingMinus = function doSomethingMinus() {
                    $scope.operation = "minus";
                    $scope.replaceNumber();
                 }
                 $scope.doSomethingMulti = function doSomethingMulti() {
                    $scope.operation = 'multi';
                    $scope.replaceNumber();
                 }
                 $scope.doSomethingDiv = function doSomethingDiv(){
                    $scope.operation = 'divi';
                    $scope.replaceNumber();
                 }

               $scope.clear = function() {
                 $scope.result = 0;
               
                };
  
             $scope.doResult = function doResult() {
                    //$scope.operation = 'plus';
                      CalculadoraService
                        .doSomething($scope.firstvalue, $scope.secondvalue, $scope.operation)
                        .then(function(response) {
                            if (response.data) {
                                $scope.result = response.data;
                            }
                        }, function(response) {
                            $scope.result = response;
                        });
                
                };
                $scope.init();
            }]);
