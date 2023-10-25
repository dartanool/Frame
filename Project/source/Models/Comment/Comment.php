<?php
namespace source\Models\Comment;//пространство имен, откуда будут брать информацию последующие укзания 
use source\Models\User\User;
use source\Models\Article\Article;
use source\ActiveRecordEntity;
  
class Comment extends ActiveRecordEntity{
    protected $textComm;
    protected $createdAt;
    protected $articleId;
    protected $authorCommId;

    public function getAuthorCommId():string
    {
        $user= User::getById($this-> authorCommId); 
        return $user;
    }    
    public function getTextComm():string
    {
        return $this->textComm;
    }
    public function getArticleId():Article
    {
        $article= Article::getById($this->articleId); 
        return $article;
    }
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public static function getTableName():string
    {
        return 'comment';
    }


    public function setAuthorCommId(string $authorCommtId){
        $this->user = $user;
    }
    public function settextComm(string $textComm){
        $this->textComm = $textComm;
    }
    public function setArticleId(string $articleId){
        $this->articleId = $articleId;
    }
    public function setcreatedAt($createdAt)
    {
        $this->$createdAt=$createdAt;
    }
}