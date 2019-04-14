<?php
$time =date('H:i:s');
$jsonShowFile = json_encode([$time]);
file_put_contents("json/stop.json",$jsonShowFile);


//$stopTime = strtotime($time);
//$arr = [$stopTime];
//$fileJson = json_encode($arr);
//file_put_contents("json/stoptime.json", $fileJson)
?>
<?php
Header("Location: http://localhost/backend/sisson%203/StopWatch/index1.php");
?>