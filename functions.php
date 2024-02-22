<?php
    // создаем вебхук, чтобы функция add_scripts_and_styles запускалась при старте. wp_enqueue_scripts - запуск при старте
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' ); 
    // создаем вебхук, чтобы подключать фичи после after_setup_theme
    add_action( 'after_setup_theme', 'add_features' ); 
    // создаем хук, чтобы выводить меню из админки
    add_action( 'after_setup_theme', 'add_menu' ); 
    function add_scripts_and_styles() {
    // проверяем если страница портфолио, то включаем галерею
        if (is_page_template( 'templates/portfolio.php' ) || is_single()) {
            wp_enqueue_style( 'baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css' );
            wp_enqueue_script( 'baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', null, null, true);
        }
        if (is_page_template( 'templates/contacts.php' )) {
            wp_enqueue_script( 'list', get_template_directory_uri() . '/assets/js/list.min.js', null, null, true);
        }
        if (is_category( 'doors' )) {
            wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', null, null, true);
        }
        // Подключили спомощью стандартной функции вордпресса наш стайл.css (get_stylesheet_uri)
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    function add_features() {
        // разблокировали возможность выбора миниатюры изображения, в аррэй указали где разблокировали
        add_theme_support( 'post-thumbnails', array ('post') );
        // добавили возможность из админки менять логотип
        add_theme_support( 'custom-logo', [
            'height'      => 50,
            'width'       => 100,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
        ] );
        // регистрируем собственную миниатюру для header-advantages
        add_image_size( 'adv_thumbnail', 100, 100, true );
    }
    // функция, которая регистрирует меню из админки, теперь меню можно выбирать и добавлять из раздела "меню" в админ.панели
    function add_menu() {
        register_nav_menu( 'top', 'Главное меню сайта' );
        register_nav_menu( 'bottom', 'Политика конфиденциальности' );

    }
    add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
    function my_navigation_template($template, $class) {
        return '
        <nav class="navigation %1$s" role="navigation">
            <div class="nav-links">%3$s</div>
        </nav>
        ';
    }
?>
