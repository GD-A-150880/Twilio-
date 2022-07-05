<?php
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;
echo "1";
// Your Account AccountSid and Auth Token from twilio.com/console
$AccountSid = 'AC*******************************';
$AuthToken = '*********************************';
$client = new Client($AccountSid, $AuthToken);
echo "1";

// Use the client to do fun stuff like send text messages!

// An array of users(receivers) containing Mobile Number & Name.
// +1 is code of country(US). And xxxxxxxxxx is user's mobile number.
$people = array(
	'715-201-6035' => "Chirag",
);
echo "1";

foreach ($people as $number => $name) {
	$sms = $client->account->messages->create(
		$number,
		array(
			'from' => "8022789488", //phone number from twilio.com
			'body' => "Single test sms "
		)
	); 
//	echo "Sent message to $name <br><br>";
}

echo "1";

?>