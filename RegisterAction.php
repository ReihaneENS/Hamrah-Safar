<!--Inserting A New User In Users Table (Registration)-->
<?php

if (isset($_POST['firstName']) && !empty($_POST['firstName']) &&
    isset($_POST['lastName']) && !empty($_POST['lastName']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
} else
    exit("لطفا همه ی فیلد ها را پر کنید.");


if ($password != $confirmPassword)
    exit("کلمه ی عبور و تکرار آن مشابه نیست.");

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    exit("ایمیل وارد شده صحیح نمی باشد.");

?>

<!--Connecting To DataBase-->
<?php
$link = mysqli_connect("localhost", "root", "", "hamrahsafardb");

if (mysqli_connect_errno()) {
    die("خطا در برقراری ارتباط با دیتابیس !:" .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
    );
} else {
    echo("<p style='color:white; padding:20px 50px; font-size:20px; font-family:shabnam; width:900px; border-radius:20px; background-color:var(--color-main); text-align:center; margin-top:250px; margin-bottom:300px; margin-left:320px; direction:rtl;'><b> اتصال موفقیت آمیز </b></p>");
}
?>

<?php
$insert_query = "INSERT INTO users (first_name,last_name,email,phone_number,password) VALUES ('$firstName','$lastName','$email','$phoneNumber','$password')";
if (mysqli_query($link, $insert_query) === true)
    header("Location: RegistrationSuccessful.php");
else
    header("Location: RegistrationFailed.php");
?>

<?php
mysqli_close($link);
?>
