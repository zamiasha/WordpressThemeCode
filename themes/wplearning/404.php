<?php
 /*
 This  Template is  used  display  404 error 
 */
?>
<?php
get_header();
?>
      
      
      <?php  if ( have_posts() ) : ?>
           <?php  while ( have_posts() ) : the_post(); ?>   
               <h1><?php the_title() ?></h1>
               <p> <?php the_content() ?></p>
          <?php  endwhile; ?>
      <?php  endif;  ?>

<?php
   get_footer();
?>

