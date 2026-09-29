<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        //1.Indexed Array: 
        //$arrayName = [$Item1, $Item2,...,$Itemn]
        $_age = [23,34,45,50];
        echo "Indexed Array: " . $_age[0] . "<br>";
        //2.Associative Array
        //$arrayName = ["key1"=>$Item1, "key2"=>$Item2,...,"keyn"=>$Itemn]
        $product = ["pro_id"=>1,"pro_name"=>"Iphone 12", "price"=>500];
        echo "Product Name: " . $product["pro_name"] . "<br>";
        //3. Multidimensional Array
        /*
            $arrayName = [
                [$Item1, $Item2,...,$Itemn],
                [$Item1, $Item2,...,$Itemn],
                ...
                [$Item1, $Item2,...,$Itemn]
            ]
        */
        $products = [
            ["pro_id"=>1,"pro_name"=>"Iphone 12", "price"=>500],
            ["pro_id"=>2,"pro_name"=>"Iphone 13", "price"=>600],
            ["pro_id"=>3,"pro_name"=>"Iphone 14", "price"=>700]
        ];
        echo "Product Name: " . $products[2]["pro_name"] . "<br>";
        echo "Product Price: " . $products[2]["price"] . "<br>";

        $persons = [
            "person1"=>["name"=>"John", "age"=>30, "city"=>"New York"],
            "person2"=>["name"=>"Jane", "age"=>25, "city"=>"Los Angeles"],
            "person3"=>["name"=>"Mike", "age"=>35, "city"=>"Chicago"]
        ];
        echo "Person Name: " . $persons["person1"]["name"] . "<br>";
        echo "Person Age: " . $persons["person1"]["age"] . "<br>";
        echo "Person City: " . $persons["person1"]["city"] . "<br>";
    ?>
</body>
</html>