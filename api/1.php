
<?php 
    // Получаем перменные через GET
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = $c <br>";

    // собираем данные в массив
    $array = array(
        'a' => $a,
        'b' => $b,
    );

    // делаем ссылку для отправки данных
    $link = http_build_query($array,'', '&');

    // инициализация curl
    $ch = curl_init();

    // ссылка куда будем обращаться
    curl_setopt($ch, CURLOPT_URL, "https://php-task1.vercel.app/api/2.php?c=$c");

    // метод POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // получение ответа true
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // строка с передаваемыми данными
    curl_setopt($ch, CURLOPT_POSTFIELDS, $link);

    // получение ответа
    $out = curl_exec($ch);
    echo "Ответ: $out";

    // закрытие curl
    curl_close($ch);

?>


