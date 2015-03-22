<?php theme_include('header'); ?>
<div class="row">
	<?php if(page_custom_field('featured_image')): ?>
		<div class="featured-img" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo page_custom_field('featured_image'); ?>);">
			<div class="featured-overlay container">
				<h1 class="article-header-headline"><?php echo page_title(); ?></h1>
			</div>
		</div>
	<?php else: ?>
		<div class="featured-img" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo theme_url('/images/default.jpg') ?>');">
		<div class="featured-overlay container">
			<h1 class="article-header-headline"><?php echo page_title(); ?></h1>
			<p class="article-header-description"><?php echo page_custom_field('page_desc'); ?>
		</div>
	</div>
	<?php endif?>
</div>
<div class="separator u-full-width"></div>
<div class="container">

		<section class="content">
			<article>
			    <?php echo page_content(); ?>
			</article>
		</section>

<?php theme_include('footer'); ?>
