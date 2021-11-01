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
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

die();
?>
?>