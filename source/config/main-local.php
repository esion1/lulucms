<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=lulucms2',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
			'tablePrefix' => 'lulu_',
            'enableSchemaCache' => true,
            'schemaCache' => 'schemaCache',
        ],

    ],
];
