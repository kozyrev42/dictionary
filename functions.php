<meta charset="utf-8">
<?php

// получение всех слов
function get_all_words()
{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=dictionary;charset=utf8", "root", "");
    $query = 'SELECT * FROM `keyword`';
    $statement = $pdo->query($query);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}