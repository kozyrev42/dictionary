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
    <h1>Словарь</h1>
    <button><a href="add_word.php">Добавить слово</a></button>
    <button><a href="delete_word.php">Удалить слово</a></button>
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
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>
        
    <h1>Б</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "б"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>В</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "в"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Г</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "г"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Д</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "д"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Е</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "е"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ё</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ё"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ж</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ж"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>З</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "з"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>И</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "и"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Й</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "й"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>К</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "к"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Л</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "л"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>М</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "м"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Н</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "н"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>О</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "о"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>П</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "п"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Р</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "р"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>С</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "с"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Т</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "т"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>У</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "у"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ф</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ф"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Х</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "х"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ц</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ц"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ч</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ч"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ш</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ш"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Щ</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "щ"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Э</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "э"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Ю</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "ю"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

    <h1>Я</h1>
    <?php foreach ($words as $word) :?>
        <?php $text = $word['name'];
              $first_letter = mb_strcut($text, 0, 2, 'UTF-8');?>   
        <?php if ($first_letter == "я"):?> 
            <h4> <ul type="square"><li><?php echo $text ?></li></ul> </h4>
        <?php endif;?>
    <?php endforeach;?>

</body>
</html>