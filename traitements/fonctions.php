<?php
session_start();
require_once("./data/connect-bd.php");
function pageConnexion($post)
 {
     $login=$post['login'];
     $password=$post['password'];
     //Validation des Champs en Php
   
     $result=userConnect($login, $password);

     if($result!== null)
     {
        
         $_SESSION['userConnect']=$result;
         echo $result['profil'];
         

         
     }else{
          echo "error";
     }

 } 


 
 function is_connect(){
    if(isset($_SESSION['userConnect'])){
        return true;
    }else{
       return false;
    }
}

 ?>