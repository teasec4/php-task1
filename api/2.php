<?php 

echo "2.php <br>";
$a = ($_POST['a']);
$b = ($_POST['b']);
$c = ($_POST['c']);

$answer = $a * $b + $c;

echo $answer;

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://php-task1.vercel.app/api/2.php");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $server_response = curl_exec($ch);
// curl_close($ch);




?>





