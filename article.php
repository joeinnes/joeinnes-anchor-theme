<?php theme_include('header'); ?>
<div class="row header-img">
	<?php if(article_custom_field('featured_image')): ?>
		<div class="featured-img" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo article_custom_field('featured_image'); ?>);">
			<div class="featured-overlay container">
				<h1 class="article-header-headline"><?php echo article_title(); ?></h1>
				<p class="article-header-description"><?php echo article_description(); ?><br /><small><em>Read time: <?php echo dg_est_reading_time(); ?></em></small></p>
			</div>
		</div>
	<?php else: ?>
		<div class="featured-img" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo theme_url('/images/default.jpg') ?>');">
		<div class="featured-overlay container">
			<h1 class="article-header-headline"><?php echo article_title(); ?></h1>
			<p class="article-header-description"><?php echo article_title(); ?></p>
		</div>
	</div>
	<?php endif?>
</div>
<div class="separator u-full-width"></div>
<div class="container">
		<section class="content">
			<article>
		        <h5><?php echo article_date(); ?></h5>
						<div class="article-text">
			    		<?php echo article_markdown(); ?>
						</div>
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
