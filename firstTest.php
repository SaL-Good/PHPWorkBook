<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standard Tag</title>
</head>
<body>
    <?php
        //Single line comment
        echo "Standard Tag!<br>";#Comment end of line
        $student = [
    "id" => "AU-CS-001",
    "name" => "សុខ ជា",
    "gpa" => 3.85
];
echo "អត្តលេខ៖ {$student['id']} | ឈ្មោះ៖ {$student['name']} | GPA: {$student['gpa']}";
$products = [
    ["title" => "Laptop Dell", "price" => 850],
    ["title" => "Mouse Logitech", "price" => 25]
];
echo "ទំនិញទី១៖ " . $products[0]["title"] . " - តម្លៃ៖ " . $products[0]["price"] . " $";
?>
<?php
$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange"); // បន្ថែម "Orange" ទៅខាងចុង

$appName = "angkor portal";
$upperName = strtoupper($appName);

echo "ចំនួនធាតុ៖ " . count($fruits) . " | ឈ្មោះធំ៖ {$upperName}";
?>
     
    
</body>
</html>