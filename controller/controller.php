<?php
/*front-end controller*/

class controller
{
  protected $controller = "HomeController";
  protected $action = "index";
  protected $pramas = [];

  //---------------------------------------
  public function __Construct()
  {
    $url = $_SERVER['REQUEST_URI'];
    $url = explode("/", $url);
     
    echo $url[0]." hui hui captain";
  }

  
}
