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

<!-- Выводим произведение a b -->

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
            <b><?php
                echo $a + $b;
                
            ?></b>

        </p>
    </div>
   
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>