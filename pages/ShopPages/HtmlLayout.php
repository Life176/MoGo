
<!-- 

    TODO: 
    
    1) rename to HtmlLayout.php
    2) on line 59 make a purchase event

 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/pagesShop/HtmlLayout.css">
    <title>MoGo</title>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo" data-scroll="#intro">MoGo</div>
    
                <nav class="nav" id="nav">
                    <a class="nav__link" href="../../index.html">
                        <i class="fas fa-arrow-left" aria-hidden="true"></i>
                        To main page
                    </a>
                    <a class="nav__link" href="../shop.html">
                        <i class="fas fa-shopping-cart"></i>
                        To Shop page
                    </a>
                    <!-- <a class="nav__link" href="#">
                        <i class="fas fa-search"></i>
                        Search
                    </a> -->
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
                <h1 class="intro__suptitle">HTML layout</h1>
                <h2 class="intro__title">Cost: 395$</h2>

                <p class="intro__title-p">
                    You need a PSD layout (you can order it from us),
                    money and a good mood :)
                </p>

                <a class="btn" href="#">
                    Buy <!-- here -->
                </a>
            </div>
        </div>
    </div>
    <!-- /.intro -->
</body>
</html>