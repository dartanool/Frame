<?php
// function myAutoLoader(string $className){
//     // echo $className;
//     require_once  str_replace('\\', '/', $className).'.php';

// }
// require_once 'source/Models/Article/Article.php';//подключение классов, инклюдами будет подклбчение без проверок на ошибки 
// require_once 'source/Models/User/User.php';//подключение классов, инклюдами будет подклбчение без проверок на ошибки 

// myAutoLoader();


spl_autoload_register(function (string $className) {

    require_once  '../'.str_replace('\\', '/', $className) . '.php';

});

// $controller = new source\controller\Maincontroller;
$url=$_GET['route']??'';
$routes = require '../source/routes.php';
$isRouteFound=false; 

foreach ($routes as $pattern=>$controllerAndAction){
    preg_match($pattern,$url,$matches);
    if (!empty($matches)) 
    {
        $isRouteFound=true;
        break;        
    };
}
unset($matches[0]);

if($isRouteFound){
    $controllerName= $controllerAndAction[0];
    $actionName=$controllerAndAction[1];
    $controller = new $controllerName;
    $controller->$actionName(...$matches);
}
else echo'Not founded';


// $route ='route.php';

// $pattern='/^username$/';
// preg_match($pattern,$url,$matches);
// // var_dump($matches);

// if(!empty($matches)) {
//     $controller->sayHello($matches[0]);
//     // else $controller->main();
//     return;
// }

// $pattern='/^$/';
// preg_match($pattern,$url,$matches);
// if (!empty($matches)) {
//     $controller->main();
//     return;
// }
// echo 'страница не найдена'








// $controller -> main();
// // echo '<br>';
// if (!empty($_GET['name'])) $controller->sayHello($_GET['name']);
// else $controller-> main();

// spl_autoload_register('myAutoLoader');
// $author= new source\Models\User\User('Ivan');
// $article=new source\Models\Article\Article('new title','text',$author);
// echo $article->getAuthor()-> getName();

?>
