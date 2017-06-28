<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="myModule">
    <head>
        <meta charset="UTF-8">
        <title>Calculator Application</title>
        <script src="angular.min.js"></script>
        <script src="example.js"></script>
    </head>
    <body>
        <h1>Calculator App</h1>
        <div ng-controller="calcualatorCtrl as ctr">
            <input type="text" ng-model="ctr.a" >
            <span ng-bind="ctr.selectedOperation"></span>
            <input type="text" ng-model="ctr.b">
            <button ng-click="ctr.computeResult()">=</button>
            <span ng-bind="ctr.resultSet"></span>
            
                <p> Choose Operation : 
                    <button  ng-click ="ctr.buttonIsClicked('+')">+</button>
                    <button  ng-click="ctr.buttonIsClicked('-')">-</button>
                    <button  ng-click="ctr.buttonIsClicked('*')">*</button>
                    <button  ng-click="ctr.buttonIsClicked('/')">/</button>
                </p>
                
               
        </div>
        
    </body>
</html>
