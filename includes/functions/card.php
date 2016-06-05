<?php	
	$exp['N']=1;
	$exp['R']=2;
	$exp['SR']=32;
	$exp['SSR']=42;
	$exp['UR']=72;
	$exp['XR']=142;
	$exp['SP']=247;
	$exp['M']=10;
	$exp['RM']=25;
	$exp['FM']=255;
	$exp['SPM']=2475;
	$value['N']=10;
	$value['R']=22;
	$value['SR']=322;
	$value['SSR']=342;
	$value['UR']=572;
	$value['XR']=2642;
	$value['SP']=24777;
	$value['M']=210;
	$value['RM']=2520;
	$value['FM']=25520;
	$value['SPM']=247520;
	function getCardInfo($configRootDir, &$card){
		$jsonFile = $configRootDir."includes/jsons/cards.json";
		$jsonString = file_get_contents($jsonFile);
		$card = json_decode($jsonString);
	}
	function displayCard($row, $card){
		$id=$row['cardid'];
		if($card[$id]->{'type'}==1){
			echo "<div style=\"background-image:url(/cards/background/$id.jpg);\" class=\"card\" id=\"card".$id."\">";
			echo "<img src=\"/cards/templates/1/".$card[$id]->{'color'}.".png\" class=\"cardTemplate\"/>";
			echo "<span class=\"cardCardNo\">".$card[$id]->{'cardno'}." ".$card[$id]->{'rarity'}."</span>";
			echo "<span class=\"cardName\">".$card[$id]->{'name'}."</span>";
			echo "<span class=\"cardLevel\">".$card[$id]->{'level'}."</span>";
			echo "<span class=\"cardCost\">".$card[$id]->{'cost'}."</span>";
			$cardRealNumber=$card[$id]->{'number'}+$card[$id]->{'number'}*$row['cardlv']/50;
			echo "<span class=\"cardNumber\">".$cardRealNumber."</span>";
			echo "<span class=\"cardTag cardTag1\"><span class=\"cardTagText\">".$card[$id]->{'tag1'}."</span></span>";
			if($card[$id]->{'tag2'}!=NULL) echo "<span class=\"cardTag cardTag2\"><span class=\"cardTagText\">".$card[$id]->{'tag2'}."</span></span>";
			echo "<span class=\"cardTextArea\"><div class=\"cardDesc\">".$card[$id]->{'description'}."</div><img src=\"/cards/templates/".$card[$id]->{'color'}."-texttop.png\"/><div class=\"cardText\">".$card[$id]->{'text'}."</div><img src=\"/cards/templates/".$card[$id]->{'color'}."-textbottom.png\"/></span>";
			echo "</div>";
		}
	}
	function displayCardInfo($row, $card){
		$id=$row['cardid'];
		echo "卡牌等级：".$row['cardlv']."<br/>";
		echo "插画：　　".$card[$id]->{'illustrator'}."<br/>";
		echo "出处：　　".$card[$id]->{'source'}."<br/><br/>";
		echo $card[$id]->{'hint'};
	}
	function effect1(){
		return;
	}
	function effect2(){
		return;
	}
	function get_card($cardid,$userid,$cardlv,$conn){
		$pp="INSERT INTO cardpossession (cardid, userid, cardlv) VALUES ($cardid, $userid, $cardlv);";
		mysqli_query($conn,$pp);
	}