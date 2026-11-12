<h4> La table de multiplication de 1 a 10 </h4>
<hr>
<?php

"<ul>";
for($i=1;$i<=10;$i++){
    echo "<ul> ----------------------------------- <br>";
    echo "        La multiplication de $i : <br>";
    echo "----------------------------------- <br></ul>"; 
    for($j=1;$j<=10;$j++){
        echo "<ul>".$j ." x ".$i." = ".$j*$i."<br></ul>";
    }
}
?>