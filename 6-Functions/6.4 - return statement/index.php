<!DOCTYPE html>
<html>
<body>

<?php 

function geefTienProcent(){
    $koopPrijs = 75;
    $korting = 10;
    $kortingEu = ($koopPrijs / 100) * $korting;

    return $koopPrijs - $kortingEu;
}


echo "Het totaal bedrag is: ";
echo geefTienProcent();

?>
    
</body>
</html>