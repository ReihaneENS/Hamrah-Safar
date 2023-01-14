<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="icon" href="assets/images/logo-main.png">
    <title>ثبت نام</title>
</head>
<body>
<?php
include('HeaderMain.php');
?>
<div class="form-wrapper">
    <div class="inner-form">
        <div class="title">
            <h3>ثبت نام</h3>
        </div>
        <form action="RegisterAction.php" method="POST">
            <input type="text" name="firstName" placeholder="نام">
            <input type="text" name="lastName" placeholder="نام خانوادگی">
            <input type="text" name="phoneNumber" placeholder="شماره موبایل">
            <input type="email" name="email" placeholder="ایمیل" required>
            <input type="password" name="password" placeholder="رمز عبور" required>
            <input type="password" name="confirmPassword" placeholder="تکرار رمز عبور " required>
            <button type="submit">ثبت نام</button>
            <p>حساب کاربری دارید؟ <a href="Login.php">ورود </a></p>
        </form>
    </div>
</div>

<script src="assets/fontawesome/js/all.min.js"></script>
</body>
</html>