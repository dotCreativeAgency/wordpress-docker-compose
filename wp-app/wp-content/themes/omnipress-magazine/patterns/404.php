<?php
/**
 * Title: Error 404 Page
 * Slug: omnipress-magazine/error
 * Categories: omnipress-magazine
 * templateTypes: 404
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"20px","left":"20px"},"blockGap":"0"},"color":{"gradient":"linear-gradient(0deg,rgb(223,223,223) 0%,rgb(255,255,255) 100%)"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group has-background" style="background:linear-gradient(0deg,rgb(223,223,223) 0%,rgb(255,255,255) 100%);padding-top:var(--wp--preset--spacing--x-large);padding-right:20px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:20px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontSize":"140px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:140px;text-transform:uppercase"><strong>404</strong></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'It looks like nothing was found at this location.', 'omnipress-magazine' ); ?><br> <?php esc_html_e( 'Maybe try one of the links below or a search?', 'omnipress-magazine' ); ?>​</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small)"><!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","width":50,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","backgroundColor":"primary"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"text-light","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"aligncenter"} -->
<div class="wp-block-button aligncenter" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-text-light-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url() ); ?>">Go to Home Page</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
