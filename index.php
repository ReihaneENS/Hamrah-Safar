<?php
$link = mysqli_connect("localhost", "root", "", "hamrahsafardb");

if (mysqli_connect_errno()) {
    die("خطا در برقراری ارتباط با دیتابیس !:" .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
    );
}/*else {
    echo("<p style='color:white; padding:20px 50px; font-size:20px; width:900px; border-radius:20px; background-color:green; text-align:center; margin: 0 auto; direction:rtl;'><b> اتصال موفقیت آمیز </b></p>");
}*/
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="icon" href="assets/images/logo-main.png">
    <title>خانه</title>
</head>
<body>
<?php
$sql = "SELECT * FROM restaurants";
$result = $link->query($sql);
?>
<div class="banner">
    <?php
    include('HeaderMain.php');
    ?>
    <main class="container">
        <div class="inner-title">
            <section class="animation">
                <div class="first">
                    <div>تهران</div>
                </div>
                <div class="second">
                    <div>اصفهان</div>
                </div>
                <div class="third">
                    <div>سراسر ایران</div>
                </div>
            </section>
            <p class="main-title">همراه سفر، همراه شما در </p>
        </div>
        <div class="sign-up-now">
            <a href="#">عضو شوید</a>
            <p>برای دریافت خدمات ویژه، همین حالا</p>
        </div>
        <div class="go-down">
            <a href="#body"><i class="fa-regular fa-circle-down"></i></a>
        </div>
    </main>
