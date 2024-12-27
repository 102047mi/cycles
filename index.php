<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Циклы</title>
    <style>
        .list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .item {
            background-color: green;
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <h1>Циклы</h1>
    <h2>Цикл while</h2>
    <ul class="list">

        <?php
        $i = 0;
        while ($i <= 10) {
            echo $i++;
            echo "<br>";
        }
        ?>
        <?php
        /*
    while (условие) {
        какие-то действия;
    }
        */
        $i = 0;
        while ($i <= 10) : ?>
            <li class="item">
                <?php $i++ ?>
            </li>
        <?php endwhile; ?>
    </ul>


    <?php
    $arr = [];
    $x = 345;
    while ($x <= 357) {
        $x++;
        if ($x % 2 == 0) {
            $arr[] = $x;
        }
    }
    foreach ($arr as $key => $value) {
        echo ++$key . "  элемент = $value <br>";
    }
    echo "<br>";
    ?>

    <?php
    $i = 0;
    do {
        echo $i -= 2;
        echo "<br>";
    } while ($i > 0)
    ?>

    <h2>Цикл for</h2>
    <!-- for(exp1; exp2; exp3){
        Тело цикла
    } -->
    <!-- exp1 - определение переменной. выполняется только 1 раз пере началом цикла
    exp2 - условие. если результат ИСТИНА то цикл выполняется, иначе - завершается
    exp3 - действие которое будет будет выполняться в уонце каждого цикла(инатерации) -->
    <?php
    for ($i = 0; $i < 100; $i++) {
        echo $i . "";
    }
    ?>


    <?php
    for ($i = 0; $i < 2; $i++) {
        echo $i . "";
    }
    ?>
</body>


</html>