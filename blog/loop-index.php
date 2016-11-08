<div class="container">
<hr>
          <div class="row">
          
              <div class="col-lg-8">
               
    <?php query_posts('cat=2&showposts=3');?>    <!--içerik ekleme kodu-->    
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
    <div class="col-md-8">
                  <div class="icerik">
                 
                      <h1><?php the_title();?>
                          </h1>
                      <p><?php the_excerpt();?></p>
                      <p><a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg" role="button">Learn more</a></p>
                      <hr>
                  </div>
              </div>
             <div class="col-md-3"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); } ?></div><!--resim ekleme kodu-->
    <?php endwhile; ?>
    <?php else : ?>
    Bu kategori de makale bulunmuyor..
    <?php endif; ?>
         <?php wp_reset_query();?>     
              </div> 
                  <!--content-->
              <div class="col-lg-4 bilesen">
  <?php get_sidebar(); ?>
                  </div><!--content finish-->
              </div><!--sidebar finish-->
              </div>        
             