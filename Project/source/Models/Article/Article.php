<?php
namespace source\Models\Article;//пространство имен, откуда будут брать информацию последующие укзания 
use source\Models\User\User;
  

class Article{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author){
        $this->title=$title;
        $this->text=$text;
        $this->author=$author;
    }
    public function getAuthor():User{
        return $this->author;
    }
}
?>