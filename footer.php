</div>
<?php if(has_menu_items()) : ?>
	<nav role="main" class="nav-menu container" id="primary_nav">
		<ul>
			<?php while(menu_items()) : ?>
				<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
			<?php endwhile; ?>
					<?php while(categories()): ?>
								<li class="category">
									<a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">
								<?php echo category_title(); ?>
							</a>
						</li>
					<?php endwhile; ?>
		</ul>
	</nav>
<?php endif; ?>

<footer>
	<div class="row secondary-bg">
		<div class="container">
			<div class="four columns">
				<p class="social-links"><?php echo site_meta('social_links'); ?></p>
			</div>
			<div class="four columns offset-by-four">
				<h6>Powered by <a href="http://anchorcms.com" title="Powered by Anchor CMS">Anchor CMS</a>. Design and content &copy; Joe Innes 2015</h6>
			</div>
		</div>
	</div>
</footer>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo theme_url('js/jquery.caption.min.js'); ?>" type="text/javascript"></script>

<script>
$(window).load(function() {
	$('.article-text img').captionjs({
		'class_name'      : 'captionjs', // Class name for each <figure>
		'schema'          : true,        // Use schema.org markup (i.e., itemtype, itemprop)
		'mode'            : 'hide',   // default | stacked | animated | hide
		'debug_mode'      : false,       // Output debug info to the JS console
		'force_dimensions': false,        // Force the dimensions in case they cannot be detected (e.g., image is not yet painted to viewport)
		'is_responsive'   : true,       // Ensure the figure and image change size when in responsive layout. Requires a container to control responsiveness!
		'inherit_styles'  : true        // Have the caption.js container inherit box-model properties from the original image
	});
});
</script>
</div>
</body>
</html>
