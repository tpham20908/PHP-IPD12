<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Data Type Conversion</title>
    </head>

    <body>
        <h1>Welcome to Lab 03_01</h1>
        <p>Today is <?php echo date("l jS M Y", time()); ?></p>

        <?php

        $firstname = "Andy";
        $lastname = "Tarr";
        $myVar = "Hi, my name is $firstname $lastname.<br>";
        echo $myVar;

        echo strlen("fdasjkl asdflkjoi sdfjoijwe sadoi");

        $str1 = "dog & cat";
        echo "<br>" . htmlspecialchars($str1);

        $str2 = "JOIFD OIDFS DFSljkf";
        echo "<br>" . ucwords(strtolower($str2));

        echo "<br>";

        $employee1 = array("Peter", "David", "Georges", "Gabriel");
        print_r($employee1);

        echo "<br>";

        $employee2 = array("name"=>"Edwin", "position"=>"President", "yearEmployed"=>2005);
        print_r($employee2);

        echo "<br><br>";
        $employees = array(
            array("name"=>"Sally Meyer", "position"=>"President", "yearEmloyed"=>2011),
            array("name"=>"John Doe", "position"=>"Treasure", "yearEmloyed"=>2010),
            array("name"=>"Jane Doe", "position"=>"Diamond", "yearEmloyed"=>2013),
            array("name"=>"Vito Rico", "position"=>"Vice President", "yearEmloyed"=>2010)
        );

        foreach ($employees as $emp) {
            foreach ($emp as $key=>$value) {
                echo "$key: $value.<br>";
            }
        }
    ?>

    </body>
</html>


