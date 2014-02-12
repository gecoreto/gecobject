<?php
/*La funcion "__autoload" carga los siguientes archivos automaticamente basadonse en los namespace de cada clase
 * 
require 'DataBase/Table.php';
require 'DataBase/RowTbl.php';
require 'DataBase/DataBase.php';
require 'LogMysql/Log.php';
require 'DataBase/Exception/ExceptionMysql.php';
*/
function __autoload($classname) {
    $classname = ltrim($classname, '\\');
    $filename = '';
    $namespace = '';
    if ($lastnspos = strripos($classname, '\\')) {
        $namespace = substr($classname, 0, $lastnspos);
        $classname = substr($classname, $lastnspos + 1);
        $filename = str_replace('\\', '/', $namespace) . '/';
    }
    $filename .= str_replace('_', '/', $classname) . '.php';    
    require $filename;
}

?>
