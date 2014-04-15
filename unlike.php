<?php
  require_once('facebook.php');
  include_once("credentials.ini.php");

  $config = array(
    'appId' => $FB_APP_ID,
    'secret' => $FP_APP_SECRET,
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $new_access_token = $CURRENT_ACCESS_TOKEN;
  $facebook->setAccessToken($new_access_token);

  $user_id = $facebook->getUser();
?>
<html>
  <head></head>
  <body>

  <?php
    $ret_obj = $facebook->api('/'. /likes', 'POST');
    // echo '<pre>Post ID: ' . $IRK_POST_ID . '$ret_obj['id'] . '</pre>';
  ?>

  </body> 
</html>  