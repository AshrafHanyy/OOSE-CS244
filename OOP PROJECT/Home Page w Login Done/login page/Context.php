<?php


 class Context
{
    public $logintype;
    
    public function __construct($l)
    {
        $this->logintype=$l;
    }

    public function PreformLogin($id,$password)
    {
        
      $this->logintype->login($id,$password);
        
    }

}




?>