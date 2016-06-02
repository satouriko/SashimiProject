<?php
	function getCardInfo($configRootDir, &$card){
		$jsonFile = $configRootDir."includes/cardinfo/cards.json";
		$jsonString = file_get_contents($jsonFile);
		$card = json_decode($jsonString);
	}
	function displayCard($id, $card){
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
		echo "<div style=\"background-image:url(/cards/background/".$id.".jpg);\" class=\"card\">";
		echo "<img src=\"/cards/templates/".$card[$id]->{'color'}.".png\"/>";
		echo "<span class=\"cardCardNo\">".$card[$id]->{'cardno'}."</span>";
		echo "<span class=\"cardName\">".$card[$id]->{'name'}."</span>";
		echo "</div>";
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}