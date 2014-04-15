#!/usr/bin/php
<?
require_once('facebook.php');
include_once("credentials.ini.php");

$config = array(
'appId' => $FB_APP_ID,
'secret' => $FP_APP_SECRET,
'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
);

$facebook = new Facebook($config);

$params = array(
  'scope' => 'read_stream, publish_actions',
  'redirect_uri' => 'http://christophersu.net/'
);

$loginUrl = $facebook->getLoginUrl($params);

echo($loginUrl)

?>