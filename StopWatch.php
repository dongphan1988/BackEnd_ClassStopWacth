<?php


class StopWatch
{

    public $starTime;
    public $stopTime;

    public function __construct()
    {
        $starTimeJson = file_get_contents("json/start.json");
        $arrayTimeStar = json_decode($starTimeJson);
        $stopTimeJson = file_get_contents("json/stop.json");
        $arrayTimeStop = json_decode($stopTimeJson);

        $this->starTime = $arrayTimeStar[0];
        $this->stopTime = $arrayTimeStop[0];
    }

    public function getStartime()
    {
        return $this->starTime;
    }

    public function getStoptime()
    {
        return $this->stopTime;
    }

    public function setStoptime()
    {
        $time =date('H:i:s');
        $this->stopTime = $time;
    }

    public function setStartime()
    {
        $time =date('H:i:s');
        $this->starTime = $time;
    }

    public function start()
    {
        $this->starTime = date('H:i:s');
    }

    public function stop()
    {
        $this->stopTime = date('H:i:s');
    }
    public function getElapsedTime(){
        $stopTime = strtotime($this->stopTime);
        $startTime = strtotime($this->starTime);
        $elapsedTime = $stopTime-$startTime;
        return $elapsedTime;

    }
}

$stopwath = new StopWatch();
echo $stopwath->getStoptime();
echo "<br>";
echo $stopwath->getStartime();
echo "<br>";
echo $stopwath->getElapsedTime();


