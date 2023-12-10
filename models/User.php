<?php 

namespace models; 

class User extends ActiveRecord{
    public static $table = 'Users';
    public static $columsDB = ['id', 'name', 'lastname', 'email', 'username', 'password', 'token', 'confirm'];
    public $id;
    public $name; 
    public $lastname; 
    public $email;
    public $username; 
    public $password; 
    public $password_current; 
    public $password_new; 
    public $token;
    public $confirm;
    
    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->name = $args['name'] ?? "";
        $this->lastname = $args['lastname'] ?? "";
        $this->email = $args['email'] ?? "";
        $this->username = $args['username'] ?? "";
        $this->password = $args['password'] ?? "";
        $this->password_current = $args['password_current'] ?? "";
        $this->password_new = $args['password_new'] ?? "";
        $this->token = $args['token'] ?? "";
        $this->confirm = $args['confirm'] ?? 0;



    }
    
}        
    
 
