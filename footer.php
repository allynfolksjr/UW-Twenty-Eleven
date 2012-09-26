<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->

<div id="footerMain" class="gold">
 <div id="footerWrap">
  <div id="footerLogo">
   <a id="footerLogoLink" href="http://www.washington.edu/">University of Washington</a>
  </div>
  <div id="footerLinks">
   <div class="logoAbsoluteFooter"><a id="footerWLogoLink" href="http://www.washington.edu/">W</a></div>
   <ul>
    <li class="leftText"><a href="http://www.washington.edu/">&#169; 2011 University of Washington</a></li>
    <li class="centerText"><a href="http://www.seattle.gov/">Seattle, Washington</a></li>
    <li class="centerText"><a href="http://www.washington.edu/home/siteinfo/form/">Contact Us</a></li>
    <li class="rightText"><a href="http://www.washington.edu/jobs/">Jobs</a></li>
    <li class="rightText"><a href="http://myuw.washington.edu/">My UW</a></li>
    <li class="rightText"><a href="http://www.washington.edu/online/privacy/">Privacy</a></li>
    <li class="rightText"><a href="http://www.washington.edu/online/terms/">Terms</a></li>
   </ul>
  </div>
 </div>
</div>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
