<?php

    require_once '/home/vagrant/Code/guestbook/vendor/autoload.php';

    echo "Hello World";

    $database = new medoo([
        'database_type' => 'sqlite',
        'database_file' => '../storage/database.db'
    ]);

    $array = ['1' => 'Hello', '2' => 'World'];

    var_dump($array);

    dump($array);

    echo $array[1] . $array[2];

    echo "Test";