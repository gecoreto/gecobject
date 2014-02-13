 GECOBJECT
 =========

Geobject es una  librería desarrollada en PHP para facilitar los procesos del CRUD (créate, read, update, delete), permite cargar tablas y filas de bases de datos en  Mysql; Representándolas como objetos de php que ofrecen métodos para trabajar comodamente.

Requerimientos
=========

- Servidor web con soporte php 5.3 o superior y Mysql

## License

This software is licenced under the [ licencia MIT.](http://opensource.org/licenses/MIT). Please read LICENSE for information on the
software availability and distribution.

## Installation & loading

Descarga gecObject clonándolo  desde tu pc. Si no estás familiarizado con GIT o simplemente quieres el archivo comprimido has click en “Donwload zip” en la parte derecha de la pantalla.

Luego copia la carpeta gecobject y su contenido en la raíz de tu proyecto php. 
Gecobject provee el archivo “autoload.php” que se encarga de cargar automáticamente los archivos necesarios para el  correcto funcionamiento de la librería. Si usa una versión de php anterior a la 5.3 no funcionara correctamente el autoload ni la librería ya que esta implementa ` namespace ` que están presentes solo a partir de php 5.3 o superior. Sin embargo si llegase a presentar problemas en la carga de archivos y estas utilizando la versión correcta de php revisa los comentarios en el archivo [autoload.php](https://github.com/gecoreto/gecobject/blob/master/autoload.php).

PHPMailer is available via [Composer/Packagist](https://packagist.org/packages/phpmailer/phpmailer). Alternatively, just copy the contents of the PHPMailer folder into somewhere that's in your PHP `include_path` setting. If you don't speak git or just want a tarball, click the 'zip' button at the top of the page in GitHub.

PHPMailer provides an SPL-compatible autoloader, and that is the preferred way of loading the library - just `require '/path/to/PHPMailerAutoload.php';` and everything should work. The autoloader does not throw errors if it can't find classes so it prepends itself to the SPL list, allowing your own (or your framework's) autoloader to catch errors. SPL autoloading was introduced in PHP 5.1.0, so if you are using a version older than that you will need to require/include each class manually.
PHPMailer does *not* declare a namespace because namespaces were only introduced in PHP 5.3.

### Minimal installation

While installing the entire package manually or with composer is simple, convenient and reliable, you may want to include only vital files in your project. At the very least you will need [class.phpmailer.php](class.phpmailer.php). If you're using SMTP, you'll need [class.smtp.php](class.smtp.php), and if you're using POP-before SMTP, you'll need [class.pop3.php](class.pop3.php). For all of these, we recommend you use [the autoloader](PHPMailerAutoload.php) too. You can skip the [language](language/) folder if you're not showing errors to users and can make do with English-only errors. You may need the additional classes in the [extras](extras/) folder if you are using those features, including NTLM authentication, advanced HTML-to-text conversion and ics generation.

## A Simple Example

```php
<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jswan';                            // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
```

You'll find plenty more to play with in the [examples](examples/) folder.

That's it. You should now be ready to use PHPMailer!

## Localization
PHPMailer defaults to English, but in the [language](language/) folder you'll find numerous (31 at the time of writing) translations for PHPMailer error messages that you may encounter. Their filenames contain [ISO 639-1](http://en.wikipedia.org/wiki/ISO_639-1) language code for the translations, for example `fr` for French. To specify a language, you need to tell PHPMailer which one to use, like this:

```php
// To load the French version
$mail->setLanguage('fr', '/optional/path/to/language/directory/');
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
- PHPMailer was originally written in 2001 by Brent R. Matzelle as a [SourceForge project](http://sourceforge.net/projects/phpmailer/).
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


