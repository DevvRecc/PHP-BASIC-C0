<!DOCTYPE html>
<html>
<body>

<?php 

$woordje = "Hallo";
$zinnetje = "mooie blauwe planeet";
function zetTweeWoordenAanElkaar($woordje , $zinnetje){
    $heleZin = $woordje . " " . $zinnetje;
    echo $heleZin;
}

zetTweeWoordenAanElkaar($woordje , $zinnetje);

?>
    
</body>
</html>