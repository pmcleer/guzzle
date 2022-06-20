<?php
 // Vim, Emax


  // composer
  require_once("vendor/autoload.php");




  $client = new GuzzleHttp\Client();


  // Send an asynchronous request.
  $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
  $promise = $client->sendAsync($request)->then(function ($response) {
      echo 'I completed! ' . $response->getBody();
  });
  $promise->wait();

  echo "<br/><br/>here3";
      $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://alpha-vantage.p.rapidapi.com/query?interval=5min&function=TIME_SERIES_INTRADAY&symbol=MSFT&datatype=json&output_size=compact",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: alpha-vantage.p.rapidapi.com",
		"X-RapidAPI-Key: SIGN-UP-FOR-KEY"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}


      echo "<br/><br/>here2";
      $client1 = new GuzzleHttp\Client();
      $res = $client1->get('https://api.publicapis.org/entries');
      echo $res->getStatusCode();           // 200
      echo "<br/><br/>";
      //echo $res->getHeader('content-type'); // 'application/json; charset=utf8'
      echo $res->getBody();                 // {"type":"User"...'
      echo "<br/><br/>";
      echo $res->getBody();
      echo "<br/><br/>";
      $githubObject = json_decode($res->getBody());
      echo $githubObject->login;
      echo "<br/><br/>";
      var_dump($githubObject);

      var_dump($res);




  //var_export($res->json());             // Outputs the JSON decoded data
 ?>
