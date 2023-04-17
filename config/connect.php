<?php
    $connect = mysqli_connect('localhost','root','','Data Base');
    if(!$connect) {
        die('Ошибка подключения к БД');
    }
?>