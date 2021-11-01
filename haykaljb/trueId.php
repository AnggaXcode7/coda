<?php
/*
	 ======[ COPYRIGHT 2021 NICHICODEX X CYBER LION SQUAD ]======
	  _   _ _      _     _  _____          _           
	 | \ | (_)    | |   (_)/ ____|        | |          
	 |  \| |_  ___| |__  _| |     ___   __| | _____  __
	 |   ` | |/ __|  _ \| | |    / _ \ / _` |/ _ \ \/ /
	 | |\  | | (__| | | | | |___| (_) | (_| |  __/>  < 
	 |_| \_|_|\___|_| |_|_|\_____\___/ \__,_|\___/_/\_\
	
	 YT     : Bluesky Asia
	 Email  : its@nichicodex.com
	 WA     : +1 (863) 457-4976
	 WEB    : https://nichicodex.com/
	 
	 WE DO WHAT WE WANT BECAUSE WE CAN!
	 
	 ======[ COPYRIGHT 2021 NICHICODEX X CYBER LION SQUAD ]======
*/

?><?php 
if(isset($_GET['userId'])) {
    $id = $_GET['userId'];
    $zone = $_GET['zoneId'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://alexhost.my.id/true_id/ml/?id=".$id."&zone=".$zona."&token=AlexHost");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    $res = json_decode($result,true);
    echo $res['nickname'];
}else{
    echo "Diamond FF";
}

?>
?>