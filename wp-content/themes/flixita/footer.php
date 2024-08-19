</div>	
<footer id="footer-section" class="footer-section main-footer">
	 <?php do_action('daddy_plus_flixita_top_footer');  ?>
	 <?php get_template_part('template-parts/footer','widget'); ?>
	 <?php get_template_part('template-parts/footer','copyright'); ?>       
</footer>
<button type="button" class="scrollingUp scrolling-btn" aria-label="<?php esc_attr_e('scrollingUp','flixita'); ?>"><i class="fa fa-angle-up"></i><svg height="46" width="46"> <circle cx="23" cy="23" r="22" /></svg></button>
<?php wp_footer(); ?>
</body>
</html>
