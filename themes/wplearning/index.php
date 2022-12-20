

<?php
get_header();
?>
      
      


    <div class="home-main">
        <div class="home-posts">
        <?php  if ( have_posts() ) : ?>
           <?php  while ( have_posts() ) : the_post(); ?>   
               <h1><?php the_title() ?></h1>
               <p> <?php the_content() ?></p> 
          <?php  endwhile; ?>
      <?php  endif;  ?>
     </div>
            <div class="home-sidebar">
                <?php get_sidebar(); ?>
            </div>        
    </div>



<?php
   
    get_footer();
?>






