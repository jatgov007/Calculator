/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var module = angular.module("myModule",[]);
module.controller("calcualatorCtrl", calcualatorCtrl);


function calcualatorCtrl(){
    
    this.resultSet = 0;
    this.buttonIsClicked = function(button){
        this.selectedOperation = button;
    }
    
    this.computeResult = function(){
       var number1 = parseFloat(this.a);
       var number2 = parseFloat(this.b);
       
       if(this.selectedOperation === '+')
       {
           this.resultSet = number1 + number2;
       }
       else if(this.selectedOperation === '-')
       {
           this.resultSet = number1 - number2;
       }
       else if(this.selectedOperation === '*')
       {
           this.resultSet = number1 * number2;
       }
       else if(this.selectedOperation === '/')
       {
           this.resultSet = number1 / number2;
       }
       
    }
    
    
}



