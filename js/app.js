angular.module('proyectoUno', [])
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
    .controller('ProyectoUnoController',
        ['$scope', 'CalculadoraService',
            function ($scope, CalculadoraService) {
                $scope.init = function() {
                     $scope.result = null;
                     $scope.operation = null;
                     $scope.firstvalue='';
                     $scope.secondvalue='';
                };
            
                $scope.numberClicked = function numberClicked(number) {
                   if ($scope.operation){
                    $scope.secondvalue = '' + $scope.secondvalue + number;
                     }else {
                        $scope.firstvalue = '' + $scope.firstvalue + number;
                     }
                 };

                $scope.doSomethingPlus = function doSomethingPlus() {
                    $scope.operation = "plus";
                 }

                 $scope.doSomethingMinus = function doSomethingMinus() {
                    $scope.operation = "minus";
                 }
                 $scope.doSomethingMulti = function doSomethingMulti() {
                    $scope.operation = 'multi';
                 }
                 $scope.doSomethingDiv = function doSomethingDiv(){
                    $scope.operation = 'divi'
                 }

               $scope.clear = function() {
                 $scope.result = 0;
                 $scope.operation = '';
                 $scope.firstvalue = '';
                 $scope.secondvalue = '' ;
               };
  
             $scope.doResult = function doResult() {
                if($scope.buttonsCalcu.$valid){
                    CalculadoraService
                    .doSomething(
                        parseFloat($scope.firstvalue),
                        parseFloat($scope.secondvalue),
                        $scope.operation
                    ).then(function (response) {
                        if( response.data) {
                            $scope.result = response.data;
                        }
                    },function ( response ){
                        $scope.result = response;
                    });
                }
            };
                    
                $scope.init();
            }]);
