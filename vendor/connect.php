<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'dw');

    if (!$connect) {
        die('Error connect to DataBase');
    }