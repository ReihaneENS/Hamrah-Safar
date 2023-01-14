<!--Validation-->
<?php
if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['password']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}else
    exit("برخی از فیلد ها مقدار دهی نشده است");
?>

<!--Connecting To DataBase-->
<?php
$link = mysqli_connect("localhost", "root", "", "hamrahsafardb");

if (mysqli_connect_errno()) {
    die("خطا در برقراری ارتباط با دیتابیس !:" .
        mysqli_connect_error() .
        "(" . mysqli_connect_errno() . ")"
    );
}
?>
<!--Login Action-->
<?php
$query = " SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
if($row){
    $_SESSION["state_login"] = true;
    $_SESSION["firstName"] = $row['first_name'];
    $_SESSION["lastName"] = $row['last_name'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["phoneNumber"] = $row['phone_number'];

?>

<?php
    header("Location: LoginSuccessful.php");
}else
    header("Location: LoginFailed.php");
?>

<?php
mysqli_close($link);
?>
