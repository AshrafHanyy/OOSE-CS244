<?php

require_once("MainLogin.php");

class AdminLogin implements MainLogin
{
    function login($id,$password)
    {
        header("Location:../../admin/admin.html");
        exit();

    }

}




?>