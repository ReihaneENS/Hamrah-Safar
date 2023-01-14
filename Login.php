<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="icon" href="assets/images/logo-main.png">
    <title>ورود</title>
</head>
<body>
<?php
include('HeaderMain.php');
?>
<div class="form-wrapper">
    <div class="inner-form">
        <div class="title">
            <h3>ورود</h3>
        </div>
        <form action="LoginAction.php" method="post">
            <input type="email" name="email" placeholder="آدرس ایمیل">
            <input type="password" name="password" placeholder="رمز عبور">
            <button type="submit">ورود</button>
            <p>کاربر جدید هستید؟ <a href="Register.php">ثبت نام </a></p>
        </form>
    </div>
</div>

<script src="assets/fontawesome/js/all.min.js"></script>
</body>
</html>