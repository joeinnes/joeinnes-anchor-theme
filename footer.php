</div>
	<?php if(has_menu_items()) : ?>
		<nav role="main" class="nav-menu" id="primary_nav">
			<ul>
				<?php while(menu_items()) : ?>
					<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</nav>
	<?php endif; ?>
<footer>
	<div class="row secondary-bg">
	<p class="small">Powered by <a href="http://anchorcms.com" title="Powered by Anchor CMS">Anchor CMS</a>. Design and content &copy; Joe Innes 2015</p>
</div>
</footer>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
</div>
</body>
</html>
