<!DOCTYPE html>
<html>
<body>

<?php 

function mijnNaamIsGroot(){
    $voorNaam = "Recep";
    $achterNaam = "Yildiz";
    
    $geheleNaam = $voorNaam . " " . $achterNaam;
    $geheleNaam = strtoupper("Mijn naam is $geheleNaam");
    echo $geheleNaam;
}
mijnNaamIsGroot();

?>
    
</body>
</html>