<?php

/* Carga los script necesarios*/
  require 'DataBase/Table.php';
  require 'DataBase/RowTbl.php';
  require 'DataBase/DataBase.php';
  require 'LogMysql/Log.php';
  require 'DataBase/Exception/ExceptionMysql.php';


/*Nota: Quita los comentarios a la funcion "__autoload" si deseas usar los include automaticamente 
y comenta los require anteriores.
(Asegurate de que la carpeta contenedora de la libreria tenga el nombre de "gecobject" y este en la raiz de tu 
proyecto php)
*/
/**
 * La funcion "__autoload" se basa en los 'namespace' e incluye los siguientes archivos automaticamente
 * require 'DataBase/Table.php';
 * require 'DataBase/RowTbl.php';
 * require 'DataBase/DataBase.php';
 * require 'LogMysql/Log.php';
 * require 'DataBase/Exception/ExceptionMysql.php';
 * @param string $classname es igual al namespace o nombre de clase de un archivo
 */
/*
 function __autoload($classname) {
    //example: $classname = "GecObject\DataBase\Table"
    $classname = ltrim($classname, '\\');
    $filename = '';
    $namespace = '';
    if ($lastnspos = strripos($classname, '\\')) {
        $namespace = substr($classname, 0, $lastnspos);
        $classname = substr($classname, $lastnspos + 1);
        $filename = str_replace('\\', '/', $namespace) . '/';
    }
    $filename .= str_replace('_', '/', $classname) . '.php';
    //require'gecobject/database/table.php';
    require $filename;
} 
 */

?>
