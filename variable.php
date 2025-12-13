// varible declaration and use
//there are three enviroment for variables
//1. local variable
//2. global variable    
//3. static variable
<?php
//local variable
function localvar(){
    $name = "John";//this a local variable  only work on this function
   
    echo "Hello $name";        

}
localvar();
//global variable
$age = 25; //this is a global variable
function globalvar(){
    global $age; //to use global variable inside function we use global keyword
    echo "Your age is $age";
}
globalvar();
//static variable
function staticvar(){
    static $count = 0; //static variable
    $count++;
    echo "You have visited this page $count times.<br>";
}
staticvar();
staticvar();    