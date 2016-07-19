你就是个演员<br/>
<?php
    for($i=0;$i<20;$i++){
        $a=mt_rand(0,1000);
	$hehe=mt_rand(1,2);
	if($hehe==1){
		$b=mt_rand(0,1000);
        	echo $a;
		echo "+";
        	echo $b;
        	echo "=";
        	echo $a+$b;
	}else{
		$b=mt_rand(0,a);
        	echo $a;
		echo "-";
        	echo $b;
        	echo "=";
        	echo $a-$b;
	}
        echo "<br/>";
    }