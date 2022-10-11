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

    <h1>Г</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "г"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Д</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "д"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Е</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "е"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ё</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ё"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ж</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ж"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>З</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "з"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>И</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "и"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Й</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "й"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>К</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "к"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Л</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "л"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>М</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "м"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Н</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "н"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>О</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "о"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>П</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "п"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Р</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "р"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>С</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "с"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Т</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "т"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>У</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "у"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ф</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ф"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Х</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "х"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ц</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ц"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ч</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ч"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ш</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ш"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Щ</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "щ"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Э</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "э"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ю</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ю"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Я</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "я"):?> 
            <a href="delete_handler.php?id=<?php echo $word['id'] ?>"> <?php echo $text ?> </a> <br/>
        <?php endif;?>
    <?php endforeach;?>

</body>
</html>