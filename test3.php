<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://random-user-by-api-ninjas.p.rapidapi.com/v1/randomuser",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: random-user-by-api-ninjas.p.rapidapi.com",
		"X-RapidAPI-Key: d0fde9724dmsh195c3089b5eefdcp1cb84ajsnace6cd141b77"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
	// $x = json_decode($response);
    // echo ucfirst($x->username);
}
?>