<?php get_header(); ?> <!--header kısmı-->
<div class="container">
<ul class="categories">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <li>
  <div class="col-lg-2"><?php if ( has_post_thumbnail() ) {
	the_post_thumbnail("thumbnail"); }
	
	?></div>
  <div class="col-lg-10">
  <a href="<?php the_permalink();?>"><?php the_title();?> (<small><?php the_time('F jS, Y'); ?></small>)</a>
  <p class="text-muted"><?php the_excerpt(); ?></p>  
  </div>
  <div class="clearfix"></div>
  
  
  </li>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</ul>
</div>
<?php get_footer(); ?> <!--footer kısmı-->