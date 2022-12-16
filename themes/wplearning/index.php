

<?php
get_header();
?>
      
      


      <div class="container">
      <?php get_template_part('template-parts/homeFeatured')?>
      <img src="<?php  echo get_template_directory_uri() . '/assests/img/first-io.jpeg" style="width: 530px;' ?>">
      
      <?php  if ( have_posts() ) : ?>
           <?php  while ( have_posts() ) : the_post(); ?>   
          
          <?php  endwhile; ?>
      <?php  endif;  ?>
      </div>
      

<?php
   get_sidebar();
    get_footer();
?>






