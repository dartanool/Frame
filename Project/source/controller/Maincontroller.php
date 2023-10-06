<?php
namespace source\controller;
use source\View\View;
use Services\Db;

class Maincontroller{
    private $view;

    public function __construct()
    {

        $this->view = new View(__DIR__ . '/../../template');
        $this->db=new Db;

    }



    public function main(){
        $sql = 'SELECT *FROM `articles`';
        $article=$this->db->query($sql);
        // include __DIR__.'/../../template/main/main.php';
        $this->view->renderHtml('/main/main.php',['article'=>$article]);
    }
    public function sayHello(string $name){
        echo 'hello,'.$name; //конготинация, переменная приклеивается 
        // echo "hello, $name"; // в интерполяции можно вызывать только переменные 
    }
};

