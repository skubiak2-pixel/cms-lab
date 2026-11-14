<?php
/**
 * Title: Hero z wezwaniem do działania
 * Slug: firenet/hero-cta
 * Categories: featured, banner
 * Description: Sekcja otwierająca: nagłówek H1, korzyść i przycisk CTA.
 */
$cta = esc_html__( 'Zamów audyt i wycenę', 'firenet' );
?>
<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull">
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Niezawodne systemy sygnalizacji pożaru i infrastruktura IT dla biznesu', 'firenet' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Projektujemy, wdrażamy i serwisujemy certyfikowane systemy SSP/PPOŻ, sieci LAN oraz kontrolę dostępu.', 'firenet' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"url":"/kontakt/"} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/kontakt/"><?php echo $cta; ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
