</h4> Informations d'un etudiant : </h4>
<hr>
<?php
$nom = "Ahmed";
$age = 21;
$note1 = 14;
$note2 = 16;
$note3 = 12;
$moyenne=($note1+$note2+$note3)/3;
if($moyenne>=10 && $moyenne<12){
    $true="passable ";
}
else if($moyenne>= 12 && $moyenne< 14){
    $true= "Assez bien ";
}
else if($moyenne>= 14 && $moyenne< 16){
    $true= "Bien ";
}
else if($moyenne>= 16&& $moyenne<= 20){
    $true= "Tres bien ";
}
else{
     $true="Non admis ";
    }
?>
<ul>
    <p>
        <?php
        echo"Nom : ".$nom."<br>"."Age : ".$age." ans <br>"."La moyenne : ".$moyenne;
        echo "<br> L'etat : $true ";
        ?>
    </p>
</ul>
