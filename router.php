<?php

namespace MVC;

class Router{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn){
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn){
        $this->postRoutes[$url] = $fn;
    }

    public function validateRoutes(){
        $currentURL=strtok($_SERVER["REQUEST_URI"],"?");
        $method = $_SERVER["REQUEST_METHOD"];
        if($method==="GET"){
            $fn = $this->getRoutes[$currentURL] ?? null;
            

            
        } else{
            $fn = $this->postRoutes[$currentURL] ?? null;

        }
        if($fn){
            call_user_func($fn,$this);
           }
            else{
                echo "error404";
            }
       }
       public function render($views, $data=[]){
        foreach($data as $key => $value){
            $$key = $value;

        }
        ob_start();
        include_once __DIR__ . "/views/$views.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/layout.php";
       }
      

}