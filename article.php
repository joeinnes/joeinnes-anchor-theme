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
		    	<h1><?php echo article_title(); ?></h1>
		        <h5><?php echo article_date(); ?></h5>
			    <?php echo article_markdown(); ?>
			    <?php echo article_custom_field('attribution'); ?>
			</article>
		</section>

		<section class="comments">
			<!-- Comment List -->
			<?php if(comments_open() and has_comments()): ?>
			    <?php while(comments()): ?>
			        <?php echo comment_text(); ?>
			        <?php echo comment_date(); ?>
			    <?php endwhile; ?>
			<?php endif; ?>

			<!-- Comment Form -->
			<?php if(comments_open()): ?>
				<form id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
					<?php echo comment_form_notifications(); ?><!-- Error notifications -->
					<?php echo comment_form_input_name('placeholder="Your Name"'); ?>
					<?php echo comment_form_input_email('placeholder="Your Email"', $extra = ''); ?>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
					<?php echo comment_form_button($text = 'Post Comment', $extra = ''); ?>
				</form>
			<?php endif; ?>
		</section>
</div>
<?php theme_include('footer'); ?>
