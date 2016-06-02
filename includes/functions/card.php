<?php
	function getCardInfo($configRootDir, &$card){
		$jsonFile = $configRootDir."includes/cardinfo/cards.json";
		$jsonString = file_get_contents($jsonFile);
		$card = json_decode($jsonString);
	}
	function displayCard($id, $card){
		echo $card[$id]->{'cardno'}."<br/>";
		if($card[$id]->{'type'}==1) echo "角色<br/>"; else if($card[$id]->{'type'}==2) echo "事件<br/>"; else echo "闪耀时刻<br/>";
		echo $card[$id]->{'title'}." ".$card[$id]->{'name'}."<br/>";
		echo $card[$id]->{'level'}."/".$card[$id]->{'cost'}."<br/>";
		echo $card[$id]->{'rarity'}."<br/>";
		echo $card[$id]->{'number1'}."<br/>";
		for($i=0;$i<$card[$id]->{'number2'};$i++) echo "※";
		echo "<br/>";
		echo $card[$id]->{'illustrator'}."<br/>";
		if($card[$id]->{'tag2'}==NULL) echo $card[$id]->{'tag1'}."<br/>"; else echo $card[$id]->{'tag1'}." ".$card[$id]->{'tag2'}."<br/>";
		echo $card[$id]->{'text'}."<br/>";
		echo $card[$id]->{'source'}."<br/>";
		echo "<br/>";
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}