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
<div class="header-wrapper">
    <div class="inner-header">
        <div class="logo-wrapper">
            <a href="#"><img src="assets/images/logo-main.png" alt="logo"></a>
            <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+021-88302135"><p>۰۲۱-۸۸۳۰۲۱۳۵</p></a>
            </div>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="index.php">خانه</a></li>
                <li class="drop-down-parent">
                    <a href="#">شهر ها</a>
                    <div class="drop-down">
                        <div class="inner-list">
                            <ul>
                                <li>
                                    <a href="FilterCities.html">تهران</a>
                                    <a href="FilterCities.html">مشهد</a>
                                    <a href="FilterCities.html">زنجان</a>
                                    <a href="FilterCities.html">تبریز</a>
                                    <a href="FilterCities.html">اصفهان</a>
                                </li>
                                <li>
                                    <a href="FilterCities.html">شیراز</a>
                                    <a href="FilterCities.html">ماسال</a>
                                    <a href="FilterCities.html">ارومیه</a>
                                    <a href="FilterCities.html">بندر عباس</a>
                                    <a href="FilterCities.html">کیش</a>
                                </li>
                                <li>
                                    <a href="FilterCities.html">قشم</a>
                                    <a href="FilterCities.html">کرمان</a>
                                    <a href="FilterCities.html">یزد</a>
                                    <a href="FilterCities.html">اراک</a>
                                    <a href="FilterCities.html">اردبیل</a>
                                </li>
                                <li>
                                    <a href="FilterCities.html">ماسوله</a>
                                    <a href="FilterCities.html">رامسر</a>
                                    <a href="FilterCities.html">کرمانشاه</a>
                                </li>
                            </ul>
                            <ul class="iran-map">
                                <li>
                                    <img src=assets/images/iran.jpg alt="iran">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="AboutUs.html">درباره ما</a></li>
                <li><a href="ContactUs.html">تماس با ما</a></li>
                <li><a href="IranMap.html">نقشه ایران</a></li>
                <?php
                if(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)
                {
                ?>
                <li class="log-reg">
                    <a href="#"><?php echo ("({$_SESSION["firstName"]}) ")?>&nbsp<?php echo ("({$_SESSION["lastName"]}) ")?></a>
                </li>
                    <?php
                }
                else if(!(isset($_SESSION["state_login"])))
                {
                ?>
                <li class="log-reg">
                    <a href="Login.php">ورود</a>
                    <span>|</span>
                    <a href="Register.php">عضویت</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
</body>