<h4> Afficher  le grade  correspondant selon la note : </h4>
<hr>
<?php $note=mt_rand(0,100);
$grade="";
if($note<=100 && $note>=90){
    $grade="A";
}
else if($note<= 89 && $note>=80){
    $grade="B"; }
else if($note<= 79 && $note>=70){
    $grade="C";
}
else if($note<= 69 && $note>= 60){
    $grade="D";
}
else if( $note<60 && $note>= 0){
    $grade="F";
}
else{
    echo "invalide !";
}

echo " la note est : $note ,et  le grade est: $grade .";
?>