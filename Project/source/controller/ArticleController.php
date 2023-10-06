<?php
namespace source\controller;
use source\View\View;
use Services\Db;
use Services\Article\Article;



class ArticleController{
    private $view;
    private $db;
    
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../template');
        $this->db=new Db;

    }

    public function index(){
        $sql = 'SELECT *FROM `articles`';
        $article=$this->db->query($sql);
        // include __DIR__.'/../../template/main/main.php';
        $this->view->renderHtml('/main/main.php',['article'=>$article]);
    }
    
    public function show($id){
        $sql ='SELECT * FROM `articles` WHERE `id`=:id;'; 
        $article=$this->db->query($sql,[':id'=>$id],Article::class);
        var_dump($article);
        if (!$article) {
            $this -> view -> renderHtml('/main/error.php',[],404);
            return;
        }
        $this->view->renderHtml('/article/show.php',['article'=>$article[0]]);
        // var_dump($article);
    } 

}