<?php
if(!$secret) {
  exit;
}

spl_autoload_register('kydClassLoader');

function kydClassLoader($className)
{
    /*
    if(strpos($className, 'MojProjekt') !== 0)
    {
       // Te klase obsluguje jakas inna ladowarka - nie ma prefiksu!
       return false;
    }
    */
    // echo 'Load class ' . $className . "<br/>\n";
    require('./vendor/kandev/' . $className . '.php');


    return true;
} // end of kydClassLoader();
 ?>
