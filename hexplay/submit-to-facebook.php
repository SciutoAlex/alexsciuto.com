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
  'appId'  => '173521372752053',
  'secret' => '4b756a0fb389048f2a484c47e8ce8bf6',
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
  'scope' => 'publish_stream'
);

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl($paramslogin);
}


//At the time of writing it is necessary to enable upload support in the Facebook SDK, you do this with the line:
$facebook->setFileUploadSupport(true);
  
//Create an album
  
//Get album ID of the album you've just created
$album_uid = $create_album['id'];
  
//Upload a photo to album of ID...
$photo_details = array(
    'message'=> $_POST['submit-text'] . " --from http://www.alexsciuto.com/hexplay"
);
$file= $_POST['submit-picture']; //Example image file
$photo_details['image'] = '@' . realpath($file);
  
$upload_photo = $facebook->api('me/photos', 'post', $photo_details);
$photo_id = $upload_photo['id'];
unlink($file);
?>