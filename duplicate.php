<?php
function  reapted($character)
{
   // $count ="0";

    for($i = 0; $i <= strlen($character); $i++){
        if(substr_count($character, substr($character,$i, 1)) == 2){
            echo $i;
            //return $count=$count + 1;
            return substr($character,$i,1);
        }
    }
    //echo $count;
}

//test function to see if it gives the right result


echo reapted("yellow");
