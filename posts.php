<?php theme_include('header'); ?>
<div class="row">
	<?php if(article_custom_field('featured_image')): ?>
		<div class="featured-img" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>);"></div>
	<?php else: ?>
		<div class="featured-img" style="background-image: url('https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?dpr=2&fit=crop&fm=jpg&h=600&q=75&w=1050');"></div>
	<?php endif?>
</div>
<div class="container">
		<section class="content">
			<?php if(has_posts()) : while(posts()) : ?>
				<article>
			    	<h1>
			        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			        </h1>
			        <h5><?php echo article_date(); ?></h5>
					<p><?php echo article_description(); ?></p>
				</article>
			<?php endwhile; endif; ?>
		</section>

		<section class="pagination">
			<?php if(has_pagination()) : ?>
			    <nav class="pagination">
			        <?php echo posts_prev(); ?>
			        <?php echo posts_next(); ?>
			    </nav>
			<?php endif; ?>
		</section>
</div>
<?php theme_include('footer'); ?>
