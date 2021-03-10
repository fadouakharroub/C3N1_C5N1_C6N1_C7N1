<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
<input type="datetime-local" id="meeting-time"
       name="date">
<button type="submit">submit</button>
</form>

</body>
</html>

<?php
       

$date = strtotime($_POST["date"]); 
echo date('Y/m/d h:i', $date);



function nombrepremier( $nombre ){


    for ($i = 2; $i < $nombre; $i++){
        if ($nombre % $i == 0){
            $fois = 1;
        }
    }

    if (isset($fois)) {
        echo "$nombre n'est pas un nombre premier";
    }
    else{
        echo "$nombre est un nombre premier";
    }

}

nombrepremier(7901);
echo "<br/>";
nombrepremier(10);

function carre($n){
    return $n*$n;
}
echo carre(20);
echo "<br>";
function logarithme($a){
     return log($a);
}
echo logarithme(10);
echo "<br>";
function racin_carre($r){
    return sqrt($r);

}
echo racin_carre(36);


function verification_date($date) {
    echo substr($date, 0,10) ;
    echo "<br>";
    echo substr($date, 11) ;
}
if(!empty($_POST)) {
$date=$_POST["date"];
verification_date($date);
}

function boîtedalerte ($a){
    echo "<script>alert('hello $a')</script>";
   }
   boîtedalerte("samira");


   
