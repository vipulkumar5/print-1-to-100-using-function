<?php 
function myClass($x){
    for($i = 0;$i <= $x; $i++){
        if($i==5){
            continue;
            
        }
        echo $i;
        echo ("\n");
    }
    
    
}
myClass("100");
?>