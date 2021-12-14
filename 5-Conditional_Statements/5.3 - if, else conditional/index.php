<!DOCTYPE html>
<html>
<body>
    
<?php 

$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "Gelijk" . "<br>";
}
else {
    echo "Niet gelijk" . "<br>";
}


if($test1 === $test2) {
    echo "gelijk identiek" . "<br>";
}
else {
    echo "ongelijk indentiek" . "<br>";
}


if($test1 > $test2) {
    echo "test1 is groter dan test2" . "<br>";
}    
else {
    echo "test1 is niet groter dan test2" . "<br>";
}


if($test1 < $test2) {
    echo "test1 is kleiner dan test2" . "<br>";
}
else{
    echo "test1 is niet kleiner dan test2" . "<br>";
}


if($test1 >= $test2) {
    echo "test1 is groter of geljk aan test2" . "<br>";
}
else{
    echo "test1 is niet groter of gelijk aan test2" . "<br>";
}


if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2" . "<br>";
}
else{
    echo "test1 is niet kleiner of gelijk aan test2" . "<br>";
}

?>

</body>
</html>