<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//your products with their price.
$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
];

$products = [
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];


$totalValue = 0;


// var_dump(isset($_POST["email"]));
// var_dump(isset($emailisavaliable['test']));
$emailisavaliable = isset($_POST["email"]);
if ($emailisavaliable) {
    var_dump($_POST["email"]);
} else {
    // do nothing
}

// whatIsHappening();
// define variables and set to empty values

// $email = $street = $streetnumber = $city = $zipcode = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $email = whatIsHappening($_POST["email"]);
//     $street = whatIsHappening($_POST["street"]);
//     $streetnumber = whatIsHappening($_POST["streetnumber"]);
//     $city = whatIsHappening($_POST["city"]);
//     $zipcode = whatIsHappening($_POST["zipcode"]);
// }
// echo "Your Input:";
// echo $email;
// echo "<br>";
// echo $street;
// echo "<br>";
// echo $streetnumber;
// echo "<br>";
// echo $city;
// echo "<br>";
// echo $zipcode;
// echo "<br>";
// $email = whatIsHappening($_POST["email"]);
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $emailErr = "Invalid email format";
// }

require 'form-view.php';
