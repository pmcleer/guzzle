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


  echo "<br/><br/>";
  $client = new GuzzleHttp\Client();
  $res = $client->get('https://api.nationalize.io/?name=philip');
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
