<?php
$tab=array(1,23,43,10,7,0,9);
for($i=0;$i<count($tab);$i++){
    
    if($tab[$i]==10){
        echo " le nombre ".$tab[$i]." se trouve dans le tableau . ";
        break;
    }
}
