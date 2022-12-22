

<?php
get_header();
?>
      
      


        <div class="home-main">
        <div class="row">
        <div class="home-posts col-8 ">
            <?php  if ( have_posts() ) : ?>
            <?php  while ( have_posts() ) : the_post(); ?>   
                         
               <article class="home-post">
                  <div class="post-header">
                    <div class="post-thumbnail  row  ml-0 mr-0">
                        <?php the_post_thumbnail('full') ?>
                    </div>
                  </div>
                  <div class="post-description"></div>
                  <div class="post-footer"></div>
               </article>
                   
            <?php  endwhile; ?>
        <?php  endif;  ?>
        </div>
        
        <div class="home-sidebar col-4">
                    <?php get_sidebar(); ?>
                </div>
        </div>
                    
        </div>



<?php
   
    get_footer();
?>






