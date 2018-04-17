<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab 02</title>
    </head>

    <body>
        <h1>Welcome to Lab 02</h1>
        <p>Today is Apr.16, 2-18</p>

        <?php
        date_default_timezone_set("America/Toronto");
        echo "Today is " . date("l jS \of F Y h:i:s A", time());

        echo "<br>July 1, 2000 is on a " . date("l jS \of F Y", mktime(0, 0, 0, 7, 1, 2000));
        
        // mktime(hour, min, sec, month, day, year, is_dst);
        $tomorrow = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
        $lastmonth = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));
        $nextyear = mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1);
        
        echo "<br>";
        echo "Today is " . date("l") . "<br>";
        // Today is Monday 16th of Apr 2018 12:19:43 PM
        echo "Today is " . date("l jS \of M Y h:i:s A") . "<br>";
        // Today is Monday Apr 16th, 2018
        echo "Today is " . date("l M jS \, Y") . "<br>";
        // April 21 2018 is on Saturday
        echo "April 21 2018 is on " . date("l", mktime(0,0,0,4,21,2018)) ."<br>";
        // April 21 2018 is on WednesdayMon, 16 Apr 18 12:23:58 -0400
        echo date(DATE_RFC822) . "<br>";
        // 2018-04-21T00:00:00-04:00
        echo date(DATE_ATOM, mktime(0,0,0,4,21,2018));
        
        echo "<br><br>";
        echo "Tomorrow is " . date("l jS",$tomorrow) . "<br>";
        echo "Last month is " . date("M", $lastmonth) . "<br>";
        echo "Next year is " . date("Y", $nextyear) . "<br>";
        
        $arr = array("monday", "tuesday", "wednesday");
        $arr["tuesday"] = "today";
        print_r($arr);
        
        echo "<br>";
        echo print_r(getdate());
        
        ?>

    </body>
</html>
