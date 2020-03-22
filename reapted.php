<?php
function  non_reapted($character)
{
    $check = null;
    for($i = 0; $i <= strlen($character); $i++){
        if(substr_count($character, substr($character,$i, 1)) != 1){
            return substr($character,$i,1);
        }
    }
}

//test function to see if it gives the right result

echo non_reapted("seen"), "\n";
echo non_reapted("yellow");