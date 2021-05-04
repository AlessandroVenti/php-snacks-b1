<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>

     * {
          border: 0;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
     }

     ul {
          background-color: purple;
          list-style-type: none;
          height: 100vh;
          display: flex;
          justify-content: space-around;
          align-content: center;
          flex-wrap: wrap;
     }

     ul li {
          flex-basis: calc(100% / 3 - 20px);
          padding: 40px;
          border-radius: 10px;
          margin: 20px;
          background-color: bisque;
          border: 2px solid red;
          display: flex;
          justify-content: center;
     }

     ul li h1 {
          font-size: 30px;
     }

     </style>

     <title>PHP Snack 1</title>
</head>
<body>

<ul>
     <?php
 
 //PHP SNACK 1:
 //CREIAMO UN ARRAY "MATCHES CONTENENTE ALTRI ARRAY I QUALI RAPPRESNETANO DELLE PARTITE DI BASKET DI UN'IPOTETICA TAPPA DEL CALENDARIO.
 // OGNI ARRAY DELLA PARTITA AVRA UNA SQUADRA DI CASA E UNA SQUADRA OSPITE, PUNTI FATTI DALLA SQUADRA DI CASA E PUNTI FATTI DALLA SQUADRA OSPITE.
 // STAMPIAMO A SCHERMO TUTTE LE PARTITE CON QUESTO SCHEMA:
               //OLIMPIA MILANO - CANTU | 55 - 60

          $mondayNightBasket = [
               [
                    "home" => "Olimpia Milano",
                    "away" => "Cantu",
                    "homeScore" => 55,
                    "awayScore" => 60
               ],

               [
                    "home" => "Reggiana",
                    "away" => "Juvecaserta",
                    "homeScore" => 40,
                    "awayScore" => 60
               ],

               [
                    "home" => "Virtus Bologna",
                    "away" => "Varese",
                    "homeScore" => 55,
                    "awayScore" => 70
               ],

               [
                    "home" => "Fortitudo Bologna",
                    "away" => "Virtus Roma",
                    "homeScore" => 55,
                    "awayScore" => 80
               ],

               [
                    "home" => "Libertas Livorno",
                    "away" =>  "Milano 1958",
                    "homeScore" => 75,
                    "awayScore" => 60
               ]
          ];

          for( $i=0; $i < count($mondayNightBasket); $i++) {
               echo '<li><h1> ' . $mondayNightBasket[$i]["home"] . ' - ' . $mondayNightBasket[$i]['away'] . '   |   ' . $mondayNightBasket[$i]['homeScore'] . ' - ' . $mondayNightBasket[$i]['awayScore'] . '</h1></li>';
          }
     ?>
</ul>

</body>
</html>