<?php
    return [
        'dbname' => 'Bookeo',
        'dbuser' => 'antoine',
        'dbpassword' => 'password',
        'dbport' => '3306',
        'dbhost' => 'db'
    ];

// const DBHOST = 'db';
// const DBUSER = 'antoine';
// const DBPASS = 'password';
// const DBNAME = 'Bookeo';

// $dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

// try {
//     $db = new PDO($dsn, DBUSER, DBPASS);

//     echo 'Connecté';
// } catch (PDOException $exception) {
//     echo 'Une erreur est survenue : ' . $exception->getMessage();
//     die;
// }