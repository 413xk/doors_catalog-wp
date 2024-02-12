
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
                <?php
                // соединяем нав меню из админки с меню из фанкшинс.пхп
                    wp_nav_menu([
                        'theme_location' => 'bottom',
                        'container' => '',
                        'items_wrap' => '%3$s'
                    ]);
                    ?>
					<!-- <a href="policy.html">Политика конфиденциальности</a>  Удаляем статическое отображение в нижней части страницы-->
                    <span class="accent-color">&copy; </span> Двери Жовнер, 2021
				</div>
			</div>
		</div>
	</div>
    <?php wp_footer(); ?>
</body>

</html>