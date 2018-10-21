<body>
<h1> Przesłano pomyślnie do Folderu z Grzecznymi dziećmi,<br> mikołaj się z panią/panem skontaktuje</h1>
</body>
<?php
$imie=$_GET['im'];
$nazwi=$_GET['naz'];
$nrtel=$_GET['tel'];
$miast=$_GET['miast'];
$ulzam=$_GET['ulica'];
$iledzieci=$_GET['ld'];
$zap=1;
$cena=file('cenniksanta.txt');
$luzi=$cena[1];
$gosc=$cena[3];
$bols=$cena[5];
$wejh=$cena[7];
$wejhs=$cena[9];
$reda=$cena[3];
$rumia=$cena[1];
    if($miast==1){
        $zap=$luzi;
    }else if($miast==2){
        $zap=$gosc;
    }else if($miast==3){
        $zap=$bols;
    }else if($miast==4){
        $zap=$wejh;
    }else if($miast==5){
        $zap=$wejhs;
    }else if($miast==6){
        $zap=$reda;
    }else if($miast==7){
        $zap=$rumia;
    }
 $rachunek=fopen('Santa.txt','a');
 fputs($rachunek, 'Imię : '.$imie.'   nazwisko :'.$nazwi."\r\n");
 fputs($rachunek, 'nr.telefonu :  '.$nrtel."\r\n");
 fputs($rachunek, 'Miasto:  '.$miast.'  Cena w mieście:  '.$zap."\r\n");
 fputs($rachunek, 'Ulica zamieszkania'.$ulzam."\r\n");
 fputs($rachunek, 'Liczba dzieci'.$iledzieci."\r\n");
fputs($rachunek, 'Data zamówienie::'.date('r')."\r\n");
fputs($rachunek, '-------Dziękujemy za zamówienie ------'."\r\n");
fputs($rachunek, '--------------------------------------'."\r\n");
fputs($rachunek, '--------------------------------------'."\r\n");
fclose($rachunek);
?>