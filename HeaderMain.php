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
                                    <a href="FilterCities.php?data=تهران">تهران</a>
                                    <a href="FilterCities.php?data=مشهد">مشهد</a>
                                    <a href="FilterCities.php?data=زنجان">زنجان</a>
                                    <a href="FilterCities.php?data=تبریز">تبریز</a>
                                    <a href="FilterCities.php?data=اصفهان">اصفهان</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php?data=شیراز">شیراز</a>
                                    <a href="FilterCities.php?data=ماسال">ماسال</a>
                                    <a href="FilterCities.php?data=ارومیه">ارومیه</a>
                                    <a href="FilterCities.php?data=بندر عباس">بندر عباس</a>
                                    <a href="FilterCities.php?data=کیش">کیش</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php?data=قشم">قشم</a>
                                    <a href="FilterCities.php?data=کرمان">کرمان</a>
                                    <a href="FilterCities.php?data=یزد">یزد</a>
                                    <a href="FilterCities.php?data=اراک">اراک</a>
                                    <a href="FilterCities.php?data=اردبیل">اردبیل</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php?data=ماسوله">ماسوله</a>
                                    <a href="FilterCities.php?data=رامسر">رامسر</a>
                                    <a href="FilterCities.php?data=کرمانشاه">کرمانشاه</a>
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
                <li><a href="AboutUs.php">درباره ما</a></li>
                <li><a href="ContactUs.php">تماس با ما</a></li>
                <li><a href="IranMap.php">نقشه ایران</a></li>
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