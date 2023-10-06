<?php
namespace source\Models\Article;//пространство имен, откуда будут брать информацию последующие укзания 
use source\Models\User\User;
  

class Article{
    private $title;
    private $text;
    private $authorid;
    private $id;

    public function __set($name, $value){
        echo 'Я пыта.сь создать свойство '. $name.'со значением '.$value.'<br>';
        $this->underscoreToComeCase($name)=$value;
    }
    public function underscoreToComeCase(string $name)::string;
    {
        return str_replace('_','', upwords($name,'_'))
    }

    public function getAuthor():User{
        return $this->author;
    }
}
?>