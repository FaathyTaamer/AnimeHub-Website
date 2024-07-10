<?php
include 'conn.php';
session_start();
if(isset($_POST['submit'])){
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($mysqli,$filter_email);
    $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($mysqli,$filter_pass);
    $select_users = mysqli_query($mysqli, "SELECT * FROM user WHERE emailo = '$email' AND passwordo = '$password' ") or die('query failed');

    if (mysqli_num_rows($select_users) > 0){
    $row = mysqli_fetch_array($select_users);
    $_SESSION['name'] = $row['nameo'];
    header('location:../../HTML/Film/Main.php');
}
else{
    $message[] = 'incorrect email or password!' ;
    }
    }


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../../img/fav-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <title>Login-AnimeHub</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <a href="../../HTML/General/Home.php"><img src="../../Media/Logo.png" alt="Logo" height="100px"></a>
            </div>
        </div>
        <div class="login__body">
            <div class="login__box">
                <h2>تسجيل الدخول</h2>
                <form method="POST" action=" ">
                <?php
                if(isset( $message)){
        foreach($message as $message){

            echo '<span class="error-msg">'.$message.'</span>';
        }
    }
    ?>
                    <div class="input__warp">
                        <input id="email" type="text" placeholder="البريد الالكتروني" required name="email" value="">
                    </div>
                    <div class="input__warp">
                        <input id="password" type="password" placeholder="كلمة المرور" required name="password">
                    </div>
                    <div class="input__warp">
                        <input type="submit" name="submit" value="تسجيل الدخول">
                    </div>
                    <div class="support">
                        <div class="remeber">
                            <span><input type="checkbox"></span>
                            <span>تذكرني</span>
                        </div>
                        <div class="need__help">
                            <a href="../../HTML/General/Signup.php">                            تسجيل لأول مره؟
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>