<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/pagesLogin/Login.css">
     <title>MoGo</title>
 </head>
 <body>
    <?php
    if(isset($_POST['reg']))
    {
        if($_POST['regPasswd'] != $_POST['regPasswd2'])
        {
            echo "<script>alert(\"Password don't equal! Pleasy retry!\")</script>";
            echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/register.php\">";
            exit();
        }
        $pswd = $_POST['regPasswd'];
        $hash = password_hash($pswd,  PASSWORD_DEFAULT);
        include "pswd.php";
        $conn = connect();
        $name = $_POST['regName']; 
        $ip = $_SERVER['REMOTE_ADDR'];
        if($conn->query("INSERT INTO persons (ip, name, status, pswd) VALUES ('$ip', '$name', 0, '$hash')") === TRUE)
        {
            echo "<script>alert(\"Account created succesful!\")</script>";
        } else {
            echo "Error: " . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    ?>

    <div class="form">
    <form action='register.php' method="POST">
        <h1>Registration</h1>
        <div class="input-form">
            <input type="text" name="regName" placeholder="Login">
        </div>
        <div class="input-form">
            <input type="password" name="regPasswd" placeholder="Password">
        </div>
        <div class="input-form">
            <input type="password" name="regPasswd2" placeholder="Password again">
        </div>        
        <div class="input-form">
            <input type="submit" name="reg" value="Registrate">
        </div>
        <a href="login.php" class="forget">Have an account? Log in</a>
    </form>
    </div>  
</body>
 </html>