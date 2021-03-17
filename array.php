<?php
//array
$fruits =array("Banana","orange","water melon","mango");
rsort($fruits);
$numbers =array(25,45,85,4,10);
$lenghtarr = count($fruits);

//echo "i like " .$fruits[2];
//echo "<br>";
//echo count($numbers);
//echo "<br>";

//indexed arrays
for ($x=0;$x< $lenghtarr;$x++) {
    echo $fruits[$x];
    echo "<br>";
}
?>

