<?php
$starTimeJson = file_get_contents("json/start.json");
$arrayTimeStar = json_decode($starTimeJson);
$stopTimeJson = file_get_contents("json/stop.json");
$arrayTimeStop = json_decode($stopTimeJson);

$stopTime = strtotime($arrayTimeStar[0]);
$startTime = strtotime($arrayTimeStop[0]);
$elapsedTime = $stopTime-$startTime;
echo $elapsedTime;
?>
<?php
Header( "Location: http://localhost/backend/sisson%203/StopWatch/index1.php" );
?>