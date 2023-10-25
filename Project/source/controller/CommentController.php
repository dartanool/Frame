<?php
namespace source\controller;
use source\View\View;
use source\Models\Article\Article;
use source\Models\User\User;
use source\Models\Comment\Comment;



class CommentController{
    private $view;
    
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../template');

    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('/main/main.php', ['articles'=>$articles]);
    }
    
    
    public function store(){    
        $comment = new Comment;
        $comment->settextComm($_POST['textComm']);
        // $comment->setcreatedAt($_POST['createdAt']);
        $comment->save();
        $this->index();

    }

    public function update(int $id){ 
        $comment= Comment::getById($id);
        $comment->settextComm($_POST['textComm']);
        $comment->save();
        $this->show($id);

    }

    public function edit(int $id){
        $comment=Comment::getById($id);
        $users=User::findAll($id);
        $this-> view-> renderHtml('/comment/edit.php',['comment'=>$comment]);
        
    }
    public function delete(int $id){
        $comment=Comment::getById($id);
        $comment->delete();
        $this->index();
        
    }
    



}