<?php
namespace Controllers;

use MVC\Router;

class Logincontroller{
    public static function login(Router $router){
        $router->render("auth/login",[
            "title"=> "login",
            "message" => "Te damos la bienvenida"
        ]);
    }
    public static function join(Router $router){
        $router->render("auth/join",[
            "title" => "Únete a My Unsplash",
            "message" => "Ya tienes una cuenta <a href='/login'>Inicia Sesión</a>"
        ]);
    
}
}