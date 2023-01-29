<?php
    include "header.php";
    Session::CheckLogin();
?>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userLog = $users->userLoginAuthotication($_POST);
}
if (isset($userLog)) {
    echo $userLog;
}

$logout = Session::get('logout');
if (isset($logout)) {
    echo $logout;
}

?>



<div class="container mt-5" style="max-width: 400px">
    <div class="section is-small">
        <h2>Login</h2>
        <form method="POST">
        <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="email">Email</label><br>
                <input id="email" name="email" class="form-control" placeholder="Your Email" type="email">
            </div>
            <div class="field">
                <label class="mt-2 mb-2 fw-bold" for="password">Password</label><br>
                <input id="password" name="password" class="form-control" placeholder="Password" type="password">
            </div>

            <button class="btn btn-primary mt-3">Login</button>
        </form>
    </div>
</div>
