<?php
	function displayCard($id, $conn){
		$sql = "select * from cardinfo where (id = '".$id."');";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		echo $row['cardno']."<br/>";
		if($row['type']==1) echo "角色<br/>"; else if($row['type']==2) echo "事件<br/>"; else echo "闪耀时刻<br/>";
		echo $row['title']." ".$row['name']."<br/>";
		echo $row['level']."/".$row['cost']."<br/>";
		echo $row['rarity']."<br/>";
		echo $row['number1']."<br/>";
		for($i=0;$i<$row['number2'];$i++) echo "※";
		echo "<br/>";
		echo $row['illustrator']."<br/>";
		if($row['tag2']==NULL) echo $row['tag1']."<br/>"; else echo $row['tag1']." ".$row['tag2']."<br/>";
		echo $row['text']."<br/>";
		echo $row['source']."<br/>";
		echo "<br/>";
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}