<?php
////////////////////////////////////////////////////////////////////////////
//
// Region Image Proxy for https -> http site
//                                             by Fumi.Iseki
//

$serverURL = '';
$imageUUID = '';
if (isset($_GET['url']))   $serverURL = $_GET['url']; 
if (isset($_GET['image'])) $imageUUID = $_GET['image']; 

$serverURL = str_ireplace("%3A", ":", urlencode($serverURL));
$serverURL = str_ireplace("%2F", "/", $serverURL);
$imageUUID = urlencode($imageUUID);
$imageURL  = $serverURL.'/index.php?method=regionImage'.$imageUUID;

# use file_get_contents ... needs "allow_url_fopen = On" in php.ini
//$imageData = file_get_contents($imageURL);

# use curl
$curl_p = curl_init();
curl_setopt($curl_p, CURLOPT_URL, $imageURL);
curl_setopt($curl_p, CURLOPT_RETURNTRANSFER, true);
$imageData = curl_exec($curl_p);
curl_close($curl_p);

# Output
header('Content-Type: image/jpg');
echo $imageData;

