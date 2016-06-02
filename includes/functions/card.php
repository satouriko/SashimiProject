<?php
	function getCardInfo($configRootDir, &$card){
		$jsonFile = $configRootDir."includes/cardinfo/cards.json";
		$jsonString = file_get_contents($jsonFile);
		$card = json_decode($jsonString);
	}
	function displayCard($id, $card){
		if($card[$id]->{'type'}==1){
			echo "<div style=\"background-image:url(/cards/background/".$id.".jpg);\" class=\"card\">";
			echo "<img src=\"/cards/templates/".$card[$id]->{'color'}.".png\" class=\"cardTemplate\"/>";
			echo "<span class=\"cardCardNo\">".$card[$id]->{'cardno'}." ".$card[$id]->{'rarity'}."</span>";
			echo "<span class=\"cardName\">".$card[$id]->{'name'}."</span>";
			echo "<span class=\"cardLevel\">".$card[$id]->{'level'}."</span>";
			echo "<span class=\"cardCost\">".$card[$id]->{'cost'}."</span>";
			echo "<span class=\"cardNumber1\">".$card[$id]->{'number1'}."</span>";
			echo "<span class=\"cardNumber2\">";
			for($i=0;$i<$card[$id]->{'number2'};$i++) echo "<img src=\"/cards/templates/number2.png\"/>";
			echo "</span>";
			echo "<span class=\"cardTag1\">".$card[$id]->{'tag1'}."</span>";
			if($card[$id]->{'tag2'}!=NULL) echo "<span class=\"cardTag2\">".$card[$id]->{'tag2'}."</span>";
			echo "<span class=\"cardTextArea\"><div class=\"cardDesc\">".$card[$id]->{'description'}."</div><img src=\"/cards/templates/".$card[$id]->{'color'}."-texttop.png\"/><div class=\"cardText\">".$card[$id]->{'text'}."</div><img src=\"/cards/templates/".$card[$id]->{'color'}."-textbottom.png\"/></span>";
			echo "</div>";
		}
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}