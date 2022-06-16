<?php 

echo "2.php <br>";
$a = ($_GET['a']);
$b = ($_GET['b']);
$c = ($_GET['c']);


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "https://php-task1.vercel.app/api/2.php");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $server_response = curl_exec($ch);
// curl_close($ch);
// echo "<pre>";
// print_r($server_response);
// echo "</pre>";

echo $a * $b + $c ;

?>





