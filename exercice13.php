<h1>EXERCICE 13 </h1>
<hr>
<?php
function calculerMoyenne($notes){
    return array_sum($notes) / count($notes);

}
function estAdmis($moyenne){
    if($moyenne>=10){
        return " Admis .";
    }
    else if(calculerMoyenne($moyenne)<10){
        return " Non admis .";
    }
}
function mention($moyenne) {
    if ($moyenne < 10) {
        return "Pas de mention.";
    } else if ($moyenne >= 16) {
        return "Très bien.";
    } else if ($moyenne >= 14) {
        return "Bien.";
    } else if ($moyenne >= 12) {
        return "Assez bien.";
    } else {
        return "Passable.";
    }
}

$notes=[14,16,12];
$moyenne=calculerMoyenne($notes) ;
echo "<br> Moyenne : ".$moyenne;
echo " <br><br>Resultas : ". estAdmis($moyenne);
echo "<br><br>Mention : ".mention($moyenne);
?>