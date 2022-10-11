<?php
require_once('functions.php');

// получаем слово из формы
$word = $_POST['word'];

// добавляем слово в базу
$pdo = new PDO("mysql:host=127.0.0.1;dbname=dictionary;charset=utf8", "root", "");
// запрос
$query = "INSERT INTO `keyword` (name) VALUES (:name)";
// нужно подготовить запрос, для безопасной отправки в бд
$statement = $pdo->prepare($query);
// в запросе, на метки передаём переменные, и выполняем его
$statement->execute(['name' => $word]);


// перенаправление на главную
header('Location: /');
exit;