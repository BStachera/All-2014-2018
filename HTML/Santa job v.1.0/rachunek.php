<body>
<h1> Przesłano pomyślnie do Folderu z Grzecznymi dziećmi,<br> mikołaj się z panią/panem skontaktuje</h1>
</body>
<?php
date_default_timezone_set('UTC+01:00');

$imie=$_GET['im'];
$nazwi=$_GET['naz'];
$nrtel=$_GET['tel'];
$miast=$_GET['miast'];
$ulzam=$_GET['ulica'];
$iledzieci=$_GET['ld'];
$zap=1;
$cena=file('cenniksanta.txt');
$luzi=$cena[2];
$gosc=$cena[5];
$bols=$cena[7];
$wejh=$cena[9];
$reda=$cena[5];
$rumia=$cena[2];
    if($miast==1){
        $zap=$luzi;
        $miasto=$cena[0];
        
    }else if($miast==2){
        $zap=$gosc;
        $miasto=$cena[3]; 
        
    }else if($miast==3){
        $zap=$bols;
        $miasto=$cena[6];
        
    }else if($miast==4){
        $zap=$wejh;
        $miasto=$cena[8];
        
    }else if($miast==6){
        $zap=$reda;
        $miasto=$cena[4];
        
    }else if($miast==7){
        $zap=$rumia;
        $miasto=$cena[1];
    }
 $rachunek=fopen('Santa.txt','a');
fputs($rachunek, '---------------Dziękujemy za zamówienie ------------------ \n '."\r\n");
 fputs($rachunek, 'Imię : '.$imie.'   nazwisko :'.$nazwi. "\r\n");
 fputs($rachunek, 'nr.telefonu :  '.$nrtel."\r\n");
 fputs($rachunek, 'Miasto:  '.$miast.'  Cena w mieście:  '.$zap. "\r\n");
 fputs($rachunek, 'Ulica zamieszkania'.$ulzam."\r\n");
 fputs($rachunek, 'Liczba dzieci'.$iledzieci."\r\n");
fputs($rachunek, 'Data zamówienie : '.date('l jS \of F Y h:i:s A'). "\r\n");
fputs($rachunek, '-----------------------------------------------------------'. "\r\n");
fclose($rachunek);
?>