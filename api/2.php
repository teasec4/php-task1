<?php 

echo "Welcome to the curl example";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://php-task1.vercel.app/api/1.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
print_r($server_response);
echo "</pre>";

?>





