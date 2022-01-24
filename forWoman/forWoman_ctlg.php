<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Sneakers</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="forWoman.css">
</head>

<body>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/show_more_forwoman.js"></script>
    <?php
    require_once "../db.php";

    ?>
    <div class="shop">
        <div class="container">
            <div class="shop__inner">
                <?php
                $stmt = $pdo->query("SELECT * FROM sneakersforwoman");
                $count_woman = 0;
                $max_count_forwoman = 16;
                foreach ($stmt as $cart) {

                    $file = "imagesdb/" . $cart['home_img'] . ".jpg";
                    if (file_exists($file) && $count_woman < $max_count_forwoman) {
                        echo "<ul class ='shop__items'>";
                        echo "<li class='sneakers__title' >" . $cart['title'] . "</li>";


                        echo "<li class='sneakers__img '>" . "<img class= 'img_pos'src='imagesdb/$cart[home_img].jpg' alt=''>" . "</li>";
                        echo "<li class='sneakers__price' >" . $cart['price'] . ' ₽' . "</li>";

                        $_GET['id'] = $cart['id'];
                        echo "<li class='shop__btn '><a class='shop__link' id='$cart[id]' href='newPage/newPageWoman.php?id=$_GET[id]'>Посмотреть</a></li>";
                        
                        echo "</ul>";
                        $last_id_woman = $cart['id'];
                        $count_woman++;
                    } else {
                        echo "<form id='form' class='show__more'>";
                        //echo "<button>".'<img src="images\iconfinder_icon-plus-circled_211600.svg" alt="">'."</button>";
                        echo "<input class='show__more-btn' type='submit'>";
                        echo "</form>";
                        $_SESSION['count_woman'] = $count_woman;
                        $_SESSION['last_id_woman'] = $last_id_woman;
                        $_SESSION['max_count_forwoman'] = $max_count_forwoman;
                        break;
                    }
                }


                ?>

            </div>
            <?php


            ?>;
        </div>
    </div>

</body>

</html>