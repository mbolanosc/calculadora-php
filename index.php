<?php
$scripts = ["js/angular.min.js", "js/app.js"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel-success class">
            <div class="panel-heading">
                <h3 style='text-align: center;'>Calculator</h3>
            </div>
            <div class="panel-body" ng-app="proyectoUno" ng-controller="ProyectoUnoController">
                <div class="panel-heading">
                    <div style="text-align:center"class="form-group"><p>{{result | number}}</p></div>
                     <p><pre>{{firstvalue}}</pre></p>
                      <p><pre>{{secondvalue}}</pre></p>
                       <p><pre>{{operation}}</pre></p>
                </div>
                <form name="buttonsCalcu" novalidate>
                   <div class="form-group">
                          <button class="btn btn-default round" ng-click="numberClicked(7)">7</button> 
                          <button class="btn btn-default round" ng-click="numberClicked(8)">8</button>
                          <button class="btn btn-default round" ng-click="numberClicked(9)">9</button>
                          <button class="btn btn-warning round" ng-click="doSomethingMulti()">x</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default round" ng-click="numberClicked(4)">4</button>
                        <button class="btn btn-default round" ng-click="numberClicked(5)">5</button>
                        <button class="btn btn-default round" ng-click="numberClicked(6)">6</button>
                        <button class="btn btn-warning round" ng-click="doSomethingMinus()">-</button>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default round" ng-click="numberClicked(1)">1</button>
                        <button class="btn btn-default round" ng-click="numberClicked(2)">2</button>
                        <button class="btn btn-default round" ng-click="numberClicked(3)">3</button>
                        <button class="btn btn-warning round" ng-click="doSomethingPlus()">+</button>
    
                    </div>
                    <div class="form-group">   
                        <button class="btn btn-default round" ng-click="">0</button>
                        <button class="btn btn-warning round" ng-click="doSomethingDiv()">÷</button>
                        <button class="btn btn-warning round" ng-click="doResult()">=</button>
                        <button class="btn btn-info round" ng-click="clear()">C</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>
</body>
</html>
