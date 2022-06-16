
<?php 
    // Получаем перменные через GET
    $a = ($_GET['a']);
    $b = ($_GET['b']);
    $c = ($_GET['c']);
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = $c <br>";

    // собираем данные
    $array = array(
        'a' => $a,
        'b' => $b,
        'c' => $c
    );

    // делаем ссыоку для отправки данных
    $link = http_build_query($array,'', '&');


    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://php-task1.vercel.app/api/2.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $link);
    $out = curl_exec($ch);
    echo $out;
    curl_close($ch);

?>


