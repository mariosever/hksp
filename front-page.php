<?php /* front-page.php */ ?>

<?php get_header(); ?>

<!-- header -->
<header>
	<div class="container">
		<div class="header--inner">
			<h1 class="header--title">
				Hrvatska komora <br><span class="orange">socijalnih pedagoga</span>
			</h1>
			<div class="header--cta">
				<a href="o-nama/" class="header--link">Više o nama</a>
			</div>
		</div>
	</div>
</header>

<!-- boxevi -->
<div class="boxevi">
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-3">
			<div class="col mb-4">
				<a href="clanstvo/">
					<div class="card">
						<div class="card-body">
							<span class="material-icons">people_outline</span>
							<span class="icon-text">Postani član</span>
						</div>
					</div>
				</a>
			</div>

			<div class="col mb-4">
				<a href="edukacije/">
					<div class="card">
						<div class="card-body">
							<span class="material-icons">school</span>
							<span class="icon-text">Edukacije za članove</span>
						</div>
					</div>
				</a>
			</div>

			<div class="col mb-4">
				<a href="prijava/">
					<div class="card">
						<div class="card-body">
							<span class="material-icons">login</span>
							<span class="icon-text">Prijava u sustav</span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<!-- news -->
<div class="main">

	<div class="container">

		<h2 class="section--title">Novosti</h2>

		<div class="row row-cols-1 row-cols-md-3 g-4 blog-grid">

			<?php 
			
			$args = array( 'category_name' => 'novosti', 
							'posts_per_page' => 9 
							); 
				
			$the_query = new WP_Query( $args ); 
				
			if ( $the_query->have_posts() ) : 
					
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php $post_link = get_permalink(); ?>

					<div class="col">
    					<div class="card h-100">

							<a href="<?php echo $post_link; ?>">	
								<?php the_post_thumbnail( 'full', array( 'class'=>'card-img-top img-fluid' ) ); ?>
							</a>

							<div class="card-body">
								<div class="card-meta">
									<div class="author">
										Objavio: <?php the_author(); ?> 
									</div>
									<div class="date">
										Datum: <?php echo get_the_date(); ?>
									</div>
								</div>
								<a href="<?php echo $post_link; ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<a href="<?php echo $post_link; ?>" class="card-link">Opširnije...</a>
							</div>

						</div>
					</div>

				<?php endwhile; 
			else: 
			
				_e( 'Nažalost nema objava u ovoj kategoriji.', 'textdomain' ); 
			endif; 
				
			wp_reset_postdata(); 
			?>

		</div><!-- row -->

	</div>

</div>







<?php get_footer(); ?>