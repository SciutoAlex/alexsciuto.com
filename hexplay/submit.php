<?
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require '../hexplay/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '280986045287780',
  'secret' => '36c14d3947f9ca0a52d9a1e8069cf6d9',
  'fileUpload' => true // optional
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
$paramslogin = array(
  'scope' => 'publish_stream',
  'redirect_uri' => 'http://www.alexsciuto.com/hexplay/submit.php'
);

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl($paramslogin);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Hex Play: Painting with Shapes</title>
  <meta property="og:title" content="Hex Play: Painting with Shapes" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.alexsciuto.com/hexplay" />
  <meta property="og:image" content="http://www.alexsciuto.com/hexplay/facebook.jpg" />
  <meta property="og:site_name" content="AlexSciuto.com" />
  <meta property="fb:admins" content="SciutoAlex" />
  <meta property="og:description" content="A little app to play with color and make interesting shapes." />
  <link rel="SHORTCUT ICON" href="http://www.alexsciuto.com/hexplay/favicon.ico" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
  <script type="text/javascript" src="https://raw.github.com/DmitryBaranovskiy/raphael/master/raphael-min.js">
</script>
  <script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> 
  <script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script>
</head>

<body>
<img src="output.png">
 <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
      Submit? <a href="submit-to-facebook.php">SUBMIT!</a>
    <?php else: ?>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
    <?php endif ?>
    
</body>
</html>
