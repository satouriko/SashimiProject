你就是个演员
<?php
    for($i=0;$i<20;$i++){
        $a=mt_rand(0,1000);
        $b=mt_rand(-a,1000);
        echo $a;
        if($b>=0) echo "+";
        echo $b;
        echo "=";
        echo $a+$b;
        echo "<br/>";
    }