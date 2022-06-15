<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $a = ($_GET['a']);
    $b = ($_GET['b']);
    $c = ($_GET['c']);
?>

<form method="POST" action="2.php">
    <p>
        a: <input type="text" name='a' value="<?php echo $a ?>"/>
    </p>
    <p>
        b: <input type="text" name='b' value="<?php echo $b ?>"/>
    </p>
    <p>
        c: <input type="text" name='c' value="<?php echo $c ?>"/>
    </p>
    
    <p>
        <input type="submit" value="ok"/>
    </p>
</form>

</body>
</html>

