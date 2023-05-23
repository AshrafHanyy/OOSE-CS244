<?php

require_once("MainLogin.php");

require_once("ModelDatbase.php");






 class TeacherLogin implements MainLogin
{
    public function login($id,$password)
    {
        
        $s=ModelDatabase::getInstance();

     
        $sql = "SELECT * FROM teacher WHERE ID = '$id' AND Password = '$password'";
        
        $res = $s->link->query($sql);
        
        if ($res->num_rows > 0) {
            echo'<script>alert("user found")</script>';
            header("Location:../../Teacher/Teacher.html");
        } else {
            echo'<script>alert("error: user not found")</script>';
            header("Location:login.html");
        }
        
        echo 'outside if';

        // Close statement
       




       
    }

}




?>