<?php
/**
 * Title: Post Grid Four Column
 * Slug: omnipress-magazine/post-grid-four-column
 * Categories: omnipress-magazine
 */

?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|small","right":"20px","left":"20px"}}},"backgroundColor":"bg-color","layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:20px;padding-bottom:var(--wp--preset--spacing--small);padding-left:20px"><!-- wp:query {"queryId":58,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"displayLayout":{"type":"flex","columns":4},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"height":"200px"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|text-dark"}}}},"fontSize":"18"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"color":{"text":"#4b4b4b"}},"fontSize":"14"} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","textColor":"text-dark","fontSize":"18"} -->
<p class="has-text-align-center has-text-dark-color has-text-color has-18-font-size"><?php esc_html_e( 'No Blog Post Found!', 'omnipress-magazine' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
