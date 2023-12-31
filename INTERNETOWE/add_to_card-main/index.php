<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        table {
            background: #e0e0e0;
            box-shadow: 12px 12px 24px #bebebe,
                        -12px -12px 24px #ffffff;
        }
        th {
            background: linear-gradient(135deg, #e0e0e0 0%, #bebebe 100%);
            box-shadow: 6px 6px 12px #bebebe,
                        -6px -6px 12px #ffffff;
        }
        td {
            background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
            box-shadow: 6px 6px 12px #bebebe,
                        -6px -6px 12px #ffffff;
        }
        tr:nth-child(even) {
            background: linear-gradient(135deg, #e0e0e0 0%, #bebebe 100%);
            box-shadow: 6px 6px 12px #bebebe,
                        -6px -6px 12px #ffffff;
        }
        tr:nth-child(odd) {
            background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
            box-shadow: 6px 6px 12px #bebebe,
                        -6px -6px 12px #ffffff;
        }
        a {
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: #ff0000;
        }
    </style>
</head>
<body>
 <!-- table of 10 products with add to cart btn working with php-->
    <table>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Add to cart</th>
        </tr>
        <tr>
            <td>Product 1</td>
            <td>100</td>
            <td><a href="add_to_cart.php?id=1">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 2</td>
            <td>200</td>
            <td><a href="add_to_cart.php?id=2">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 3</td>
            <td>300</td>
            <td><a href="add_to_cart.php?id=3">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 4</td>
            <td>400</td>
            <td><a href="add_to_cart.php?id=4">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 5</td>
            <td>500</td>
            <td><a href="add_to_cart.php?id=5">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 6</td>
            <td>600</td>
            <td><a href="add_to_cart.php?id=6">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 7</td>
            <td>700</td>
            <td><a href="add_to_cart.php?id=7">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 8</td>
            <td>800</td>
            <td><a href="add_to_cart.php?id=8">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 9</td>
            <td>900</td>
            <td><a href="add_to_cart.php?id=9">Add to cart</a></td>
        </tr>
        <tr>
            <td>Product 10</td>
            <td>1000</td>
            <td><a href="add_to_cart.php?id=10">Add to cart</a></td>
        </tr>
    </table>
    
    <?php
    if (isset($_COOKIE["koszyk"])){
        $produkty = ($_COOKIE["koszyk"]);
        $produkty = json_decode($produkty, true);
    }else{
        $produkty = array("1" => 0, "2" => 0, "3" => 0, "4" => 1, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, );
        setcookie("koszyk",json_encode($produkty), time() + 864000);
    }

    ?>

    
</body>

</html>