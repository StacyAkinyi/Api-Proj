<?php
//identify pssible directories where classes could be e.g. Layouts, Menus, Contents
function class autoload(){
    $directories=["contents","layouts","menus"];
    foreach($directories as $dir){
        $filename=dirname(__FILE__). DIRECTORY_SEPARATOR. $dir.DIRECTORY_SEPARATOR . $classname . "php";
        if(file_exists($filename) AND is_reachable($filename)){
            require_once $filename;
        }
    }
}
spl_autoload_register('classAutoLad');


require_once "Layoutfolder/layout.php";
$ObjLayouts = new layout();

require_once "Menus/menu.php";
$ObjMenus = new menu();

require_once "Contents/headings.php";
$ObjHeadings = new headings();







?>
