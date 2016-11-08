<?php get_header(); ?> <!--header kısmı-->
<div class="container">
<div class="single">
<div class="col-lg-8"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); } ?>
   <!--içerik ekleme kodu-->    
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<p class="help-block"><?php _e( 'Kategori:' ); ?> <?php the_category( ', ' ); ?> <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
<p><?php the_content(); ?></p>
	<?php endwhile; ?>
    <?php else : ?>
    Bu kategori de makale bulunmuyor..
    <?php endif; ?></div>
   <div class="col-lg-4 widgets">
  <?php get_sidebar(); ?></div>       
</div>
</div>
<?php get_footer(); ?> <!--footer kısmı-->