<?php

require_once("MainLogin.php");

class StudentLogin implements MainLogin
{
     function login($id,$password)
    {
        $s=ModelDatabase::getInstance();

     
        $sql = "SELECT * FROM student WHERE ID = '$id' AND Password = '$password'";
        
        $res = $s->link->query($sql);
        
        if ($res->num_rows > 0) {
            echo'<script>alert("user found")</script>';
            header("Location:../../Student/student.html");
        } else {
            echo'<script>alert("error: user not found")</script>';
            header("Location:login.html");
        }
        
        echo 'outside if';

        // Close statement
    }

}




?>