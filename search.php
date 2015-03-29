<?php theme_include('header'); ?>

<div class="row">
	<?php if(article_custom_field('featured_image')): ?>
		<div class="featured-img" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://s13.postimg.org/w3p4tc5pz/article_img_default.jpg'); ?>);">
			<div class="featured-overlay">
				<div class="container">
					<h1 class="article-header-headline">Search results for "<?php echo search_term(); ?>"</h1>
				</div>
			</div>
		</div>
	<?php else: ?>
		<div class="featured-img" style="background-image: url('https://ununsplash.imgix.net/photo-1423753623104-718aaace6772?dpr=2&fit=crop&fm=jpg&h=600&q=75&w=1050');">
			<div class="featured-overlay">
				<div class="container">
					<h1 class="article-header-headline">Search results for "<?php echo search_term(); ?>"</h1>
				</div>
			</div>
		</div>
	<?php endif?>
</div>
<div class="container">

	<?php if(has_search_results()): ?>
		<?php $i = 0; while(search_results()): $i++; ?>
			<article class="wrap">
				<h2>
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
				</h2>
				<p><?php echo article_description(); ?></p>
			</article>
		<?php endwhile; ?>

		<section class="pagination">
			<?php if(has_pagination()) : ?>
				<nav class="pagination">
					<?php echo search_prev(); ?>
					<?php echo search_next(); ?>
				</nav>
			<?php endif; ?>
		</section>

	<?php else: ?>
		<p>No results for &ldquo;<?php echo search_term(); ?>&rdquo;</p>
	<?php endif; ?>

</div>

<?php theme_include('footer'); ?>
