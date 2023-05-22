<?php
/**
 * Title: Hero Section
 * Slug: omnipress-magazine/hero-sec
 * Categories: omnipress-magazine
 */

?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"20px","left":"20px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<section class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:20px;padding-bottom:var(--wp--preset--spacing--medium);padding-left:20px"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"72%","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="border-style:none;border-width:0px;flex-basis:72%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-banner.jpg","id":137,"minHeight":500,"minHeightUnit":"px","customGradient":"linear-gradient(0deg,rgb(0,0,0) 3%,rgba(117,122,255,0) 57%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small);min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(0,0,0) 3%,rgba(117,122,255,0) 57%)"></span><img class="wp-block-cover__image-background wp-image-137" alt="Music Band performing at Music Festival" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/hero-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":3,"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|lightcolor"}}}},"backgroundColor":"block-bg"} -->
<h3 class="wp-block-heading has-text-align-left has-block-bg-background-color has-background has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><a href="#"><?php esc_html_e( 'Artists You Should Be Following on Instagram', 'omnipress-magazine' ); ?></a> </h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue,', 'omnipress-magazine' ); ?><br><?php esc_html_e( 'nunc sed cursus cursus, justo mauris imperdiet tortor.', 'omnipress-magazine' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"radius":"0px"}},"backgroundColor":"block-bg","className":"has-no-hover-shadow-dark animated animated-fadeInUp"} -->
<div class="wp-block-group has-no-hover-shadow-dark animated animated-fadeInUp has-block-bg-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","right":"10px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:20px"><!-- wp:heading {"level":5,"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"white"} -->
<h5 class="wp-block-heading alignwide has-white-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e( 'Recent News', 'omnipress-magazine' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:latest-posts {"postsToShow":3,"excerptLength":10,"displayAuthor":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":100,"featuredImageSizeHeight":80,"addLinkToFeaturedImage":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
