<h4> compare deux nombre :</h4>
<hr>
<?php
$nombre1=mt_rand(-10,10);
$nombre2=mt_rand(-10,10);
if($nombre1<$nombre2){
    echo " le nombre $nombre1 est inferieur a le nombre $nombre2 . ";
}
else if($nombre1>$nombre2){
        echo " le nombre $nombre1 est superieur a le nombre $nombre2 . ";
}
else{
        echo " le nombre $nombre1 et le nombre $nombre2 sont egaux. ";

}
?>