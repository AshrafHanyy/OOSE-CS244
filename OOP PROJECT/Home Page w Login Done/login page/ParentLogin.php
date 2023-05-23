<?php

require_once("MainLogin.php");

 class ParentLogin implements MainLogin
{
   public  function login($id,$password)
    {
        header("Location:../../parent/parent.html");
        exit();

    }

}




?>