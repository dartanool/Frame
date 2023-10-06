<?php 
return ([ 
    '/^username$/'=> [\source\controller\Maincontroller::class, 'sayHello'], 
    '/^$/' => [\source\controller\ArticleController::class,'index'],
    '~^article/(\d+)$~'=>[\source\controller\ArticleController::class,'show'],
]);