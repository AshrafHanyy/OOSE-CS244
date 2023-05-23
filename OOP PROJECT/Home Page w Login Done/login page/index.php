<?php

require_once("MainLogin.php");
require_once("StudentLogin.php");
require_once("TeacherLogin.php");
require_once("ParentLogin.php");
require_once("AdminLogin.php");
require_once("Context.php");
require_once("ModelDatbase.php");



$s=ModelDatabase::getInstance();


if (isset($_POST['Submit']) && $_POST['Submit'] == "Submit") {
    echo "ezzzzzz";
    if($_POST['account-type']=="teacher")
    {
        echo "lol";
        $context = new Context(new TeacherLogin());
        $username = $_POST['username'];
        $password = $_POST['password'];
        $context->PreformLogin($username,$password);
    }
    if($_POST['account-type']=="student")
    {
        $context = new Context(new StudentLogin());
        echo "ez";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $context->PreformLogin($username,$password);

        
    }
    if($_POST['account-type']== "admin")
    {
        echo "ma2";
        $context = new Context(new AdminLogin());
        $username = $_POST['username'];
        $password = $_POST['password'];
        $context->PreformLogin($username,$password);

      
    }
    if($_POST['account-type']=="parent")
    {
        echo "2121";
        $context = new Context(new ParentLogin());
        $username = $_POST['username'];
        $password = $_POST['password'];
        $context->PreformLogin($username,$password);

      
    }


    
}





?>