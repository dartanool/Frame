<?php
return ([
    '/^username$/' =>[\source\controller\Maincontroller::class, 'sayHello'],
    '/^$/' =>[\source\controller\ArticleController::class, 'index'],
    '~^article/(\d+)$~' =>[\source\controller\ArticleController::class, 'show'],
    '~^article/create$~' =>[\source\controller\ArticleController::class, 'create'],
    '~^article/store$~' =>[\source\controller\ArticleController::class, 'store'],
    '~^article/upadte/(\d+)$~' =>[\source\controller\ArticleController::class, 'update'],
    '~^article/edit/(\d+)$~' =>[\source\controller\ArticleController::class, 'edit'],
    '~^article/delete/(\d+)$~' =>[\source\controller\ArticleController::class, 'delete'],
    
]);