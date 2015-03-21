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
			<article>
			    <h1><?php echo page_title(); ?></h1>
			    <?php echo page_content(); ?>
			</article>
		</section>

<?php theme_include('footer'); ?>
