<?php
echo " Time Start : ";
include "json/start.json";
echo "<br>";
echo "Time Stop : ";
include "json/stop.json";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        width: 25%;
        border-collapse: collapse;
    }

    th, td {
        padding: 80px;
        text-align: center;
        border: 1px solid aquamarine;
    }

    #submit {
        background: lightsteelblue;
        font-size: 30px;
    }

    input[type=date] {
        background: lightsalmon;
        width: 300px;
    }
</style>
<body onload="time()">
<script type="text/javascript">
    function time() {
        var today = new Date();
        var weekday=new Array(7);
        weekday[0]="Sunday";
        weekday[1]="Monday";
        weekday[2]="Tuesday";
        weekday[3]="Wednesday";
        weekday[4]="Thursday";
        weekday[5]="Friday";
        weekday[6]="Saturday";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        var h=today.getHours();
        var m=today.getMinutes();
        var s=today.getSeconds();
        m=checkTime(m);
        s=checkTime(s);
        nowTime = h+":"+m+":"+s;
        if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;

        tmp='<span class="date">'+today+' | '+nowTime+'</span>';

        document.getElementById("clock").innerHTML=tmp;

        clocktime=setTimeout("time()","1000","JavaScript");
        function checkTime(i)
        {
            if(i<10){
                i="0" + i;
            }
            return i;
        }
    }
</script>
<div id="clock"></div>

<table border="1"/>
<caption><h2 style="background: aqua">TIME</h2></caption>
<tr>
    <td>
        <form method="post" action="star.php">
            <table border="1">
                <input type="submit" value="Star Time"/>
        </form>
    </td>
    <td>
        <form method="post" action="stop.php">
            <table border="1">
                <input type="submit" value="Stop Time"/>
        </form>
    </td>
    <td>
        <form method="post">
            <table border="1">
                <input type="submit" value="Elapsed Time"/>
        </form>
    </td>
</tr>
<?php

$starTimeJson = file_get_contents("json/start.json");
$arrayTimeStar = json_decode($starTimeJson);
$stopTimeJson = file_get_contents("json/stop.json");
$arrayTimeStop = json_decode($stopTimeJson);

$stopTime = strtotime($arrayTimeStop[0]);
$startTime = strtotime($arrayTimeStar[0]);
$elapsedTime = $stopTime - $startTime;
echo $elapsedTime." s";

?>

</body>
</html>
