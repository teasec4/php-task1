
<?php 
    echo "1.php <br>";
    $a = ($_GET['a']);
    $b = ($_GET['b']);
    $c = ($_GET['c']);
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = $c <br>";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://php-task1.vercel.app/api/2.php?a=$a&b=$b&c=$c");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_response = curl_exec($ch);

    curl_close($ch);


?>


