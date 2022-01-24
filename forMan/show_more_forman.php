<script src="../js/show_more_forman.js"></script>
<?php
session_start();



require_once "../db.php";
$last_id_man = $_SESSION['last_id_man'];
$max_count_forman = $_SESSION['max_count_forman'];
$max_count_forman += 16;
$stmt = $pdo->query("SELECT * FROM sneakersforman WHERE id > $last_id_man");
$count_man = $_SESSION['count_man'];
while ($cart = $stmt->fetch()) {
    $file = $cart['home_img'];
    $file = "imagesdb/" . $file . ".jpg";

    if (file_exists($file) && $count_man < $max_count_forman) {
        $count_man++;
        echo "<ul class ='shop__items'>";
        echo "<li class='sneakers__title' >" . $cart['title'] . "</li>";



        echo "<li class='sneakers__img '>" . "<img class='img_pos' src='imagesdb/$cart[home_img].jpg' alt=''>" . "</li>";
        echo "<li class='sneakers__price' >" . $cart['price'] . "</li>";



        $_GET['id'] = $cart['id'];
        echo "<li class='shop__btn '><a class='shop__link' id='$cart[id]' href='newPage/newPage.php?id=$_GET[id]'>Посмотреть</a></li>";









        echo "</ul>";
        $last_id_man = $cart['id'];
    } else {

        echo "<form id='form' class='show__more'>";
        echo "<input class='show__more-btn' type='submit' value='Показать ещё'>";
        echo "</form>";
        $_SESSION['count_man'] = $count_man;

        $_SESSION['last_id_man'] = $last_id_man;

        $_SESSION['max_count_forman'] = $max_count_forman;


        break;
    }
}

?>