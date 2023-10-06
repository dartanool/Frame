<?php
namespace source\Models\User;

class User{
    private $name;
    private $id;
    private $nickname;
    private $email;
    private $role;
    private $isConfirmed;
    private $passwordHash;
    private $authToken;

    public function __construct(string $name){
        $this-> name=$name;
    }

    public function getName(){
        return $this->name;
    }
}

?> 