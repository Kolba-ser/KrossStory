<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="newPageWoman.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KROSS-STORY</title>
</head>

<body>
    <?php
    require_once " ../../db.php";


    $id = $_GET['id'];
    $row = $pdo->query("SELECT * FROM sneakersforwoman WHERE id = $id");
    $row = $row->fetch();

    ?>
    <div class="this-pair">
        <div class="container">
            <div class="this-pair__color">
                <div class="slider">
                    <div class="slider__item">
                        <img class="slider__img" data-lazy="../more_Photo/<?php echo $row['img_1'] ?>.jpg" alt="">
                    </div>
                    <div class="slider__item">
                        <img class="slider__img" data-lazy="../more_Photo/<?php echo $row['img_2'] ?>.jpg" alt="">
                    </div>
                    <div class="slider__item">
                        <img class="slider__img" data-lazy="../more_Photo/<?php echo $row['img_3'] ?>.jpg" alt="">
                    </div>
                    <div class="slider__item">
                        <img class="slider__img" data-lazy="../more_Photo/<?php echo $row['img_4'] ?>.jpg" alt="">
                    </div>
                </div>
                <div class="this-page__price"><span class="this-page__price_line"><?php echo $row['price'] ?> ₽</span></div>
                <div class="goods__code"><span class="goods__code_line">#<?php echo $row['code'] ?></span></div>
                <div class="slidermin___pos">
                    <div class="slidermin">
                        <div class="slidermin__item">
                            <img class="slidermin__img" data-lazy="../more_Photo/<?php echo $row['img_1'] ?>.jpg" alt="">
                        </div>
                        <div class="slidermin__item">
                            <img class="slidermin__img" data-lazy="../more_Photo/<?php echo $row['img_2'] ?>.jpg" alt="">
                        </div>
                        <div class="slidermin__item">
                            <img class="slidermin__img" data-lazy="../more_Photo/<?php echo $row['img_3'] ?>.jpg" alt="">
                        </div>
                        <div class="slidermin__item">
                            <img class="slidermin__img" data-lazy="../more_Photo/<?php echo $row['img_4'] ?>.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="this-page__dscr-size">
                    <div class="this_page__size">
                        <div class="size__word">
                            Размеры в наличии
                        </div>
                        <ul class="this-page__size-items">
                            <?php
                            $size = $pdo->query("SELECT * FROM woman_size WHERE sneakerswoman_id = $id");
                            $size = $size->fetch();
                            if ($size['size_34'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_34'] . "</li>";
                            }
                            if ($size['size_35'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_35'] . "</li>";
                            }
                            if ($size['size_36'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_36'] . "</li>";
                            }
                            if ($size['size_37'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_37'] . "</li>";
                            }
                            if ($size['size_38'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_38'] . "</li>";
                            }
                            if ($size['size_39'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_39'] . "</li>";
                            }
                            if ($size['size_40'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_40'] . "</li>";
                            }
                            if ($size['size_41'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_41'] . "</li>";
                            }
                            if ($size['size_42'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_42'] . "</li>";
                            }
                            if ($size['size_43'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_43'] . "</li>";
                            }
                            if ($size['size_44'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_44'] . "</li>";
                            }
                            if ($size['size_45'] != '') {
                                echo "<li class='this-page__size-item'>" . $size['size_45'] . "</li>";
                            }

                            ?>
                        </ul>

                    </div>

                </div>

                <div class="warranty">
                    <div class="warranty__all_dscr">
                        <div class="warranty__title">Гарантии</div>
                        <div class="warranty__dscr">
                            <ul class="warranty__dscr-items">
                                <li class="warranty__dscr-item">✔ Мы предоставим детальные обзоры любой модели.</li>
                                <li class="warranty__dscr-item">✔ Вы можете позвонить нам по видеосвязи и убедиться сами, что товар есть в наличии.</li>
                                <li class="warranty__dscr-item">✔ Если вы с Краснодара, оплата при получении.</li>
                                <li class="warranty__dscr-item">✔ Гарантия качества / обмен ( 14 дней )</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="order">
                    <div class="order__pos">
                        <div class="order__instruction">
                            <div class="instruction__title">Чтобы заказать ↓</div>
                            <ul class="instruction__items">
                                <li class="instruction__item">1. Сделайте скриншот кроссовок</li>
                                <li class="instruction__item">2. Нажмите на кнопку</li>
                                <li class="instruction__item">3. ...........</li>

                            </ul>
                            <div class="btn__pos"><a class="order__btn" href="#">Закaзать</a></div>
                        </div>

                    </div>
                </div>
            </div>
            <script src="slider/jquery-3.2.1.min.js"></script>
            <script src="slider/slick.min.js"></script>
            <script src="slider/slider.js"></script>
        </div>
    </div>

</body>

</html>