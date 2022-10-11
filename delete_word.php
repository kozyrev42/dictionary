<?php
require_once('functions.php');

// получение всех слов из базы
$words = get_all_words();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Словарь</title>
</head>
<body>
    <h1>Кликните на слово для удаления из славоря</h1>
    <button><a href="/">Вернуться обратно</a></button>
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
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>
        
    <h1>Б</h1>
    <?php foreach ($words as $word) :?>
        <?php 
            $text = $word['name'];
            $first_letter = mb_strcut($text, 0, 2, 'UTF-8');
        ?>   
        <?php if ($first_letter == "б"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>В</h1>
    <?php foreach ($words as $word) :?>
        <?php 
            $text = $word['name'];
            $first_letter = mb_strcut($text, 0, 2, 'UTF-8');
        ?>   
        <?php if ($first_letter == "в"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>


</body>
</html>