</div>
<div class="body-content" id="body">
    <div class="special-offers-wrapper">
        <div class="section-title">
            <h3>پیشنهادات ویژه در تهران</h3>
        </div>
        <div class="special-offers-content">
            <?php
            if (mysqli_num_rows($result) == 0){
                ech('no records');
            }else{
                // our query returned at least one result. loop over results and do stuff.
                while($row = mysqli_fetch_assoc($result)){
                    //do something with the contents of $row
                    echo '<div class="box">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="assets/images/moslem.jpg" alt="رستوران مسلم">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <div class="section">
                                                        <p>رستوران مسلم</p>
                                                        <i class="fa-solid fa-utensils"></i>
                                                    </div>
                                                    <div class="section">
                                                        <p>بازار 15 خرداد</p>
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </div>
                                                    <div class="section">
                                                        <a href="tel:+021-55899834">۰۲۱-۵۵۸۹۹۸۳۴</a>
                                                        <i class="fa-solid fa-phone"></i>
                                                    </div>
                                                    <div class="section">
                                                        <a href="https://moslemrestaurant.ir/">وبسایت رستوران</a>
                                                        <i class="fa-solid fa-link"></i>
                                                    </div>
                                                </div>
                                                <div class="more">
                                                    <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                                                </div>
                                            </div>';
                }
            }
            ?>
            <!--            <div class="box">
                            <div class="image">
                                <a href="#">
                                    <img src="assets/images/shandiz.jpg" alt="رستوران شاندیز">
                                </a>
                            </div>
                            <div class="info">
                                <div class="section">
                                    <p> رستوران شاندیز جردن</p>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="section">
                                    <p>جردن</p>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="section">
                                    <a href="tel:+021-75313">۰۲۱-۷۵۳۱۳</a>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="section">
                                    <a href="https://shandizjordan.com/">وبسایت رستوران</a>
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                            <div class="more">
                                <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <a href="#">
                                    <img src="assets/images/senso.jpg" alt="رستوران سنسو">
                                </a>
                            </div>
                            <div class="info">
                                <div class="section">
                                    <p>رستوران ایتالیایی سنسو</p>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="section">
                                    <p>بلوار فردوس</p>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="section">
                                    <a href="tel:+021-44020103">۰۲۱-۴۴۰۲۰۱۰۳</a>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="section">
                                    <a href="https://www.instagram.com/accounts/login/?next=/senso_restaurant/">صفحه اینستاگرام
                                        رستوران</a>
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                            <div class="more">
                                <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <a href="#">
                                    <img src="assets/images/nayeb.jpg" alt="رستوران نایب">
                                </a>
                            </div>
                            <div class="info">
                                <div class="section">
                                    <p>رستوران نایب</p>
                                    <i class="fa-solid fa-utensils"></i>
                                </div>
                                <div class="section">
                                    <p>خیابان ولیعصر</p>
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="section">
                                    <a href="tel:+021-88713474">۰۲۱-۸۸۷۱۳۴۷۴</a>
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="section">
                                    <a href="https://nayebsaei.com/">وبسایت رستوران</a>
                                    <i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                            <div class="more">
                                <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                            </div>
                        </div>-->
        </div>
    </div>
    <div class="main-search">
        <form action="#">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" name="text" placeholder="نام شهر را جست و جو کنید">
        </form>
    </div>
    <div class="special-offers-wrapper">
        <div class="section-title">
            <h3>پیشنهادات ویژه در مشهد</h3>
        </div>
        <div class="special-offers-content">
            <div class="box">
                <div class="image">
                    <a href="#">
                        <img src="assets/images/pesaran-karim.jpg" alt="رستوران پسران کریم">
                    </a>
                </div>
                <div class="info">
                    <div class="section">
                        <p>رستوران پسران کریم</p>
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <div class="section">
                        <p>بلوار خیام</p>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="section">
                        <a href="tel:+05138491208">۰۵۱۳۸۴۹۱۲۰۸</a>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="section">
                        <a href="https://www.instagram.com/accounts/login/?next=/pesaranekarim">صفحه اینستاگرام
                            رستوران</a>
                        <i class="fa-solid fa-link"></i>
                    </div>
                </div>
                <div class="more">
                    <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <a href="#">
                        <img src="assets/images/taranom-terme.jpg" alt="رستوران ترنم و ترمه">
                    </a>
                </div>
                <div class="info">
                    <div class="section">
                        <p> رستوران رستوران ترنم و ترمه</p>
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <div class="section">
                        <p>خیابان امام رضا</p>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="section">
                        <a href="tel:+05138038">۰۵۱۳۸۰۳۸</a>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="section">
                        <a href="https://www.instagram.com/accounts/login/?next=/Ghasrtalaeehotel">صفحه اینستاگرام
                            رستوران</a>
                        <i class="fa-solid fa-link"></i>
                    </div>
                </div>
                <div class="more">
                    <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <a href="#">
                        <img src="assets/images/moein-darbari.jpg" alt="رستوران معین درباری">
                    </a>
                </div>
                <div class="info">
                    <div class="section">
                        <p>رستوران معین درباری</p>
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <div class="section">
                        <p> بین میدان تلویزیون و میدان پارک</p>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="section">
                        <a href="tel:+05138783777">۰۵۱۳۸۷۸۳۷۷۷</a>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="section">
                        <a href="https://www.instagram.com/accounts/login/?next=/moeindarbari_mashhad">صفحه اینستاگرام
                            رستوران</a>
                        <i class="fa-solid fa-link"></i>
                    </div>
                </div>
                <div class="more">
                    <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <a href="#">
                        <img src="assets/images/rastgoo.jpg" alt="رستوران راستگو مشهد">
                    </a>
                </div>
                <div class="info">
                    <div class="section">
                        <p>رستوران راستگو مشهد</p>
                        <i class="fa-solid fa-utensils"></i>
                    </div>
                    <div class="section">
                        <p>بلوار وکیل آباد</p>
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="section">
                        <a href="tel:+05136016696">۰۵۱۳۶۰۱۶۶۹۶</a>
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="section">
                        <a href="https://www.instagram.com/accounts/login/?next=/viprastgoo">صفحه اینستاگرام رستوران</a>
                        <i class="fa-solid fa-link"></i>
                    </div>
                </div>
                <div class="more">
                    <a href="SpecificRestaurant.html">جزئیات بیشتر</a>
                </div>
            </div>
        </div>
    </div>
    <div class="city-wrapper">
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/tehran.jpg" alt="">
            </div>
            <div class="name">
                <h4>تهران</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/shiraz.png" alt="">
            </div>
            <div class="name">
                <h4>شیراز</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/mshhad.jpg" alt="">
            </div>
            <div class="name">
                <h4>مشهد</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/tabriz.jpg" alt="">
            </div>
            <div class="name">
                <h4>تبریز</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/esfahan.jpg" alt="">
            </div>
            <div class="name">
                <h4>اصفهان</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/yazd.jpg" alt="">
            </div>
            <div class="name">
                <h4>یزد</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/masal.png" alt="">
            </div>
            <div class="name">
                <h4>ماسال</h4>
            </div>
        </a>
        <a href="#" class="city">
            <div class="img">
                <img src="assets/images/kish.jpg" alt="">
            </div>
            <div class="name">
                <h4>کیش</h4>
            </div>
        </a>
    </div>
</div>
<footer>
    <div class="footer-content">
        <p>تمامی حقوق سایت محفوظ است.</p>
        <div class="logo">
            <a href="#"><img src="assets/images/logo-main.png" alt="logo"></a>
        </div>
    </div>
</footer>
<script src="assets/fontawesome/js/all.min.js"></script>
</body>
</html>