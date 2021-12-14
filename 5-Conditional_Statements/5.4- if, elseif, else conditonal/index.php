<!DOCTYPE html>
<html>
<body>
    
<?php 

$prod_besteld = 15;

if($prod_besteld < 10) {
    echo $prijs = 1.50 . "<br>";
} elseif($prod_besteld < 20) {
    echo $prijs = 1.25 . "<br>";
} else {
    echo $prijs = 1.00 . "<br>";
}

$prod2_besteld = 22;

if($prod2_besteld < 10) {
    echo $prijs = 1.50 . "<br>";
} elseif($prod2_besteld < 20) {
    echo $prijs = 1.25 . "<br>";
} else {
    echo $prijs = 1.00 . "<br>";
}

$prod3_besteld = 9;

if($prod3_besteld < 10) {
    echo $prijs = 1.50 . "<br>";
} elseif($prod3_besteld < 20) {
    echo $prijs = 1.25 . "<br>";
} else {
    echo $prijs = 1.00 . "<br>";
}


?>

</body>
</html>