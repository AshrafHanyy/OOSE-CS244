<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'school');
 class ModelDatabase
{
    private static $instance = null;
     public  $link=null;

    private function __construct()
    {
        $this->link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    }
    public static function GetInstance()
    {
        if(self::$instance==null)
        {
            self::$instance = new ModelDatabase();
        }
        return self::$instance;
        
    }
    
    public static function closedb()
    {
        $link=null;

    }


}





?>