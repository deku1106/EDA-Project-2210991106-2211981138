<?php

//learn from w3schools.com
//Unset all the server side variables

session_start();

$_SESSION["user"]="";
$_SESSION["usertype"]="";

// Set the new timezone
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');

$_SESSION["date"]=$date;



if($_POST){

    

    $_SESSION["personal"]=array(
        'fname'=>$_POST['fname'],
        'lname'=>$_POST['lname'],
        'address'=>$_POST['address'],
        'nic'=>$_POST['nic'],
        'dob'=>$_POST['dob']
    );


    header("location: create-account.php");




}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">  
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    
</head>
<body>


    <div class="login-wrapper">
        <div class="container animation-slide-up">
            <div class="form-header">
                <p class="header-text">Let's Get Started</p>
                <p class="sub-text">Add Your Personal Details to Continue</p>
            </div>
            
            <form action="" method="POST" class="form-body">
                <div class="form-group">
                    <label class="form-label">Name: </label>
                    <div class="form-row">
                        <input type="text" name="fname" class="input-text" placeholder="First Name" required>
                        <input type="text" name="lname" class="input-text" placeholder="Last Name" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="address" class="form-label">Address: </label>
                    <input type="text" name="address" class="input-text" placeholder="Address" required>
                </div>
                
                <div class="form-group">
                    <label for="nic" class="form-label">NIC: </label>
                    <input type="text" name="nic" class="input-text" placeholder="NIC Number" required>
                </div>
                
                <div class="form-group">
                    <label for="dob" class="form-label">Date of Birth: </label>
                    <input type="date" name="dob" class="input-text" required>
                </div>

                <div class="form-action-row">
                    <input type="reset" value="Reset" class="login-btn btn-primary-soft btn">
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </div>
                
                <div class="form-footer">
                    <label class="sub-text">Already have an account? </label>
                    <a href="login.php" class="hover-link1 non-style-link">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>