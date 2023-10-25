<?php
namespace source\controller;
use source\View\View;
use source\Models\Article\Article;
use source\Models\User\User;
use source\Models\Comment\Comment;



class ArticleController{
    private $view;
    
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../template');

    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('/main/main.php', ['articles'=>$articles]);
    }
    
    public function show($id){
        $article = Article::getById($id);
        $user = $article->getAuthorId();
        $comment = Comment::findAll();
        

        if(!$article){
            $this->view->renderHtml('/main/error.php', [], 404);
            return;
        }
        $this->view->renderHtml('/article/show.php', ['article'=>$article, 'user'=>$user, 'comment'=>$comment]);
    } 

    public function create(){
        $users = User::findAll();
        $this->view->renderHtml('/article/create.php', ['users'=>$users]);
    }
    public function store(){    
        $article = new Article;
        $article->setTitle($_POST['name']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['author']);
        $article->save();
        $this->index();

    }

    public function update(int $id){ 
        $article=Article::getById($id);
        $article->setTitle($_POST['name']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['author']);
        $article->save();
        $this->show($id);

    }

    public function edit(int $id){
        $article=Article::getById($id);
        $users=User::findAll($id);
        $this-> view-> renderHtml('/article/edit.php',['article'=>$article, 'users'=>$users]);
        
    }
    public function delete(int $id){
        $article=Article::getById($id);
        $article->delete();
        $this->index();
        
    }
    



}