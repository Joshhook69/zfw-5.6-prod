<?php

class ApiController extends BaseController {

	public function doGetRequest($endpoint)
	{
		$client = new GuzzleHttp\Client();
		$url = 'http://api.vatusa.net/1hdYKpatFvfSW7f1/roster'.$endpoint;
		$response = $client->get($url, [
                'curl' => [
                    CURLOPT_INTERFACE => '205.185.112.53'
                ]
            ]);
		return $response->getBody();
	}

	public function roster() 
	{ 
		$ch = curl_init('http://api.vatusa.net/1hdYKpatFvfSW7f1/roster');
		curl_setopt($ch,CURLOPT_INTERFACE,'205.185.112.53');
		$myIp = curl_exec($ch);
		$json = json_decode($myIp);
		echo "<pre>";
		echo json_encode($json, JSON_PRETTY_PRINT);
		echo "</pre>";
	}
}
