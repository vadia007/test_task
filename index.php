<?php
header('Content-type: text/html; charset=utf-8');
require_once('connect.php');
require_once('get_table.php');

//table articles
$sql = "SELECT * FROM articles";
$sql_result = mysql_query($sql);
echo "<h3>Таблиця матеріалів</h3><br>";
echo getTable($sql_result);

//table users
$sql = "SELECT * FROM users";
$sql_result = mysql_query($sql);
echo "<h3>Таблиця користувачів</h3><br>";
echo getTable($sql_result);
echo "<hr><br>";

require_once('form.tpl.php');
