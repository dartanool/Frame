<?php
// function myAutoLoader(string $className){
//     // echo $className;
//     require_once  str_replace('\\', '/', $className).'.php';

// }
// require_once 'source/Models/Article/Article.php';//подключение классов, инклюдами будет подклбчение без проверок на ошибки 
// require_once 'source/Models/User/User.php';//подключение классов, инклюдами будет подклбчение без проверок на ошибки 

// myAutoLoader();
spl_autoload_register(function (string $className) {

    require_once  str_replace('\\', '/', $className) . '.php';

});

$controller = new source\controller\Maincontroller;
// $controller -> main();
// echo '<br>';
if (!empty($_GET['name'])) $controller->sayHello($_GET['name']);
else $controller-> main();

// spl_autoload_register('myAutoLoader');
$author= new source\Models\User\User('Ivan');
$article=new source\Models\Article\Article('new title','text',$author);
// echo $article->getAuthor()-> getName();

?>
