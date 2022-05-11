<?php
class App{
    protected $controller = "Home" ; 
    protected $action = "index" ;
    protected $param = []; 
    function __construct(){
        $arrayURL = $this->HandlerProcessURL();
        // CHECK xem url thành array . 
        if(file_exists("./Controller/".$arrayURL[0].".php")){
            $this->controller = $arrayURL[0];
            unset($arrayURL[0]);
        }
        require_once "./Controller/".$this->controller.".php";
        $Controllers = new $this->controller;
        if(isset($arrayURL[1])){
            if(method_exists($this->controller,$arrayURL[1])){
                $this->action = $arrayURL[1];
                unset($arrayURL[1]);
            }
        }
        // xu ly param 
        $this->param = $arrayURL?array_values($arrayURL):[];
        call_user_func_array([$Controllers,$this->action],$this->param);

    }
    function HandlerProcessURL(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}

?>