<aside id="primary"> 	<?php /*?> the aside's id is used for CSS styling <?php */?>
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>  

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

      <h3>Primary Sidebar</h3>
        <p>primary</p>

 		<h3>Search</h3>
			<?php get_search_form(); ?>        

        <!-- Begin Categories -->
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

        <!-- Begin Meta -->
        <h3>Meta</h3>
        <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
        </ul>
    	<!-- End Meta -->

	<?php endif; ?>
</aside><!-- /secondary -->
