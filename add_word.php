<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>
</head>
<body>
    <h1>Старница добавления слов</h1>
    <button><a href="/">Вернуться обратно</a></button>
    <br/>
    <br/>
    <form action="add_word_handler.php" method="POST">
        <div>
            <input type="text" name="word" placeholder="ввод в нижнем регистре">
            <button type="submit">Добавить в словарь</button>
        </div>
    </form>
</body>
</html>