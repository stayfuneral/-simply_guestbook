<?php

$connection = mysqli_connect('localhost', 'root', '', 'tst');

if(!$connection) {
    die('Ошибка соединения с базой данных: ' . mysqli_connect_error());
}

?>