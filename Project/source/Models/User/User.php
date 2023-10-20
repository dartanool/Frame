<?php
namespace source\Models\User;
use source\ActiveRecordEntity;

class User extends ActiveRecordEntity{
    protected $nickname;
    protected $email;
    protected $isConfirmed;
    protected $role;
    protected $passwordHash;
    protected $authToken;

    public function getName(){
        return $this->nickname;
    }
    public static function getTableName():string
    {
        return 'users';
    }
}

?> 