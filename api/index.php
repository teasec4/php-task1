<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

<!-- Получаем из GET запроса переменные a b -->

   <?php 
        $a = htmlspecialchars($_GET['a']);
        $b = htmlspecialchars($_GET['b'])
   ?>

<!-- Контейнер с ответом -->

    <div class="container text-center fs-1 mt-5">
        <p> a=
            <?php
                echo $a;
            ?> 
        </p>
        <p> b=
            <?php
                echo $b;
            ?> 
        </p>
        <p>
            Ответ:
        </p>
        <p>a умножить на b:
            <!-- Получаем произведение a b и проверяем разряд числа -->
            <?php
                // результат произведения
                $answer = $a * $b; 

                // убираем из ответа знак минус 
                $net_minusu = str_replace('-', "", $answer);
                
                // считаем кол-во символов в ответе
                $len = strlen($net_minusu);

                // пример вывода ответа с одинарными кавычкмми
                //echo 'Ответ ' . $len . '!';

                // Проверяем разряд числа и выводим ответ
                if($len == 1){
                    echo "$answer, это однозначное число";
                } elseif ($len == 2) {
                    echo "$answer, это двухзначное число";
                } elseif ($len == 3){
                    echo "$answer, это трехзначное число";
                } else {
                    echo "$answer, это более чем трехзначное число";
                }
                 
            ?>
        </p>
    </div>
   
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>