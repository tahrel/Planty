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
</footer>

    <?php
if (is_page('accueil')) {
    // Contenu spécifique pour la page "about"
    echo '<footer class="custom-footer">
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
</footer>
';
} elseif (is_page('nous-rencontrer')) {
    // Contenu spécifique pour la page "contact"
    echo '<footer class="custom-footer">
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
    <div class="canette height-1"></div>
    <div class="canette height-2"></div>
    <div class="canette height-3"></div>
    <div class="canette height-2"></div>
</footer>';
}
?>
<a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>">Mentions légales</a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>