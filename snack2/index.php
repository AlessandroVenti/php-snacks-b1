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

     div {
          height: 100vh;
          display:flex;
          align-items: center;
          justify-content: center;
     }

     .blue {
          background-color: azure;
          border: 4px solid green;
     }

     .black {
          background-color: black;
          border: 4px solid red;
     }

    @keyframes pulseTrue {

         0% {
              font-size: 60px;
         }

         50% {
              font-size: 70px;
         }

         100% {
              font-size: 60px;
         }
         
    } 

     .true {
          font-size: 60px;
          color: green;
          animation: pulseTrue 1s infinite;
     }

     @keyframes pulseFalse {

          0% {
               font-size: 60px;
          }

          50% {
               font-size: 50px;
          }

          100% {
               font-size: 60px;
          }

     } 

     .false {
          font-size: 60px;
          color: red;
          animation: pulseFalse 1s infinite;
     }

     

     </style>

     <title>PHP Snack 2</title>
</head>
<body>

<?php
 
     //Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
     // che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato".

     $name = $_GET['name'];
     $mail = $_GET['mail'];
     $age = $_GET['age'];
     $dot = '.';
     $at = '@';
     $check1 = strpos($mail, $dot);
     $check2 = strpos($mail, $at);

     if (strlen($name) > 3 && $check1 !== false && $check2 !== false && is_numeric($age) ) {

          echo '<div class="blue"><h1 class="true"> Accesso riuscito </h1></div>';

     } else {
          
          echo '<div class="black"><h1 class="false"> Accesso negato </h1></div>';
     };

?>

</body>
</html>