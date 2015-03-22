<?php theme_include('header'); ?>
<div class="row">
	<div class="featured-img" style="background-image: url('<?php echo theme_url('/images/default.jpg') ?>');">
		<div class="featured-overlay container">
			<h1 class="article-header-headline"><?php echo page_title(); ?></h1>
		</div>
	</div>
</div>
<div class="separator u-full-width"></div>
<div class="container">
		<section class="content">
			<?php if(has_posts()) : while(posts()) : ?>
				<article>
			    	<h2>
			        	<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			        </h2>
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
