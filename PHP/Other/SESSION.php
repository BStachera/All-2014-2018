<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesja coockie</title>
    <?php
        session_start();
        $_SESSION['cos'] = 'stachera';
    ?>
</head>
<body>
<?php
    print 'Hello '.$_SESSION['cos'].'<br>';
    $_SESSION['cos'] = 'Bartłomiej';
    print 'Hello '.$_SESSION['cos'].'<br>';
    session_destroy();
    unset($_SESSION['cos']);
    print 'Hello '.$_SESSION['cos'].'<br>';

?>
</body>
</html>