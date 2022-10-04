<?php
//Validation for fname ie should not be empty
if(empty($_POST["fname"])){
    die("First Name is required");
} 
//Validation for lname ie should not be empty
if(empty($_POST["lname"])){
    die("Last Name is required");
}
//Validation for email
if(!filter_var($_POST["email"] ,FILTER_VALIDATE_EMAIL  )){
    die("Valid email is required");
}
//Validation for password < * characters
if(strlen($_POST["pswd"]) < 8){
    die("Password must be at least 8 characters");
}
//Validation for password ie one letter
if(!preg_match("/[a-z]/i" , $_POST["pswd"]  )){
    die("Password must contaion at least one letter ");
}
//Validation for password ie must contain at least one number
if(!preg_match("/[0-9]/" , $_POST["pswd"]  )){
    die("Password must contaion at least one number ");
}
//Validation for confirmation of password ie  pswd==cpswd
if($_POST["pswd"] !== $_POST["cpswd"]){
    die("Password must match");
}
//Validation for phone number < 10 digits
//if(strlen($_POST["tel"]) < 10 ){
//    echo(strlen($_POST["tel"]));
//    die("Phone Number must be 10 digits");
//}
//Validation for phone number > 10 digits
//if(strlen($_POST["tel"]) > 10 ){
//    die("Phone Number must be 10 digits");
//}
$password_hash = password_hash($_POST["pswd"] , PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "Insert into user(fname,lname,username,password_hash,email,gender,tel,region)
        values(?,?,?,?,?,?,?,?)" ;

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)){
    die("SQL error:  " . $mysqli->error);
}

$stmt->bind_param("ssssssis",   
                            $_POST["fname"],
                            $_POST["lname"],
                            $_POST["username"],
                            $password_hash,
                            $_POST["email"],
                            $_POST["gender"],
                            $_POST["tel"],
                            $_POST["region"]
);
        
if($stmt->execute()){

    header("Location: sigup_success.html");
    exit;
}
else {
    if($mysqli->errno  === 1062){
        die("Username has already been used");
    }else
    die($mysqli ->error . " " . $mysqli->errno );
}

?>