<?php 
$dir = "test"; 
if(!file_exists($dir)) 
{ 

    if(mkdir($dir)) 

{ 

        echo " created "; 

    } else{ 

        echo " not reated."; 

    } 

} else 

{ 

    echo "already exists."; 

} 

?> 