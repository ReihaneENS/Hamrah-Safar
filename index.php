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
$sql = "SELECT * FROM restaurants WHERE city='تهران' LIMIT 5";
$result = mysqli_query($link,$sql);
$sql2 = "SELECT * FROM restaurants WHERE city='مشهد' LIMIT 5";
$result2 = mysqli_query($link,$sql2);
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
                echo('no records');
            }else{
                // our query returned at least one result. loop over results and do stuff.
                while($row = $result->fetch_assoc()){
                    //do something with the contents of $row
                    echo ("<div class='box'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='{$row['image']}'>
                                                    </a>
                                                </div>
                                                <div class='info'>
                                                    <div class='section'>
                                                        <p> {$row['title']} </p>
                                                        <i class='fa-solid fa-utensils'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <p>{$row['address']}</p>
                                                        <i class='fa-solid fa-location-dot'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <a href='tel:+{$row['phone']}'>{$row['phone']}</a>
                                                        <i class='fa-solid fa-phone'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <a href='{$row['website']}'>وبسایت رستوران</a>
                                                        <i class='fa-solid fa-link'></i>
                                                    </div>
                                                </div>
                                                <div class='more'>
                                                    <a href='SpecificRestaurant.php'>جزئیات بیشتر</a>
                                                </div>
                                            </div>");
                }
            }
            ?>
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
            <?php
            if (mysqli_num_rows($result2) == 0){
                echo('no records');
            }else{
                // our query returned at least one result. loop over results and do stuff.
                while($row = $result2->fetch_assoc()){
                    //do something with the contents of $row
                    echo ("<div class='box'>
                                                <div class='image'>
                                                    <a href='#'>
                                                        <img src='{$row['image']}'>
                                                    </a>
                                                </div>
                                                <div class='info'>
                                                    <div class='section'>
                                                        <p> {$row['title']} </p>
                                                        <i class='fa-solid fa-utensils'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <p>{$row['address']}</p>
                                                        <i class='fa-solid fa-location-dot'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <a href='tel:+{$row['phone']}'>{$row['phone']}</a>
                                                        <i class='fa-solid fa-phone'></i>
                                                    </div>
                                                    <div class='section'>
                                                        <a href='{$row['website']}'>وبسایت رستوران</a>
                                                        <i class='fa-solid fa-link'></i>
                                                    </div>
                                                </div>
                                                <div class='more'>
                                                    <a href='SpecificRestaurant.php'>جزئیات بیشتر</a>
                                                </div>
                                            </div>");
                }
            }
            ?>
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