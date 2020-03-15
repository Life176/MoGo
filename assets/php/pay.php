
<?php
include 'pswd.php';

if(!isset($_POST["buy"]))
{
    echo "<script>alert(\"Identify failed! You be reconnected near by 5 seconds.\")</script>";
    echo "<meta http-equiv=\"refresh\" content=\"5;URL=http://localhost/pages/shop.html\">";
    exit();
} elseif(!isset($_POST['ip']) and isset($_POST['name'])) {
    echo "Error! Im don't find your ip! Please, try later!";
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pagesPay.css">
    <title>Pay</title>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <nav class="nav" id="nav">
                    <a class="nav__link" href="../../index.html">
                        <i class="fas fa-arrow-left" aria-hidden="true"></i>
                        To main page
                    </a>
                    <a class="nav__link" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        To Product page
                    </a>
                </nav>
    
                <button class="nav-toggle" id="nav_toggle" type="button">
                    <span class="nav-toggle__item">Menu</span>
                </button>
            </div>
        </div>
    </header>
    <!-- Intro -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__suptitle">Name product</h1>

                <form action="../../assets/php/pay.php" method="POST">
                     <input class="btn" href="#" type="submit" name="buy" id="btn" value="Pay  <?php //Цена товара?>">
                 </form>
            </div>
        </div>
    </div>
    <!-- /.intro -->
</body>
</html>

<?php
    /*if(!isset($_COOKIE['logined']))
    {
        echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/login.php\">";
    }*/
?>
