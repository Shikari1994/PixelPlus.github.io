<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/main.css">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php $APPLICATION->ShowHead(); ?>
    
</head>
<body>
    <?php $APPLICATION->ShowPanel(); ?>
    <header>
        <div class="container">
            <nav>
                <div class="nav_menu">
                    <div class="nav_menu_logo">
                        <a href="/"> <img class="logo" src="<?= SITE_TEMPLATE_PATH ?>/img/Логотип.png" alt="olologo"></a>
                    </div>
                    <div class="nav_menu_list">
                        <div class="nav_menu_item"><a class="nav_menu_link" href="/">Главная</a></div>
                        <div class="nav_menu_item"><a class="nav_menu_link" href="/promotions/">Акции</a></div>
                        <div class="nav_menu_item"><a class="nav_menu_link" href="/about/">О нас</a></div>
                        <button class="nav_menu_button">
                            <img class="nav_menu_basket_img" src="<?= SITE_TEMPLATE_PATH ?>/img/Кнопка _Корзина_.png" alt="basket">
                        </button>
                    </div>
                </div>
            </nav>
            <div class="header_inner">
                <div class="hero_list">
                    <h1 class="hero_list_title">Быстрая доставка для Вас</h1>
                    <p class="hero_list_text">Сделай первый заказ и получи скидку 50%</p>
                    <button class="hero_list_btn">Заказать</button>
                </div>
                <div class="hero_img">
                    <img class="hero_img" src="<?= SITE_TEMPLATE_PATH ?>/img/Фото _Бургер_.png" alt="burger">
                </div>
            </div>
        </div>
    </header>
