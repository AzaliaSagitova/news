<?php
$link = mysqli_connect('127.0.0.1:3366','root','','test');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=127.0.0.1:3366;dbname=test',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
