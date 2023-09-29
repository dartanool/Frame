<?php
namespace source\controller;
class Maincontroller{
    public function main(){
        echo 'Hello world';
    }
    public function sayHello(string $name){
        echo 'hello,'.$name; //конготинация, переменная приклеивается 
        // echo "hello, $name"; // в интерполяции можно вызывать только переменные 
    }
};

