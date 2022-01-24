<script src="../js/show_more_forwoman.js"></script>
<?php
session_start();



require_once "../db.php";
$last_id_woman = $_SESSION['last_id_woman'];
$max_count_forwoman = $_SESSION['max_count_forwoman'];
$max_count_forwoman += 16;
$stmt = $pdo->query("SELECT * FROM sneakersforwoman WHERE id > $last_id_woman");
$count_woman = $_SESSION['count_woman'];
while ($row = $stmt->fetch()) {
    $file = $row['home_img'];
    $file = "../../imagesdb/" . $file . ".jpg";

    if (file_exists($file) && $count_woman < $max_count_forwoman) {
        $count_woman++;
        echo "<ul class ='shop__items'>";
        echo "<li class='sneakers__title' >" . $row['title'] . "</li>";



        echo "<li class='sneakers__img '>" . "<img class='img_pos' src='imagesdb/$row[home_img].jpg' alt=''>" . "</li>";
        echo "<li class='sneakers__price' >" . $row['price'] . "</li>";

        $_GET['id'] = $row['id'];
        echo "<li class='shop__btn '><a class='shop__link' id='$row[id]' href='newPage/newPage.php?id=$_GET[id]'>Посмотреть</a></li>";
        
        echo "</ul>";
        $last_id_woman = $row['id'];
    } else {

        echo "<form id='form' class='show__more'>";
        echo "<input class='show__more-btn' type='submit' value='Показать ещё'>";
        echo "</form>";
        $_SESSION['count_woman'] = $count_woman;

        $_SESSION['last_id_woman'] = $last_id_woman;

        $_SESSION['max_count_forwoman'] = $max_count_forwoman;


        break;
    }
}

?>