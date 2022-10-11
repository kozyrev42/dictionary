<?php
// получаю id удаляемой записи
$id_word = $_GET['id'];

// удаляем запись в таблице
$pdo = new PDO("mysql:host=127.0.0.1;dbname=dictionary;charset=utf8", "root", "");
$query = "DELETE FROM `keyword` WHERE id=:id";
$statement = $pdo->prepare($query);
$statement->execute(['id' => $id_word]);

// перенаправление на главную
header('Location: /');
exit;