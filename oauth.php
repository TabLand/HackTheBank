<?php


include_once "oauth-php/library/OAuthStore.php";
include_once "oauth-php/library/OAuthRequester.php";

$key = 'i1enjotsff4yxfwhi5grhjoh4e4gqmyewsibdy5n'; // this is your consumer key
$secret = 'a5eimch0asajwpvbmmofkotym5xkdrcswrypb4yd'; // this is your secret key

$options = array( 'consumer_key' => $key, 'consumer_secret' => $secret );
OAuthStore::instance("2Leg", $options );

$url = "?????????"; // this is the URL of the request
$method = "GET"; // you can also use POST instead
$params = null;

try
{
        // Obtain a request object for the request we want to make
        $request = new OAuthRequester($url, $method, $params);

        // Sign the request, perform a curl request and return the results, 
        // throws OAuthException2 exception on an error
        // $result is an array of the form: array ('code'=>int, 'headers'=>array(), 'body'=>string)
        $result = $request->doRequest();
        
        $response = $result['body'];
}
catch(OAuthException2 $e)
{
 //ouchie!
}
?>
