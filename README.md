yii2-sypexdumper
================
Sypex Dumper [saipeks d۸mper] is a software product (PHP-script), which can help you create a backup (dump) of a MySQL database, and also restore the database from the backup if needed.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist beaten-sect0r/yii2-sypexdumper "*"
```

or add

```
"beaten-sect0r/yii2-sypexdumper": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \beaten-sect0r\sypexdumper\SypexDumper::widget(); ?>
```
