<?php $db= mysqli_connect('localhost','root','','post'); ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_glow.css">
</head>
<body>
<h1 class="user"> ACCES GRANTED type something near </h1>
 <form method="post">
     <input type="text" name="title"><br>
     <input type="text" name="description"> <br>
     <input type="submit" value="add post">
 </form> <br>
<?php
    $title= $_POST['title'];
    $description= $_POST['description'];
    $query=" INSERT INTO `post` VALUES ('','$title', '$description')";

    //making post in DB
    $insert_db= mysqli_query( $db, $query);
?>
<div class="shirt">
<?php
    $query2="SELECT * FROM post";
    $open_post= mysqli_query($db, $query2);

    // MAKING POST !!!
    $post= mysqli_fetch_array($open_post);


?>
</div>
</body>
</html>
