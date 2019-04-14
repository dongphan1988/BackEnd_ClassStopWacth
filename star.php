<?php
$time =date('H:i:s');
$jsonShowFile = json_encode([$time]);
file_put_contents("json/start.json",$jsonShowFile);

//$starTime = strtotime($time);
//$arr = [$starTime];
//$fileJson = json_encode($arr);
//file_put_contents("json/startime.json",$fileJson);
?>
<?php
Header( "Location: http://localhost/backend/sisson%203/StopWatch/index1.php" );
?>
