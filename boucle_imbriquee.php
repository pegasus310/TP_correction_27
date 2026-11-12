<?php
echo "<ul>";
for($i=0;$i<6;$i++){
    for($j=0;$j<$i+1;$j++){
        echo " * ";
    }
    echo "<br>";
}
echo "</ul>";
?>
<?php 
echo "\n L'inverse : <br> ";
echo "<ul>";
for($i=6;$i>0;$i--){
    for($j=0;$j<=$i-1;$j++){
        echo " * ";
    }
    echo "<br>";
}
echo "</ul>";
?>
<?php
echo " Afficher un triangle centré : <br> ";
echo "<ul>";
echo "<pre>";
$espace="  ";
$n=6;
for($i=1;$i<=$n;$i++){
    echo str_repeat(" ", $n - $i);
    echo str_repeat("*", 2*$i-1);
    echo "<br>";
}
echo "</pre>";
echo "</ul>";
?>