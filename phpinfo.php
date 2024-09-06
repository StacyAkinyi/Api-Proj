<?php
 phpinfo();
?>



print dirname(__FILE__);   //prints the directory of the file : C:\xampp\htdocs\Api-Proj
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];  //prints the server path: /Api-Proj/load.php
print "<br>";
print "<br>";
print  basename($_SERVER["PHP_SELF"]);  //prints the file name: load.php
print "<br>";
print "<br>";

if (file_exists("fnc.php") AND is_readable("fnc.php")){
    echo "Yes, the file exists and is readable";
}else{
    print "The file does not exist or is not readable";
}