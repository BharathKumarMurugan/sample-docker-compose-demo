<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docker Compose Demo</title>
</head>
<body>
    <h2>List of Products</h2>
    <ul>
        <?php
        
        $json = file_get_contents('http://product-service/');
        $obj = json_decode($json);

        $products = $obj->products;

        foreach ($products as $item){
            echo "<li>$item</li>";
        }

        ?>
    </ul>
</body>
</html>
