<?php

?>


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php
	$block_content = do_blocks( '
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:post-content /-->
		</div>
		<!-- /wp:group -->'
 	);
 	?>
	<?php wp_head(); ?>
</head>

<header class="wp-block-template-part site-header">
<?php block_header_area(); ?>
HEader <area shape="circle" coords="" href="" alt="">
</header>
<?php echo $block_content; ?>
<footer class="wp-block-template-part site-footer">
<?php block_footer_area(); ?>

HFoooter area
</footer>
</div>
<?php wp_footer(); ?>
</body>