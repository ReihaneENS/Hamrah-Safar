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
    <title>شهر ها</title>
</head>
<body>
<?php
include "HeaderMain.php";
?>
<?php
if (isset($_GET["data"])) {
    $city = $_GET["data"];
}
?>
<?php
$sql = "SELECT * FROM restaurants WHERE city= '$city'";
$result = mysqli_query($link, $sql);
?>
<div class="filter-wrapper">
    <div class="inner-filter">
        <div class="content special-offers-content">
            <?php
            if (mysqli_num_rows($result) == 0) {
                echo('no records');
            } else {
                // our query returned at least one result. loop over results and do stuff.
                while ($row = $result->fetch_assoc()) {
                    //do something with the contents of $row
                    echo("<div class='box'>
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
        <div class="sidebar">
            <div class="inner-sidebar">
                <ul>
                    <li>
                        <input type="radio" value="تهران" name="city" id="tehran">
                        <label for="tehran">تهران</label>
                    </li>
                    <li>
                        <input type="radio" value="تبریز" name="city" id="tabriz">
                        <label for="tabriz">تبریز</label>
                    </li>
                    <li>
                        <input type="radio" value="مشهد" name="city" id="mashhad">
                        <label for="mashhad">مشهد</label>
                    </li>
                    <li>
                        <input type="radio" value="شیراز" name="city" id="shiraz">
                        <label for="shiraz">شیراز</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="esfahan">
                        <label for="esfahan">اصفهان</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="yazd">
                        <label for="yazd">یزد</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="kerman">
                        <label for="kerman">کرمان</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="masal">
                        <label for="masal">ماسال</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="kish">
                        <label for="kish">کیش</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="ramsar">
                        <label for="ramsar">رامسر</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="kermanshah">
                        <label for="kermanshah">کرمانشاه</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="bandarabbas">
                        <label for="bandarabbas">بندرعباس</label>
                    </li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="qom">
                        <label for="qom">قم</label></li>
                    <li>
                        <input type="radio" value="تهران" name="city" id="arak">
                        <label for="arak">اراک</label>
                    </li>
                </ul>
            </div>
        </div>
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