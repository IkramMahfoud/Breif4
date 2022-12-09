<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname('BREIF4').DS);
define("CONTROLLER",ROOT_PATH.'controller'.DS);
define("MODEL",ROOT_PATH.'model'.DS);
define("VIEW",ROOT_PATH.'view'.DS);
define("UPLOAD",ROOT_PATH.'upload'.DS);


// autoload all classes: 

$modules = [ROOT_PATH,VIEW,CONTROLLER,MODEL];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');
 
$test=new controller();

?>