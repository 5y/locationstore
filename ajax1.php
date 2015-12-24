
<html>
<?php

$lat = $_POST['lat'];
$long =$_POST['lan'];
$date = date_create();
$time= date_format($date, 'U = Y-m-d H:i:s') . "\n";

$file = file_get_contents('data.json');
$data = json_decode($file);
// unset($file);
$data[]=array("lat" =>$lat,"long" =>$long,"time"=>$time);
file_put_contents('data.json',json_encode($data));
// unset ($data);

// $fp = fopen('data.html','w');
// fwrite($fp,$all);
// fclose($fp);
$str = file_get_contents('data.json');
$json = json_decode($str,true);
echo '<pre>' . print_r($json,true).'</pre>';
$location = $json['lat']['long'][0];



?>

</html>
