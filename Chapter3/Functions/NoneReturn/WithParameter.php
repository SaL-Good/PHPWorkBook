<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function None Return - With Default Parameter</title>
</head>
<body>
    <?php
        //Syntax - Function Definition
        /*
            function functionName($argument1 = defaultValue1, $argument2 = defaultValue2,...,$argumentn = defaultValuen):void{
                //Code to be executed
            }
        */
        function studentInfo($name, $age=20, $city="New York", $grade = "C"):void{
            echo "===============================<br>";
            echo "Student Name: {$name} <br>";
            echo "Student Age: {$age} <br>";
            echo "Student City: {$city} <br>";
            echo "Student Grade: {$grade} <br>";
            echo "===============================<br>";
        }
        //Function Call: functionName(parameter1, parameter2,...,parametern);
        studentInfo("John Doe", 20, "New York", "A");
        studentInfo("Jane Smith", 25, "Los Angeles", "B");
        studentInfo("Alice Johnson", 22, "Chicago");
        studentInfo("Bob Brown", 30);
        studentInfo("Charlie Davis");
    ?>
</body>
</html>