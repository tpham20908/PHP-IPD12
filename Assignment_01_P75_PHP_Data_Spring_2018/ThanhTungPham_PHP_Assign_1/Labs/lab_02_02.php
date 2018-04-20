<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Data Type Conversion</title>
    </head>

    <body>
        <h1>Welcome to Lab 02_02</h1>
        <p>Today is Apr.16, 2-18</p>

        <?php
        // declare a string, double, integer varibles
        $testString = "3.5 seconds";
        $testDouble = 79.2;
        $testInteger = 12;
        
        // print each variable's value and type
        print("$testString is a(n) " . gettype($testString) . "<br>");
        print("$testDouble is a(n) " . gettype($testDouble) . "<br>");
        print("$testInteger is a(n) " . gettype($testInteger) . "<br>");
        
        // convert to other data type: call function settype() to convert variables
        print($testString);
        settype($testString, "double");
        print(" is a double is $testString.<br>");
        
        print($testString);
        settype($testString, "integer");
        print(" is a integer is $testString.<br>");
        
        // comparing string
        $fruits = array("apple", "orange", "lemon", "banana");
        
        foreach($fruits as $fruit)
        {
            $ref = "lemon";
            if (strcmp($fruit, $ref) < 0) echo $fruit . " is before $ref.<br>";
            elseif (strcmp($fruit, $ref) < 0) echo $fruit . " is after $ref.<br>";
            else echo $fruit . " is equal to $ref.<br>";
        }
        
        ?>

    </body>
</html>



