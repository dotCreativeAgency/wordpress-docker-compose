<?php
/**
 * Title: Default Footer
 * Slug: omnipress-magazine/footer-default
 * Categories: footer, omnipress-magazine
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"20px","bottom":"var:preset|spacing|medium","left":"20px"}}},"backgroundColor":"foreground-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-foreground-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:20px;padding-bottom:var(--wp--preset--spacing--medium);padding-left:20px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column"><!-- wp:site-title {"level":2,"textAlign":"center","textColor":"lightcolor"} /-->

<!-- wp:site-tagline {"textAlign":"center","textColor":"lightcolor"} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"black","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-black-background-color has-background"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"lightcolor","className":"sm-align-center"} -->
<p class="sm-align-center has-lightcolor-color has-text-color"><?php esc_html_e( '© 2023 Omnipress Magazine', 'omnipress-magazine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"lightcolor","className":"sm-align-center"} -->
<p class="has-text-align-center sm-align-center has-lightcolor-color has-text-color has-link-color"><?php esc_html_e( 'Powered by WordPress | Developed By', 'omnipress-magazine' ); ?><a rel="noreferrer noopener" href="https://omnipressteam.com/" target="_blank"><?php esc_html_e( 'OmnipressTeam', 'omnipress-magazine' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
