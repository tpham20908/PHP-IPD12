<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
        function longdate($timestamp) {
          $temp = date("l F jS Y", $timestamp);
          return "The date is $temp";
        }
        echo longdate(time()) . "<br>";
        echo longdate(time() + 7*24*60*60);
        */
        // passing funciton parameters by reference
        function add_some_extra(&$string)
        {
          $string .= "and something extrea.";
        }
        $str = "<br>This is a string, ";
        add_some_extra($str);
        echo $str;
        
        function makecoffee($type = "cappuchino") 
        {
          return "Making a cup of $type.\n";
        }
        
        echo makecoffee();
        echo makecoffee(null);
        echo makecoffee("espresso");
        
        $temp = "The date is ";
        function longdate($timestamp) 
        {
          return date("l F jS Y", $timestamp);
        }
        echo $temp . longdate(time());
        ?>
    </body>
</html>
