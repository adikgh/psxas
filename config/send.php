<?php

	$token = "1581082911:AAEKW20w_-5V0Wx9tzhyThV2pjCgZtCjyc8";
	$chat_id = "-558578905";
	// https://api.telegram.org/bot1581082911:AAEKW20w_-5V0Wx9tzhyThV2pjCgZtCjyc8/getUpdates
	
	if(isset($_GET['mess'])) {
		$name  = strip_tags($_POST['name']);
		$phone = strip_tags($_POST['phone']);
		$phone = substr_replace($phone, '', 0, 1);
		$phone = substr_replace($phone, '8', 0, 1);

		$arr = array(
			'Аты-жөні: '	=> $name,
			'Телефон: ' 	=> $phone
		);

		foreach($arr as $key => $value) {$txt .= "<b>".$key."</b> ".$value."%0A";};
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
		if ($sendToTelegram) echo "yes"; else echo "error";

		exit();
	}