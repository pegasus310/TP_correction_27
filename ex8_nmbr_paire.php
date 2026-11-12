<h4> un script affiche tous les nombres pairs entre 1 et 50 :</h4>
<hr>
<?php
$j=0;
echo "<ul>";
for($i=1;$i<=50;$i++){
    if($i%2== 0){
        $j++;
        echo "  |   ".$i."    ";
        if($j==5){
             echo "<br><br>";
             $j=0;
        }
    }
}
echo "</ul>";
?>