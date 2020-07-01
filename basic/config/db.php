<?php

return [
    'class' => '\sfedosimov\oci8pdo\Oci8PDO_Connection',
    'dsn' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=migdb.mcx.nl)
                                                 (PORT=1523))(CONNECT_DATA=(SERVICE_NAME=migd)));charset=AL32UTF8;',
    'emulatePrepare' => true,
    'username' => 'mcx',
    'password' => 'MCXL1nk',
    // Schema cache for faster pageloading. Duration is 1 week
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60*60*24*7*30,
    'schemaCache' => 'cache',
    // Get accurate date and times
    'on afterOpen' => function($event) {
	$event->sender->createCommand("alter session set nls_date_format='dd-mm-yyyy hh24:mi:ss'")->execute();
	$event->sender->createCommand("alter session set nls_sort=binary_ci")->execute();
	$event->sender->createCommand("alter session set nls_comp=linguistic")->execute();
    }
];

/*
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
*/
