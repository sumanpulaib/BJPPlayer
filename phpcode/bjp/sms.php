<?php

 $name = $_POST['user'];  
$mobilenumber = $_GET['mobileNo'];
$town = $_POST['town'];
$country = $_POST['country'];
$imei = $_GET['imei'];
$deviceName = $imei;
//Multiple mobiles numbers seperated by comma

//echo  $deviceName."<br>";
$mobileNumber = $mobilenumber;
//echo $mobileNumber;
$mobilemsg="IB_start";
if(($deviceName == "") && ($mobilenumber == "") ){

echo "Please Add your contact Details First";
}
else
{

echo "DeviceName   ".$deviceName."<br>";
echo "Message    ".$mobilemsg."<br>";
echo "MobileNumber    ".$mobileNumber."<br>";
}	
//Your authentication key
$authKey = "62264A7RDpradwshV52d3be3d";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "octo";

//Your message to send, Add URL endcoding here.
$message = urlencode($mobilemsg);

//Define route 
$route = "1";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://india.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));

//get response
$output = curl_exec($ch);

curl_close($ch);

echo $output."Message has been sent to Device";?>
sleep(1000);
<script>
location.replace("http://www.bookingslot.com/ResetDevice.php");
</script>
