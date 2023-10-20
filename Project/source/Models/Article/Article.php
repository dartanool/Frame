<?php
namespace source\Models\Article;//пространство имен, откуда будут брать информацию последующие укзания 
use source\Models\User\User;
use source\ActiveRecordEntity;
  

class Article extends ActiveRecordEntity{
    protected $name;
    protected $text;
    protected $authorId;

        public function getAuthorId():User
        {
            $user= User::getById($this-> authorId); 
            return $user;
        }
        public function getTitle():string
        {
            return $this->name;
        }
        public function getText():string
        {
            return $this->text;
        }


        public function setTitle(string $name){
            $this->name = $name;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function setAuthorId(string $authorId){
            $this->authorId = $authorId;
        }


        public static function getTableName():string
        {
            return 'articles';
        }
}
?>