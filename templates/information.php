	<?php
	/* 
	Template Name: Полезная информация
	 */  
		get_header(); 
	?>
  <!-- Полезная информация -->
<div class="information_page">
    <div class="container">
		<!-- Кованная полоса -->
      	<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 8, ARRAY_A )['name']; ?> </h2>
			</div>
      	</div>
			<div class="row information_grid">
				<?php 
					$posts = get_posts( [
						'numberposts' => -1,
						'category' => 8,
						'orderby' => 'title',
						'order' => 'ASC',
						'post_type' => 'post',
						'suppress_filter' => true
					] );
					foreach($posts as $post){
						setup_postdata( $post );
				?>
					<div class="col-3 col-lg-6 col-sm-12">
						<?php the_post_thumbnail( '' ); ?>
						<h3><?php the_title(); ?></h3>
					</div>	
					<?php
					}
					wp_reset_postdata();
					?>
			</div>
		<!-- Ручки -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 13, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 13,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
		<!-- Элементы ковки -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 14, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 14,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
		<!-- Цвет -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 15, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 15,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
		<!-- Рисунок МДФ 10мм -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 16, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 16,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
		<!-- Рисунок МДФ 16мм -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 17, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 17,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
			<!-- Цвета МДФ -->
		<div class="row information_title">
			<div class="col-12">
				<h2><?= get_category( 18, ARRAY_A )['name']; ?> </h2>
			</div>
		</div>
		<div class="row information_grid">
			<?php 
				$posts = get_posts( [
					'numberposts' => -1,
					'category' => 18,
					'orderby' => 'title',
					'order' => 'ASC',
					'post_type' => 'post',
					'suppress_filter' => true
				] );
				foreach($posts as $post){
					setup_postdata( $post );
			?>
				<div class="col-3 col-lg-6 col-sm-12">
					<?php the_post_thumbnail( '' ); ?>
					<h3><?php the_title(); ?></h3>
				</div>	
				<?php
				}
				wp_reset_postdata();
				?>
		</div>
	</div>
</div>
  <!-- Футер -->
  	<?php get_footer(); ?>
	