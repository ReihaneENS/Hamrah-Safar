<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" type="text/css">
    <link rel="icon" href="assets/images/logo-main.png">
    <title>نقشه ایران</title>
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
                                    <a href="FilterCities.php">تهران</a>
                                    <a href="FilterCities.php">مشهد</a>
                                    <a href="FilterCities.php">زنجان</a>
                                    <a href="FilterCities.php">تبریز</a>
                                    <a href="FilterCities.php">اصفهان</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php">شیراز</a>
                                    <a href="FilterCities.php">ماسال</a>
                                    <a href="FilterCities.php">ارومیه</a>
                                    <a href="FilterCities.php">بندر عباس</a>
                                    <a href="FilterCities.php">کیش</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php">قشم</a>
                                    <a href="FilterCities.php">کرمان</a>
                                    <a href="FilterCities.php">یزد</a>
                                    <a href="FilterCities.php">اراک</a>
                                    <a href="FilterCities.php">اردبیل</a>
                                </li>
                                <li>
                                    <a href="FilterCities.php">ماسوله</a>
                                    <a href="FilterCities.php">رامسر</a>
                                    <a href="FilterCities.php">کرمانشاه</a>
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
                <li><a href="IranMap.html">نقشه ایران</a></li>
                <li class="log-reg">
                    <a href="Login.php">ورود</a>
                    <span>|</span>
                    <a href="Register.php">عضویت</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="map-wrapper">
    <div class="inner-map">
        <div class="title">
            <h4>روی استان مورد نظر خود کلیک کنید.</h4>
        </div>
        <img src="assets/images/Iran-map.png" alt="iran-map" usemap="#image-map">

        <map name="image-map">
            <area target="_self" alt="Esfahan" title="Esfahan" href="FilterCities.php"
                  coords="271,281,295,281,317,270,333,258,335,241,333,233,310,231,288,231,274,228,255,224,235,216,219,218,203,219,203,229,196,239,185,245,171,249,166,260,156,269,151,278,163,284,175,284,190,280,195,287,200,298,203,305,203,317,203,328,203,338,207,348,215,356,219,341,220,335,215,327,226,325,236,323,246,324,254,323,254,312,254,300,257,290,261,285"
                  shape="poly">
            <area target="_self" alt="Yazd" title="Yazd" href="FilterCities.php"
                  coords="341,234,349,231,353,222,358,214,369,209,389,207,399,199,405,211,394,219,387,234,385,248,391,254,399,261,406,277,413,289,417,299,408,308,394,308,378,308,361,317,350,326,348,339,311,347,307,358,311,370,311,390,295,377,283,360,277,337,262,325,261,308,261,293,278,287,302,287,319,276,335,261"
                  shape="poly">
            <area target="_self" alt="Kerman" title="Kerman" href="FilterCities.php"
                  coords="382,314,363,320,354,332,348,345,333,348,316,352,312,367,312,384,310,404,327,408,333,420,347,426,362,420,361,432,362,444,375,452,386,446,395,453,403,465,406,480,409,494,421,498,431,498,439,504,455,504,450,485,455,454,451,439,466,432,463,418,469,408,459,392,464,360,453,341"
                  shape="poly">
            <area target="_self" alt="Tehran" title="Tehran" href="FilterCities.php"
                  coords="228,194,197,186,195,174,203,163,215,156,228,160,235,168,248,162,259,163,263,172,253,182,240,175,225,174"
                  shape="poly">
            <area target="_self" alt="Zanjan" title="Zanjan" href="FilterCities.php"
                  coords="137,117,122,109,109,112,95,119,90,133,107,138,109,147,111,158,124,163,129,167,137,153,149,149,146,143,136,135,144,127"
                  shape="poly">
            <area target="_self" alt="Mashhad" title="Mashhad" href="FilterCities.php"
                  coords="379,138,376,157,392,170,385,187,370,196,363,204,378,205,393,194,407,204,411,215,407,225,417,223,425,227,445,227,483,235,503,215,496,211,509,195,505,134,484,132,459,114,450,99,423,95,423,118,412,137,379,129"
                  shape="poly">
            <area target="_self" alt="Mazandaran" title="Mazandaran" href="FilterCities.php"
                  coords="264,164,283,160,295,137,264,128,222,135,193,124,183,130,195,142,213,153,231,156,241,160,256,159"
                  shape="poly">
            <area target="_self" alt="Hamedan" title="Hamedan" href="FilterCities.php"
                  coords="110,164,106,169,114,190,98,190,99,196,105,203,99,215,112,226,129,222,138,224,131,207,139,196,151,195,151,187,151,174,115,168"
                  shape="poly">
            <area target="_self" alt="Gilan" title="Gilan" href="FilterCities.php"
                  coords="185,121,183,130,161,134,139,109,128,82,136,65,146,94,157,104,170,102" shape="poly">
            <area target="_self" alt="Arak" title="Arak" href="FilterCities.php"
                  coords="184,173,157,181,156,199,147,200,136,210,142,219,136,234,152,232,168,246,190,239,199,229,183,224,167,215,173,202,188,196,194,182"
                  shape="poly">
            <area target="_self" alt="Kermanshah" title="Kermanshah" href="FilterCities.php"
                  coords="55,182,41,196,33,207,27,226,31,235,41,222,59,226,68,230,82,226,92,218,99,208,89,202,98,194,87,187,75,193,64,196"
                  shape="poly">
            <area target="_self" alt="Shiraz" title="Shiraz" href="FilterCities.php"
                  coords="236,324,222,332,215,362,202,366,184,382,195,387,213,402,223,430,253,480,285,488,289,476,311,473,327,474,339,467,339,451,335,439,326,432,327,417,319,408,311,406,306,392,292,388,291,382,279,361,267,334,247,327"
                  shape="poly">
            <area target="_self" alt="Qom" title="Qom" href="FilterCities.php"
                  coords="202,191,198,194,179,205,176,211,196,225,219,212,229,197,214,193" shape="poly">
            <area target="_self" alt="Khuzestan" title="Khuzestan" href="FilterCities.php"
                  coords="106,269,90,296,94,310,90,337,101,340,98,365,114,383,122,375,127,364,138,375,162,366,170,357,158,343,164,326,166,311,154,286,127,270"
                  shape="poly">
            <area target="_self" alt="Tabriz" title="Tabriz" href="FilterCities.php"
                  coords="85,34,66,40,44,37,30,57,42,68,43,83,48,89,47,96,40,102,62,119,75,112,88,121,96,110,110,107,115,97,107,78,97,69,91,51"
                  shape="poly">
            <area target="_self" alt="Ardebil" title="Ardebil" href="FilterCities.php"
                  coords="110,16,88,29,93,37,103,38,97,57,106,68,113,79,119,99,133,106,127,85,131,65,118,53,114,43,126,37,122,20"
                  shape="poly">
            <area target="_self" alt="Semnan" title="Semnan" href="FilterCities.php"
                  coords="335,130,319,132,304,143,290,152,275,168,267,172,259,181,247,184,233,180,232,195,234,209,256,220,292,221,328,226,343,227,363,195,379,181,387,171,374,163,372,140,357,134,355,124,345,109"
                  shape="poly">
        </map>
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