<?php


function myPattern($value){
    
    echo '<pre>';
    for($i=0;$i<$value;$i++){
        
        // print space
        for($j=$i;$j<$value-1;$j++){
            // echo '&nbsp;'; 
            echo ' '; 
        }

        // print star
        for($k=0;$k<($i*2)+1;$k++){
            echo '*';
        }

        echo "<br>";
    }
echo '</pre>';
}


// in pre tag for accurate space in browser
myPattern(5);








function myPattern1($value){
    
    for($i=0;$i<$value;$i++){
        
        // print space
        for($j=$i;$j<$value-1;$j++){
            echo '&nbsp;&nbsp;'; 
        }

        // print star
        for($k=0;$k<($i*2)+1;$k++){
            echo '*';
        }

        echo "<br>";
    }
    
}

// without pre tag
myPattern1(15);