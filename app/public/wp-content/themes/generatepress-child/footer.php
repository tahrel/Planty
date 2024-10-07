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

    echo '<footer class="custom-footer">
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
    <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
    <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <!-- Ajoute plus de canettes si nécessaire -->
</footer>';
    


} elseif (is_page('nous-rencontrer')) {
   
    echo '<footer class="custom-footer">
    <footer class="custom-footer specific-footer-background"> 
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
    <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
    <div class="canette-container canette-hidden"></div>
  <div class="canette-container canette-full"></div>
  <div class="canette-container canette-half"></div>
  <div class="canette-container canette-hidden"></div>
  <!-- Ajoute plus de canettes si nécessaire -->
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