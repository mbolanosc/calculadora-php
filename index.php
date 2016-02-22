<?php
$scripts = ["js/angular.min.js", "js/app.js"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div>
    <div class="col-md-4 col-md-offset-4">
        <div class="page-header text-center"></div>
        <h3>Calculator</h3>
        <div class="panel panel-default">
            
            <div class="panel-body" ng-app="proyectoUno" ng-controller="ProyectoUnoController">
                <div class="panel-heading">
                    <div class="form-group"><p>{{result | number}}</p></div>
                </div>
                   <div class="form-group">
                          <button class="btn btn-default" ng-click="numberClicked(7)">7</button> 
                          <button class="btn btn-default" ng-click="numberClicked(8)">8</button>
                          <button class="btn btn-default" ng-click="numberClicked(9)">9</button>
                          <button class="btn btn-warning" ng-click="doSomethingMulti()">x</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" ng-click="numberClicked(4)">4</button>
                        <button class="btn btn-default" ng-click="numberClicked(5)">5</button>
                        <button class="btn btn-default" ng-click="numberClicked(6)">6</button>
                        <button class="btn btn-warning" ng-click="doSomethingMinus()">-</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" ng-click="numberClicked(1)">1</button>
                        <button class="btn btn-default" ng-click="numberClicked(2)">2</button>
                        <button class="btn btn-default" ng-click="numberClicked(3)">3</button>
                        <button class="btn btn-warning" ng-click="doSomethingPlus()">+</button>
    
                    </div>
                    <div class="form-group">   
                        <button class="btn btn-default" ng-click="">0</button>
                        <button class="btn btn-warning" ng-click="doSomethingDiv()">÷</button>
                        <button class="btn btn-warning" ng-click="doResult()">=</button>
                        <button class="btn btn-info" ng-click="clear()">C</button>
                    </div>
            </div>
        </div>

    </div>
</div>
<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>
