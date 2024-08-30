<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; 
}
?>

</div>
<footer class="site-footer">
    <div class="footer-container">
        <a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>">Mentions légales</a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>