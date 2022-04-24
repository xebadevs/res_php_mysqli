<?php

const DB_HOSTNAME = '127.0.0.1';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_DATABASE_NAME = 'comercioit';
const DB_CHARSET = 'UTF8';

$link = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
mysqli_set_charset($link, DB_CHARSET);

$sql = 'SELECT * FROM productos';
$rs = mysqli_query($link, $sql);
mysqli_close($link);

$producto = mysqli_fetch_assoc($rs);
print_r($producto);

echo '<hr>';
$producto = mysqli_fetch_assoc($rs);
print_r($producto);