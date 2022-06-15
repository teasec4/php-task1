<?php 
$a =  htmlspecialchars($_POST['a']);
$b =  htmlspecialchars($_POST['b']);
$c =  htmlspecialchars($_GET['c']);
$answer = $a * $b + $c;
$_GET = $answer;
?>


<?php echo 'a = ' . $a; ?><br>
<?php echo 'b = ' . $b; ?><br>
<?php echo 'c = ' . $c; ?><br>
<?php echo 'a * b + c = ' . $answer; ?>



