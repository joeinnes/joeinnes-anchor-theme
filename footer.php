</div>
<?php if(has_menu_items()) : ?>
	<nav role="main" class="nav-menu" id="primary_nav">
		<ul>
			<li class="search-container">
					<form onsubmit="location.href='<?php echo base_url(); ?>' + 'search/' + document.getElementById('search-box').value; return false;">
						<input id="search-box" type="text" class="search-box" /><span class="fa fa-search search-icon"></span>
						<input type="submit" id="search-submit" />
					</form>
			</li>
			<li class="alt-search">
					<div class="alt-search-container">
						<form onsubmit="location.href='<?php echo base_url(); ?>' + 'search/' + document.getElementById('search-box').value; return false;">
							<input id="search-box" type="text" class="alt-search-box"/><input type="submit" class="alt-search-button" value="Search"/>
						</form>
					</div>
			</li>
			<?php while(categories()): ?>
						<li class="category">
							<a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">
						<?php echo category_title(); ?>
					</a>
				</li>
			<?php endwhile; ?>
			<?php while(menu_items()) : ?>
				<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
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
<script src="<?php echo theme_url('js/jquery.min.js'); ?>"></script>
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

document.addEventListener("touchstart", function(){}, true);
</script>
</div>
</body>
</html>
