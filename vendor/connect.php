<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'mybase');

    if (!$connect) {
        die('Error connect to DataBase');
    }