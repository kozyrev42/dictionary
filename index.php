<?php
require_once('functions.php');

// получение всех слов из базы
$words = get_all_words();
//var_dump($words);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Словарь</title>
</head>
<body>
    <button><a href="add_word.php">Добавить слово</a></button>
    <h1>А</h1>
    <!-- циклом проходим по каждой записи -->
    <?php foreach ($words as $word) :?>
        <?php 
            /* получаем слово */
            $text = $word['name'];
            /* получаеам первую букву */
            $first_letter = mb_strcut($text, 0, 2, 'UTF-8');
        ?>   
        <!-- если перевая буква соответствует условию, выводим слово -->
        <?php if ($first_letter == "а"):?> 
            <h5> <?php echo $text ?> </h5>
        <?php endif;?>
    <?php endforeach;?>
        
    <h1>Б</h1>
    <?php foreach ($words as $word) :?>
        <?php 
            $text = $word['name'];
            $first_letter = mb_strcut($text, 0, 2, 'UTF-8');
        ?>   
        <?php if ($first_letter == "б"):?> 
            <h5> <?php echo $text ?> </h5>
        <?php endif;?>
    <?php endforeach;?>

    <h1>В</h1>
    <?php foreach ($words as $word) :?>
        <?php 
            $text = $word['name'];
            $first_letter = mb_strcut($text, 0, 2, 'UTF-8');
        ?>   
        <?php if ($first_letter == "в"):?> 
            <h5> <?php echo $text ?> </h5>
        <?php endif;?>
    <?php endforeach;?>


</body>
</html>