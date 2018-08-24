<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '836adb912d7cbc15cd1a2a453cf6f860';
$access_token  = 'XVSK9QiC9d43KAac7o7re6BUGaVftgtNqmCygK0esKMNShPZT11d5uefBnffkUHDuR9vuwrY8kPvOBM82VlTd3daGTzC6HH6/6i9D+6kAIMG8R+Yw3wTKan0Bnp1boqxYhOU86QkJUzGi0T0/XecfgdB04t89/1O/w1cDnyilFU=
';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
