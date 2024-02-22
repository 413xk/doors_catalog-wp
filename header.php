<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> Удаляем, потому что подключили фавикон из админки в фанкшинс пхп -->
	<!-- <link rel="stylesheet" href="css/style.css"> удаляем, потому что подключили стили в фанкшинс.пхп -->
	<title>
        <?php
        // Проверяем если страница 404, то выводим тайтл с эхом, если нет, то тайтл страницы
        if (is_404()){
            echo 'Ошибка 404';
        } 
		elseif(is_category( 'doors' )){
			echo single_cat_title();
		}
        else {
            the_title();
        }
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
	<!-- Меню -->
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="logo">
                    <!-- подключаем пхп ,чтобы при нажатии на лого, переходило на домашнюю страницу -->
					<a href="<?= home_url() ?>">
                        <!-- подключаем кастомное лого из админки -->
						<?php the_custom_logo(); ?> 
					</a>
				</div>
				<!-- <ul>
					<li><a href="index.html">Главная</a></li>
					<li><a href="about.html">О компании</a></li>
					<li><a href="catalog.html">Каталог</a></li>
					<li><a href="order.html">На заказ</a></li>
					<li><a href="portfolio.html">Наши работы</a></li>
					<li><a href="contacts.html">Контакты</a></li>
				</ul> Удаляем меню, потому что мы его добавили в админке -->
                <?php
                // соединяем нав меню из админки с меню из фанкшинс.пхп
                wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
				<div class="phone">
					<?php 
						$settings = get_posts([
							'numberposts' => 1,
							'category_name' => 'settings',
							'post_type' => 'post',
						]); 
						foreach($settings as $post){
							setup_postdata($post)
						?>
							<a href="tel:<?= CFS()->get('header_phone_link'); ?>">&#9742; <?= CFS()->get('header_phone'); ?></a>
							<?php
						}
						wp_reset_postdata();
						?>
				</div>
			</div>
		</div>
	</div>
	