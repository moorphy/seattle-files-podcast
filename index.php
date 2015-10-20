<?php get_header(); ?>
                
<!-- START CONTENT -->
<div id="content" class="index">
<?php if (have_posts()) : ?>


    <?php while (have_posts()) : the_post(); ?>
    	<div class="post-box">
			
    	<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<h2><?php the_meta(); ?></h2>

        <p class="postmetadata">
            <span class="date"><?php the_time('F jS, Y') ?></span>
        </p><!--END POST METADATA-->
		<?php the_excerpt(); ?>
     	<?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
        </div>
    <?php endwhile; ?>
        
<?php endif; ?>
</div><!-- END CONTENT -->
<?php get_footer(); ?>