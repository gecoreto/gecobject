# GECOBJECT

Geobject es una  librería desarrollada en PHP para facilitar los procesos del CRUD (créate, read, update, delete), permite cargar tablas y filas de bases de datos en  Mysql; Representándolas como objetos de php que ofrecen métodos para trabajar comodamente.

Requerimientos
=========

- Servidor web con soporte php 5.3 o superior y Mysql

## License

This software is licenced under the [ licencia MIT.](http://opensource.org/licenses/MIT). Please read LICENSE for information on the
software availability and distribution.

## Installation & configuración 

Descarga gecObject clonándolo  desde tu pc. Si no estás familiarizado con GIT o simplemente quieres el archivo comprimido has click en “Donwload zip” en la parte derecha de la pantalla.

Luego copia la carpeta gecobject y su contenido en la raíz de tu proyecto php. 
Gecobject provee el archivo  ` autoload.php ` que se encarga de cargar automáticamente los archivos necesarios para el  correcto funcionamiento de la librería. Si usa una versión de php anterior a la 5.3 no funcionara correctamente el autoload ni la librería ya que esta implementa ` namespace ` que están presentes solo a partir de php 5.3 o superior. Sin embargo si llegase a presentar problemas en la carga de archivos y estas utilizando la versión correcta de php revisa los comentarios en el archivo [autoload.php](https://github.com/gecoreto/gecobject/blob/master/autoload.php).

Finalmente un `require '/gecobject/config.php';` para cargar la librería y todo debería funcionar!

### Configuración

Define la configuración para conectarse a la base de datos en el archivo  [config.php](config.php)

```php
<?php

/** Nombre del host en la base de datos 
 * @global string DB_HOST
 */
define("DB_HOST", "localhost");

/** Nombre de la base de datos 
 * @global string DB_NAME
 */
define("DB_NAME", "database_name");

/** Usuario de la base de datos 
 * @global string DB_USER
 */
define("DB_USER", "database_user");

/** Password para acceder a la base de datos 
 * @global string DB_PASSWORD
 */
define("DB_PASSWORD", "database_pass");

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
```

## Guia de uso
- Tan sencillo como:
```php
require 'gecobject/config.php';
```
- Recuperar registros de una tabla:
```php

//Cambia 'tbl' por el nombre  que quieras e instacia la clase Table()
use GecObject\DataBase\Table as tbl;

$tabla = tbl::get('tableName')->findAll();
foreach ($tabla as $row) {
    echo $row->fieldName."<br>";
}
```
- Recuperar registros por su primaryKey:
=========
La función findByPk() puedo retornar uno o varios registros dependiendo si recibe como parámetro un array() o una unica clave primaria:
```php

//Cambia 'tbl' por el nombre  que quieras e instancia la clase Table()
use GecObject\DataBase\Table as tbl;

$tabla = tbl::get('tableName')->findByPk(pk);
foreach ($tabla as $row) {
    echo $row->fieldName."<br>";
}
```

We welcome corrections and new languages.

## Documentation

Generated documentation is [available online](http://phpmailer.github.io/PHPMailer/).

You'll find some basic user-level docs in the [docs](docs/) folder, and you can generate complete API-level documentation using the [generatedocs.sh](docs/generatedocs.sh) shell script in the docs folder, though you'll need to install [PHPDocumentor](http://www.phpdoc.org) first. You may find [the unit tests](test/phpmailerTest.php) a good source of how to do various operations such as encryption.

## Tests

There is a PHPUnit test script in the [test](test/) folder.

Build status: [![Build Status](https://travis-ci.org/PHPMailer/PHPMailer.png)](https://travis-ci.org/PHPMailer/PHPMailer)

If this isn't passing, is there something you can do to help?

## Contributing

Please submit bug reports, suggestions and pull requests to the [GitHub issue tracker](https://github.com/PHPMailer/PHPMailer/issues).

We're particularly interested in fixing edge-cases, expanding test coverage and updating translations.

With the move to the PHPMailer GitHub organisation, you'll need to update any remote URLs referencing the old GitHub location with a command like this from within your clone:

`git remote set-url upstream https://github.com/PHPMailer/PHPMailer.git`

Please *don't* use the SourceForge or Google Code projects any more.

## Changelog

See [changelog](changelog.md).

## History
1. ##PHPMailer was originally written in 2001 by Brent R. Matzelle as a [SourceForge project](http://sourceforge.net/projects/phpmailer/).
- Marcus Bointon (coolbru on SF) and Andy Prevost (codeworxtech) took over the project in 2004.
- Became an Apache incubator project on Google Code in 2010, managed by Jim Jagielski.
- Marcus created his fork on [GitHub](https://github.com/Synchro/PHPMailer).
- Jim and Marcus decide to join forces and use GitHub as the canonical and official repo for PHPMailer.
- PHPMailer moves to the [PHPMailer organisation](https://github.com/PHPMailer) on GitHub.

### What's changed since moving from SourceForge?
- Official successor to the SourceForge and Google Code projects.
- Test suite.
- Continuous integration with Travis-CI.
- Composer support.
- Public development.
- Additional languages and language strings.
- CRAM-MD5 authentication support.
- Preserves full repo history of authors, commits and branches from the original SourceForge project.


