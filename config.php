<?php

/**
 * Carga los script necesarios y define las constantes para hacer la conexion en la baes de datos
 * @package Gecobject
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 * @link 
 * @author David Garzon <stylegeco@gmail.com>
 */
//
//  Incluye los archivos de las clases necesarios automaticamente 
require 'autoload.php';

header('Content-Type: text/html; charset=UTF-8');

/** Nombre del host en la base de datos 
 * @global string DB_HOST
 */
define("DB_HOST", "localhost");

/** Nombre de la base de datos 
 * @global string DB_NAME
 */
define("DB_NAME", "gecobject");

/** Usuario de la base de datos 
 * @global string DB_USER
 */
define("DB_USER", "root");

/** Password para acceder a la base de datos 
 * @global string DB_PASSWORD
 */
define("DB_PASSWORD", "");

/**Si es true Imprime el registro de mensajes
 * @global boolean LOG
 */
define("LOG", true);

/** Si es true guarda las excepsiones generadas en consultas
 *  mysql en un archivo de texto ubicado en LogMysql/error-mysql.txt
 * 
 * @global boolean ERROR_EXCEPTION
 */
define("ERROR_EXCEPTION", false);
?>
