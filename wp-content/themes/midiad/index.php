<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">Serviços</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-4">Barra Lateral</aside>
						<div class="news col-md-8">
							<?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<article>
								<h2><?php the_title(); ?></h2>
								<p>Publicado em: <?php echo get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
								<p>Categorias: <?php the_category( ' ' ); ?></p>
								<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
								<?php the_content(); ?>
							</article>

							<?php 
								endwhile;
							else:
							?>

							 <p>Ainda não há nada para ser exibido...</p>

							<?php endif; ?>

						</div>						
					</div>
				</div>				
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>