<?php
/**
 * Title: Default Sidebar
 * Slug: omnipress-magazine/sidebar-default
 * Categories: omnipress-magazine
 */

?>
<!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"className":"has-background-border-border-color"} -->
<aside class="wp-block-group has-background-border-border-color"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|xx-small","right":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small","left":"var:preset|spacing|xx-small"}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small);padding-left:var(--wp--preset--spacing--xx-small)"><!-- wp:search {"label":"","showLabel":false,"placeholder":" Search","width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"textColor":"heading"} -->
<p class="has-heading-color has-text-color" style="font-style:italic;font-weight:400"><?php esc_html_e( 'sponsored', 'omnipress-magazine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sidebar-banner-advertisement.png" alt="Omnipress Blocks"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"block-bg"} -->
<div class="wp-block-group has-block-bg-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--50);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":5,"align":"wide","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"15px"}}},"textColor":"lightcolor"} -->
<h5 class="wp-block-heading alignwide has-lightcolor-color has-text-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:15px"><?php esc_html_e( 'Categories', 'omnipress-magazine' ); ?>       </h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:categories {"showPostCounts":true,"showOnlyTopLevel":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"block-bg"} -->
<div class="wp-block-group has-block-bg-background-color has-background" style="border-radius:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"15px"}}},"textColor":"lightcolor"} -->
<h5 class="wp-block-heading alignwide has-lightcolor-color has-text-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:15px;text-transform:none"><?php esc_html_e( 'Recent Posts', 'omnipress-magazine' ); ?>       </h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"bd-color","textColor":"body-text"} -->
<div class="wp-block-group has-body-text-color has-bd-color-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"order":"asc","displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"sidebar-post-list","fontSize":"16"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"block-bg"} -->
<div class="wp-block-group has-block-bg-background-color has-background" style="border-radius:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"15px"}}},"textColor":"lightcolor"} -->
<h5 class="wp-block-heading alignwide has-lightcolor-color has-text-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:15px;text-transform:none"><?php esc_html_e( 'Archive', 'omnipress-magazine' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:archives {"showPostCounts":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px","margin":{"bottom":"0"}},"border":{"radius":"0px"}},"backgroundColor":"block-bg"} -->
<div class="wp-block-group has-block-bg-background-color has-background" style="border-radius:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"15px"}}},"textColor":"lightcolor"} -->
<h5 class="wp-block-heading alignwide has-lightcolor-color has-text-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:15px;text-transform:none"><?php esc_html_e( 'Category Tags', 'omnipress-magazine' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"},"border":{"radius":"0px"}},"backgroundColor":"block-bg"} -->
<div class="wp-block-group has-block-bg-background-color has-background" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"0px"}},"backgroundColor":"primary"} -->
<div class="wp-block-group alignwide has-primary-background-color has-background" style="border-radius:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"level":5,"align":"wide","style":{"typography":{"textTransform":"none"},"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"15px"}}},"textColor":"lightcolor"} -->
<h5 class="wp-block-heading alignwide has-lightcolor-color has-text-color" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:15px;text-transform:none"><?php esc_html_e( 'Get In Touch', 'omnipress-magazine' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"bd-color"} -->
<div class="wp-block-group has-bd-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":"20px"}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></aside>
<!-- /wp:group -->
