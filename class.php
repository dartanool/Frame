<?php
class Cat{ //все свойства отдельно с модификаторами свойства 
    public $name;
    public $count;

    public function __construct(string $name){
        $this->name=$name;
    }

    public function sayHello(){
        echo "fraga";
    }
    public function sayName(){
        echo $this->name; //доллар к обращению свойства не ставится 
    }
}
$cat1=new Cat('gfhdjsnk');
$cat1->sayName();
echo '<br>';
$cat1->sayHello();

class Son extends Father{//наследование

} 

?>
