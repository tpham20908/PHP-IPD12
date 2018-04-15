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

        echo "Chapter 3 examples: " . "<br>";

        // passing funciton parameters by reference
        function add_some_extra(&$string) {
          $string .= "and something extrea.";
        }

        $str = "<br>This is a string, ";
        add_some_extra($str);
        echo $str;

        function makecoffee($type = "cappuchino") {
          return "Making a cup of $type.\n";
        }

        echo makecoffee();
        echo makecoffee(null);
        echo makecoffee("espresso");

        $temp = "The date is ";

        function longdate($timestamp) {
          return date("l F jS Y", $timestamp);
        }

        echo $temp . longdate(time());

        echo "<br><br>Chapter 4 examples: " . "<br>";

        echo "a: [" . (20 > 9) . "]<br>";
        echo "b: [" . (5 == 6) . "]<br>";
        echo "c: [" . (1 == 0) . "]<br>";
        echo "d: [" . (1 == 1) . "]<br>";

        $j = 10;
        while ($j > -5) {
          $j--;
          if ($j == 0)
            continue;
          echo (int) (10 / $j) . "<br>";
        }

        $paper = array("Copier", "Inkjet", "Laser", "Photo");
        $j = 0;

        foreach ($paper as $item) {
          echo "$j: $item<br>";
          ++$j;
        }

        $products = array(
            'paper' => array(
                'copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper"),
            'pens' => array(
                'ball' => "Ball Point",
                'hilite' => "Highlighters",
                'marker' => "Markers"),
            'misc' => array(
                'tape' => "Sticky Tape",
                'glue' => "Adhesives",
                'clips' => "Paperclips"
            )
        );

        echo "<pre>";

        foreach ($products as $section => $items) {
          echo "$section:\n";
          foreach ($items as $key => $value)
            echo "\t$key\t($value)<br>";
        }
        echo "</pre>";

        echo (is_array($products)) ? "\$product is an array." : "\$product is not an array.";
        
        echo "<br>";
        
        echo count($products) . "<br>";
        echo count($products, 1) . "<br>";
        
        printf("Hello, my name is %s, I'm %d years old, which is %X in Hexadecimal.", "Tung", 41, 41);
        
        echo "<br>" . date("Y/M/d", time()) . "<br>";
        
        echo "<br><br>Chapter 7 (File handling) examples: " . "<br>";
        
        if (file_exists("testfile.txt")) echo "File exists.";
        else echo "File does not exists.";
        
        $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
        $text = <<<_EOD
                Line 1
                Line 2
                Line 3
_EOD;
        fwrite($fh, $text);
        fclose($fh);
        echo "File 'testfile.txt' written successfully." . "<br>";
        
        ?>
    </body>
</html>
