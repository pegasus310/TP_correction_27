<h4> La somme des nombres de 1 a 100 avec une boucle while : </h4>
<hr>
<?php
$i=1;
$somme=0;
while($i<=100){
    $somme+=$i;
    $i++;
}
echo " la somme des nombre de 1 a 100 :   $somme   .<br><br>";
$somme_paire=0;
$somme_impaire=0;
$nombre_multiple3=0;
$i=1;
while($i<=100){
    if($i%2==0){
        $somme_paire+=$i;
    }
    if($i%2!=0){
        $somme_impaire+=$i;
    }
    if($i%3==0){
        $nombre_multiple3++;
    }
    $i++;
}
echo " La somme des nombres paires :   $somme_paire   .<br><br> ";
echo " La somme des nombres impaire :   $somme_impaire   .<br><br> ";
echo " Le nombre de multiple de 3 :   $nombre_multiple3   <br><br> ";

?>