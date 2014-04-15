<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('facebook.php');
  include_once("credentials.ini.php");

  $config = array(
    'appId' => $FB_APP_ID,
    'secret' => $FP_APP_SECRET,
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);

  $new_access_token = $CURRENT_ACCESS_TOKEN;

  // Set a new access token, by first getting it via means other than the SDK
  $facebook->setAccessToken($new_access_token);

  $user_id = $facebook->getUser();
?>
<html>
  <head></head>
  <body>

  <?php
    $ret_obj = $facebook->api('/me/feed', 'POST',
                                array(
                                  'link' => 'www.example.com',
                                  'message' => 'Posting with the PHP SDK!'
                             ));
    echo '<pre>Post ID: ' . $ret_obj['id'] . '</pre>';

    // Give the user a logout link 
    echo '<br /><a href="' . $facebook->getLogoutUrl() . '">logout</a>';

  ?>      

  </body> 
</html>  