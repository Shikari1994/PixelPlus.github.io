<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

include 'header.php';
?>

<main class="main">
    <h2 class="main-menu_title">Меню</h2>
    <div class="main-menu_list">
        <ul class="main-menu_items">
            <li class="main-menu_item">
                <a href="#" class="main-menu_link">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/Картинка _Бургеры_.png" alt="burgers" class="main-img">
                </a>
                <a href="#" class="main-menu_link">
                    <h3 class="main_title">Бургеры</h3>
                </a>
            </li>
            <!-- Повторите для других элементов -->
        </ul>
    </div>
</main>

<?php include 'footer.php'; ?>
