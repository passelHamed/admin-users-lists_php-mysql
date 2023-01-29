<?php


include 'header.php';
Session::CheckLogin();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "database/connection.php";
    $users = new Database();
    
    $register = $users->userRegistration($_POST);
}

if (isset($register)) {
    echo $register;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="main1.css">
</head>
<body>
    




<div class="container mt-3" style="max-width: 600px">
    <div class="section">
        <h2>Sign Up</h2>
        <br>
        <form method="POST">
            <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="fullName">Full Name</label><br>
                <input id="fullName" name="name" class="form-control" placeholder="Your Full Name" type="text">
                <!-- <span class="error"></span> -->
            </div>
            <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="UserName">User Name</label><br>
                <input id="UserName" name="userName" class="form-control" placeholder="Your User Name" type="text" >
                <!-- <span class="error"></span> -->
            </div>
            <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="email">Email</label><br>
                <input id="email" name="email" class="form-control" placeholder="Your Email">
                <!-- <span class="error"></span> -->
            </div>
            <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="password">Password</label><br>
                <input type="password" name="password" class="form-control" placeholder="Your password">
                <input type="hidden" name="roleId" value="3" class="form-control">
                <!-- <span class="error"></span> -->
            </div>
            <br>
            <button class="btn btn-primary mt-2">Sign Up</button>
        </form>
    </div>
</div>




</body>
</html>


