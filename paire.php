<h3>verefier si un nombre est paire :</h3>
<hr>
<?php
$nmbr=mt_rand(0,100);
if($nmbr%2==0){
    echo "$nmbr  est paire .";
}
else{
    echo "$nmbr est impaire . ";
}
?>