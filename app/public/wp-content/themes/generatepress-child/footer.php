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
    echo '<footer class="custom-footer" style="background-image: url(\'http://planty.local/wp-content/uploads/2024/10/Mask-group-8.png\');">
    </footer>';
} elseif (is_page('nous-rencontrer')) {
    echo '<footer class="custom-footer nous-rencontrer">
    </footer>';  
}
?>



</div>
<div class="mentions">
<a href="<?php echo esc_url( home_url( 'http://planty.local/mentions-legales' ) ); ?>">Mentions légales</a>
</div>

</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>