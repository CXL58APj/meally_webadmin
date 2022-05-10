<?php
$randomstring = bin2hex(random_bytes(64));
$randomnum = rand(1111, 9999);
$milliseconds = floor(microtime(true) * 1000);
$a = '+'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p>random string: <?= $randomstring; ?></p>
    <p>random num: <?= $randomnum; ?></p>
    <p>miliseconds: <?= $milliseconds; ?></p>
    <p>miliseconds: <?= $a; ?></p>
    <input type="text" name="" id="" value="<?= $a; ?>">
</head>

<body>

</body>

</html>