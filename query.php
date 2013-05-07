<?php
require_once('get_table.php');

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $val = $_POST["select"];

    switch($val){
        case 1: $sql = "SELECT * FROM articles";
            break;
        case 2: $sql = "SELECT * FROM articles WHERE status='1'";
            break;
        case 3: $sql = "SELECT * FROM articles WHERE title LIKE 'w%'";
            break;
        case 4: $sql = "SELECT * FROM articles WHERE published_date>'2013-04-20'";
            break;
        case 5: $sql = "SELECT count(id) FROM articles";
            break;
        case 6: $sql = "SELECT * FROM articles WHERE text LIKE '%sensation%'";
            break;
        case 7: $sql = "SELECT * FROM articles ORDER BY title";
            break;
        case 8: $sql = "SELECT * FROM articles WHERE published_date BETWEEN '2013-01-26' AND '2013-04-15'";
            break;
        case 9: $sql = "SELECT a.id, a.title, a.text, u.user_id, u.first_name, u.age
         FROM articles a JOIN users u ON a.user_id=u.user_id where age>25";
            break;
        case 10: $sql = "SELECT MAx(age) FROM users";
            break;
        case 11: $sql = "SELECT a.id, a.title, a.text, u.user_id, u.first_name, u.age
         FROM articles a JOIN users u ON a.user_id=u.user_id where u.first_name='john'";
            break;
        case 12: $sql = "SELECT * FROM articles ORDER BY published_date DESC LIMIT 3";
            break;
        case 13: $sql = "SELECT a.id, a.title, a.text, u.user_id, u.first_name, u.age
         FROM articles a JOIN users u ON a.user_id=u.user_id where (u.first_name='frank' or u.first_name='jason') and (u.first_name<>'peter')";
            break;
        case 14: $sql = "SELECT a.id, a.title, a.text, u.user_id, u.first_name, u.age
         FROM articles a JOIN users u ON a.user_id=u.user_id where (a.text LIKE '%product%') and (u.age>30)";
            break;

    }
    $sql_result = mysql_query($sql);
    echo "<h3>Результат:</h3><br>";
    echo getTable($sql_result);
}

