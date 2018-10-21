<html>
    <head> 
        <meta charset=utf-8>
        <style>
            body{
                background-color: #dce6f7;
            }
            input{
                width:200px;
                height:22px;
                font-size:17px;
               margin-top: 5px;
            }
            input.duzyin{
                 width:200px;
                height:24px;
                font-size:17px;
                 margin-top: 5px;
               
            }
            div{
                background-color: #f2f5f9;
                padding: 12px;
                border: 3px solid #bccce5;
                border-radius: 7px;
                position: relative;
                left: 15%;
                max-width: 450px;
            }
            .snieg{
                position: fixed;
                left: 3%;
                top: 12px;
                width: 120px;
                height: 120px;

                transition:  top 5s ease;
            } .snieg:hover{top: 340px}
        </style>
    </head>
<body>
   
    <div>
    
    <form method="get" action="rachunek.php">
       Imię <input type="text" name="im"><br>
        Nazwisko <input type="text" name="naz"><br>
        Numer Telefonu<input type="text" name="tel" maxlength="9"><br>
        Miasto<select name="miast">
            <option value="1">Luzino</option>
            <option value="2">Gościcino</option>
            <option value="3">Bolszewo</option>
            <option value="4">Wejherowo</option>
            <option value="5">Wejherowo-Śmiechowo</option>
            <option value="6">Reda</option>
            <option value="7">Rumia</option>
        </select><br>
          Ulica Zamieszkania <input type="text" name="ulica"><br>
        liczba dzieci <select name="ld">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">więcej</option>
            </select>
        <input type="submit" href="">
    </form>
        </div>
    <img src="snieg.png" class="snieg">
    </body>
</html>

