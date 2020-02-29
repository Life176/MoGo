
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
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Buy page</title>
    </head>
    <body>
    <?php
        if(!isset($_COOKIE['logined']))
        {
            echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://localhost/assets/php/login.php\">";
        }
    ?>
    <form action="../../assets/php/pay.php" method="POST">
        <input class="btn" type="submit" name="buy" id="btn" value="Buy"/>
    </form>
    </body>
</html>




