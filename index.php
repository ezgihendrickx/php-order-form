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
$emailisavailable = isset($_POST["email"]);
if ($emailisavailable) {
    var_dump($_POST["email"]);
} else {
    // do nothing
};
$streetisavailable = isset($_POST["street"]);
if ($streetisavailable) {
    var_dump($_POST["street"]);
} else {
    # code... // do nothing
};
$streetnumberisavailable = isset($_POST["streetnumber"]);
if ($streetnumberisavailable) {
    var_dump($_POST["streetnumber"]);
} else {
    //do nothing
};
$cityisavailable = isset($_POST["city"]);
if ($cityisavailable) {
    var_dump($_POST["city"]);
} else {
    //do nothing
};
$zipcodeisavailable = isset($_POST["zipcode"]);
if ($zipcodeisavailable) {
    var_dump($_POST["zipcode"]);
} else {
    //do nothing
};

//whatIsHappening();
// define variables and set to empty values

$email = $street = $streetnumber = $city = $zipcode = "";
$emailErr = $streetErr = $streetnumberErr = $cityErr = $zipcodeErr = "";
// Validate and check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = $_POST["email"];
        //check if email adress well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        };
    };

    if (empty($_POST["street"])) {
        $streetErr = "Street name is required";
    } else {
        $street = $_POST["street"];
    };

    if (empty($_POST["streetnumber"])) {
        $streetnumberErr = "Street number is required";
    } else {
        $streetnumber = $_POST["streetnumber"];
        if (!preg_match("/^[0-9]*$/", $streetnumber)) {
            $streetnumberErr = "Please use only numbers";
        }
    };
    if (empty($_POST["city"])) {
        $cityErr = "city is required";
    } else {
        $city = $_POST["street"];
    };
    if (empty($_POST["zipcode"])) {
        $zipcodeErr = "zipcode is required";
    } else {
        $zipcode = $_POST["zipcode"];
        if (!preg_match("/^[0-9]*$/", $zipcode)) {
            $zipcodeErr = "Please use only numbers";
        }
    };
};
echo $emailErr;
echo $streetErr;
echo $streetnumberErr;
echo $cityErr;
echo $zipcodeErr;

require 'form-view.php';
