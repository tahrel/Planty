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
    <?php
if (is_page('accueil')) {
    // Contenu spécifique pour la page "about"
    echo '<footer>Contenu du footer pour la page About</footer>';
} elseif (is_page('nous-rencontrer')) {
    // Contenu spécifique pour la page "contact"
    echo '<footer>Contenu du footer pour la page Contact</footer>';
}
?>
<a href="<?php echo esc_url( home_url( '/mentions-legales' ) ); ?>">Mentions légales</a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>