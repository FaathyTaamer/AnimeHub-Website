<?php

include 'conn.php';
if(isset($_POST['submit'])){
    $filter_name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($mysqli,$filter_name);
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $email = mysqli_real_escape_string($mysqli,$filter_email);
    $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $pass = mysqli_real_escape_string($mysqli,$filter_pass);
    $filter_cpass = filter_var($_POST['Confirmpass'], FILTER_SANITIZE_STRING);
    $cpass = mysqli_real_escape_string($mysqli,$filter_cpass);
    $select_users = mysqli_query($mysqli, "SELECT * FROM user WHERE emailo = '$email' ") or die('query failed');
    if (mysqli_num_rows($select_users) > 0) {
        $message [] = 'Email already exist!' ;

    }else{
        
        if(strlen($name)<6){

            $message[] = 'Please Entar valid name!' ;

        } 
        elseif(strlen($name)>25){

            $message[] = 'Enter the first and second name only!' ;

        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $message[] = 'Please Entar valid email !';

        }
    elseif ( strlen($pass)<8 ) {

        $message[] = 'Enter at least 8 numbers in the password  !';

    }
        elseif($pass != $cpass){

            $message[] = 'confirm password not matched!' ;

        } else{
        mysqli_query($mysqli ,"INSERT INTO user( nameo ,emailo, passwordo)
        VALUES('$name' , '$email' , '$pass') ") or die('query failed');

        header('location:Login.php');

    }


    }
}

?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../../img/fav-icon.png" type="image/x-icon">
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
                <form method="POST" action="">
                <?php

                if(isset( $message)){
        foreach($message as $message){

            echo '<span class="error-msg">'.$message.'</span>';
        }
    }
    ?>
                    <div class="input__warp">
                        <input type="text" placeholder="أسمك" required name="username">
                    </div>
                    <div class="input__warp">
                        <input type="text" placeholder="البريد الالكتروني" required name="email">
                    </div>
                    <div class="input__warp">
                        <input type="password" placeholder="كلمه المرور" required name="password">
                    </div>
                    <div class="input__warp">
                        <input type="password" placeholder="كلمه المرور مره أخري" required name="Confirmpass">
                    </div>
                    <div class="input__warp">
                        <input type="submit" name="submit" value="سجل الأن">
                    </div>
                    <div class="support">
                        <div class="remeber">
                            <span><input type="checkbox"></span>
                            <span>تذكرني</span>
                        </div>
                        <div class="need__help">
                            <a href="Login.php">                         لديك حساب بلفعل؟
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>