<?php
    if(preg_match ('/^[a-ząęłćżźó].{3,}$/i',$_POST['nazw']))
            echo 'nazwisko git <br>';
    else echo 'nazwisko nie git <br>';

    if(preg_match ('/^[a-zA-Z0-9\.\-_]+\@[a-zA-Z0-9\.\-_]+\.[a-z]{2,4}$/D', $_POST['email']))
        echo 'imejl git <br>';
    else echo 'imejl nie git <br>';
    if(preg_match ('/^[1-4]{1}*\[a-z]{1}*\[A-Z]{1,3}$/gm',$_POST['klasa']))
        echo 'klasa git<br>';
        else echo 'klasa nie git <br>';
?>