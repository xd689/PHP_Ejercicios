<?php
    function primo($n){
        $primo=true;
        $div=2;
        for($div;$div<$n;$div++){
            if($n%$div==0) {
                $primo=false;
                break;
            }
        }
        return $primo;
    }

    for($i=0;$i<=100;$i++){
        if(primo($i)) echo "$i es primo<br>\n";
    }
?>