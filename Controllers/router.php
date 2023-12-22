<?php 

function run($method)
{
    
    if ($method === "GET") {
         getMethod($_REQUEST["url"]);
    }
}
function getMethod($method)
{
    $tab = explode("/",$method);
    $function = $tab[0] != "" ? $tab[0]: "home";

    require_once "blogFunctions.php";

    if(function_exists($function)){
        unset($tab[0]);
        if(isset($tab)){
            call_user_func_array($function, $tab);
            
        }
    }else{
        echo "Erreur 404";
    }
    
    
    // var_dump($tab);
    // die();
}
