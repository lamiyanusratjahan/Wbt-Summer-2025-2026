<?php
// --- declarations ---
$nameErr = $postalErr = $dobErr = $emailErr = $passwordErr = $countryErr = "";

$name = $postal = $dob = $email = $password = $country = "";

function cleanInput($data) {
 return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 // Full Name
 if (empty($_POST["name"])) {
 $nameErr = "Name is required";
 } 
 else {
 $name = cleanInput($_POST["name"]);
 if (!preg_match("/^[A-za-z' ]*$/", $name)) {
 $nameErr = "Only letters and white space allowed";
 }
 }

 //Postal Code
 if(empty($_POST["postal"])){
    $postalErr = "Postal code is required"
 }
 else{
     $postal = cleanInput($_POST['postal']);

    if (!preg_match("/^[0-9]{4}$/", $postal)) {
            $postalErr = "Enter a 4-digit postal code";
        }
 }

 //Date of Birth
 if(empty($_POST["dob"])){
    $dobErr = "Date of Birth is required"
 }
 else{
       $dob = cleanInput($_POST["dob"]);
        $today = new DateTime();
        $birth = DateTime::createFromFormat("d-m-Y", $dob);

         if (!$birth || $birth->format("d-m-Y") !== $dob) {
            $dobErr = "Enter a valid date in DD-MM-YYYY format";
        } elseif ($birth > $today) {
            $dobErr = "Date of birth cannot be in the future";
        } elseif ($birth->diff($today)->y < 18) {
            $dobErr = "You must be at least 18 years old to register";
        }
 }
 

 // Email
 if (empty($_POST["email"])) {
 $emailErr = "Email is required";
 } 
 else {
 $email = cleanInput($_POST["email"]);
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Enter a valid email address";
 }
 }

 //Password
 if(empty($_POST["password"])){
    $passwordErr = "Enter a password"
}
else{
    $password = $_POST["password"];
    if (strlen($password) < 0) {
        $passwordErr = "Password must be at least 8 characters";

    }
    elseif (!preg_match("/^A-Za_z/", $password) || !preg_match("/^A-Za_z/", $password)) {
           $passwordErr = "Please must be contain at least one letter and one number";
    }
}

//Country
if(empty($_POST["country"])){
    $countryErr = "Select a Country"

else {
    $country = cleanInput($_POST["country"]);
    if (!in_array($country, $countries, true)) {
        $countryErr = "Please select a country";
    }
}
}

}
 
?>
