<?php
	function getCardInfo($configRootDir, &$card){
		$jsonFile = $configRootDir."includes/cardinfo/cards.json";
		$jsonString = file_get_contents($jsonFile);
		$card = json_decode($jsonString);
	}
	function displayCard($id, $card){
		if($card[$id]->{'type'}==1){
			echo "<div style=\"background-image:url(/cards/background/".$id.".jpg);\" class=\"card\">";
			echo "<img src=\"/cards/templates/".$card[$id]->{'color'}.".png\"/>";
			echo "<span class=\"cardCardNo\">".$card[$id]->{'cardno'}." ".$card[$id]->{'rarity'}."</span>";
			echo "<span class=\"cardName\">".$card[$id]->{'name'}."</span>";
			echo "<span class=\"cardLevel\">".$card[$id]->{'level'}."</span>";
			echo "<span class=\"cardCost\">".$card[$id]->{'cost'}."</span>";
			echo "<span class=\"cardNumber1\">".$card[$id]->{'number1'}."</span>";
			//number2
			//tag要加背景
			//text
			//description
			echo "</div>";
		}
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}