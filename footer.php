<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paraglide_NorthAmerica
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'paraglidenorthamerica' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'paraglidenorthamerica' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'paraglidenorthamerica' ), 'paraglidenorthamerica', '<a href="http://www.paraglidenorthamerica.com" rel="designer">Paraglide NorthAmerica</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
	$(window)
	    .scroll(function(event) {
	        var yOffset = window.pageYOffset;
	        var breakpoint = 50;
	        if (yOffset > breakpoint) {
	            $(".main-navigation").addClass('active');
	            $(".sub-menu").addClass('active2');
	            $(".sub-menu li").addClass('active4');
	            $(".nav-toggle").addClass('active3');
	            $(".pna_logo").addClass('active5');
	        } else {
	            $(".main-navigation").removeClass('active');
	            $(".sub-menu").removeClass('active2');
	            $(".sub-menu li").removeClass('active4');
	            $(".nav-toggle").removeClass('active3');
	            $(".pna_logo").removeClass('active5');
	        }
    });
	$(".nav-toggle").click(function(){
		$(".main-navigation").toggleClass("is-active");
		$(".pna_logo").toggleClass("is-active2");
	});
</script>
<?php wp_footer(); ?>

</body>
</html>
