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
    echo "CP CODM";
}

?>
?>