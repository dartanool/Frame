<?php
return ([
    '/^username$/' =>[\source\controller\Maincontroller::class, 'sayHello'],
    '/^$/' =>[\source\controller\ArticleController::class, 'index'],
    '~^article/(\d+)$~' =>[\source\controller\ArticleController::class, 'show'],
    '~^article/create$~' =>[\source\controller\ArticleController::class, 'create'],
    '~^article/store$~' =>[\source\controller\ArticleController::class, 'store'],
    '~^article/update/(\d+)$~' =>[\source\controller\ArticleController::class, 'update'],
    '~^article/edit/(\d+)$~' =>[\source\controller\ArticleController::class, 'edit'],
    '~^article/delete/(\d+)$~' =>[\source\controller\ArticleController::class, 'delete'],
    '~^article/(\d+)/store$~' =>[\source\controller\CommentController::class, 'store'],
    
    '~^comment/edit/(\d+)$~' =>[\source\controller\CommentController::class, 'edit'],
    '~^comment/update/(\d+)$~' =>[\source\controller\CommentController::class, 'update'],
]);