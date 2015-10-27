<?php get_header(); ?>

<!-- START CONTENT -->

    <div id="content" class="page">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <br />
		<?php the_content(); ?>
        
        <?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
			<?php endwhile; endif; ?>  
	</div>
     
    
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>