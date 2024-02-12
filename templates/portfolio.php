  <?php
	/* 
	Template Name: Примеры работ
	 */  
		get_header(); 
	?>
  <!-- Наши работы -->
  <div class="portfolio" style="background-image: url(img/background.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="gallery">
            <a href="img/portfolio/1.jpg" data-caption="краткое описание изображения 1">
              <img src="img/portfolio/1.jpg" alt="название 1">
            </a>
            <a href="img/portfolio/2.jpg" data-caption="краткое описание изображения 2">
              <img src="img/portfolio/2.jpg" alt="название 2">
            </a>
            <a href="img/portfolio/3.jpg" data-caption="краткое описание изображения 3">
              <img src="img/portfolio/3.jpg" alt="название 3">
            </a>
            <a href="img/portfolio/4.jpg" data-caption="краткое описание изображения 4">
              <img src="img/portfolio/4.jpg" alt="название 4">
            </a>
            <a href="img/portfolio/5.jpg" data-caption="краткое описание изображения 5">
              <img src="img/portfolio/5.jpg" alt="название 5">
            </a>
            <a href="img/portfolio/6.jpg" data-caption="краткое описание изображения 6">
              <img src="img/portfolio/6.jpg" alt="название 6">
            </a>
            <a href="img/portfolio/7.jpg" data-caption="краткое описание изображения 7">
              <img src="img/portfolio/7.jpg" alt="название 7">
            </a>
            <a href="img/portfolio/8.jpg" data-caption="краткое описание изображения 8">
              <img src="img/portfolio/8.jpg" alt="название 8">
            </a>
            <a href="img/portfolio/9.jpg" data-caption="краткое описание изображения 9">
              <img src="img/portfolio/9.jpg" alt="название 9">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<a href="policy.html">Политика конфиденциальности</a> <span class="accent-color">&copy; </span> Двери Жовнер, 2021
				</div>
			</div>
		</div>
	</div>

  <script src="js/baguetteBox.min.js"></script>
  <script>
    // Документация
    // https://github.com/feimosi/baguetteBox.js
    // Инициализация
    window.addEventListener('load', function() {
      baguetteBox.run('.gallery');
    });
  </script>
</body>

</html>