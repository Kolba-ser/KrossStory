<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Sneakers</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="forMan.css">
</head>

<body>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/show_more_forman.js"></script>
    <?php
    require_once "../db.php";

    ?>
    <div class="shop">
        <div class="container">
            <div class="shop__inner">
                <?php
                $stmt = $pdo->query("SELECT * FROM sneakersforman");
                $count_man = 0;
                $max_count_forman = 16;
                foreach ($stmt as $cart) {

                    $file = "imagesdb/" . $cart['home_img'] . ".jpg";
                    if (file_exists($file) && $count_man < $max_count_forman) {
                        echo "<ul class ='shop__items'>";
                        echo "<li class='sneakers__title' >" . $cart['title'] . "</li>";


                        echo "<li class='sneakers__img '>" . "<img class= 'img_pos'src='imagesdb/$cart[home_img].jpg' alt=''>" . "</li>";
                        echo "<li class='sneakers__price' >" . $cart['price'] . ' ₽' . "</li>";

                        
                        
                        
                        
                        
                        
                        $_GET['id'] = $cart['id'];
                        echo "<li class='shop__btn '><a class='shop__link' id='$cart[id]' href='newPage/newPageMan.php?id=$_GET[id]'>Посмотреть</a></li>";
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        echo "</ul>";
                        $last_id_man = $cart['id'];
                        $count_man++;
                    } else {
                        echo "<form id='form' class='show__more'>";
                        //echo "<button>".'<img src="images\iconfinder_icon-plus-circled_211600.svg" alt="">'."</button>";
                        echo "<input class='show__more-btn' type='submit'>";
                        echo "</form>";
                        $_SESSION['count_man'] = $count_man;
                        $_SESSION['last_id_man'] = $last_id_man;
                        $_SESSION['max_count_forman'] = $max_count_forman;
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