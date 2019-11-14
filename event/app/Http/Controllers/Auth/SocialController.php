<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;
use Facebook\Facebook;

class SocialController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->stateless()->user();
    }
    public function aaaa(){
        session_start();
$fb = new Facebook([
  'app_id' => '420853728859282', // Replace {app-id} with your app id
  'app_secret' => '2934d5b7cb9feee19aa59e6466d7b3d9',
  'default_graph_version' => 'v5.0',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/A-event/event/public/pages/login/loginfb', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
    }

public function loginfb(){
    session_start();
$fb = new Facebook([
    'app_id' => '420853728859282', // Replace {app-id} with your app id
    'app_secret' => '2934d5b7cb9feee19aa59e6466d7b3d9',
    'default_graph_version' => 'v5.0',
  ]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
echo '<h3>Access Token</h3>';
// var_dump($accessToken->getValue());

// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
echo '<h3>Metadata</h3>';
// print_r($tokenMetadata);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('420853728859282'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();


    // Returns a `Facebook\FacebookResponse` object

   
if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
    exit;
  }

  echo '<h3>Long-lived</h3>';
  var_dump($accessToken->getValue());
}

$_SESSION['fb_access_token'] = (string) $accessToken;


 
$curl = curl_init();
// khởi tạo phiên làm việc với Curl
 
curl_setopt($curl, CURLOPT_URL, "https://graph.facebook.com/".$tokenMetadata->getUserId()."?fields=id,name,picture,email,birthday&access_token=".$accessToken->getValue()."");
// khai báo địa chỉ url
 
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: text/html','charset:UTF-8'));
// gửi một yêu cầu http
 
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
// khai báo user agent
 
curl_setopt($curl, CURLOPT_REFERER, 'http://google.com');
// cái này khai báo bạn đến từ trang wap nào
 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// thiết lập trả về đối số khi thực hiện phiên Curl
 
curl_setopt($curl, CURLOPT_TIMEOUT, 30);
// set time out tính theo giây.
 
$data = curl_exec($curl);
// thực hiện 1 phiên curl trả về nội dung của trang wap cần grab
 
curl_close($curl);
// kết thúc phiên làm việc với curl
$data = json_decode($data);
print_r($data);
echo $data->id;
echo $data->name;
echo $data->picture->data->url;
}


    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $user->getName();
        $user->getAvatar();
    
      
    }
}