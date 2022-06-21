<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: darkblue;
        color: white;
        font-family: Geneva, Verdana, sans-serif;
        font-size: 40px;
        text-decoration: underline;
        text-shadow: 2px 1px black;
        text-align: center;
    }
</style>

<body>
    <?php
    require "classes/figuur.class.php";
    require "classes/vierkant.class.php";
    require "classes/cilinder.class.php";
    require "classes/cirkel.class.php";

    $obj = new Vierkant(4);
    echo $obj->berekenOppervlakte(3) . "<br>";

    $obj2 = new Cilinder(10, 3);
    echo $obj2->berekenOppervlakte(10, 3) . "<br>";

    $obj3 = new Cirkel(10, 3);
    echo $obj3->berekenOppervlakte(5) . "<br>";
    ?>

</body>

</html>