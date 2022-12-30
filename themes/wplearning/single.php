<?php
 /*
 Template is  used  display single post
 */

?>
<?php
get_header();
?>
      
       <div class="post-container">
        
      <?php  if ( have_posts() ) : ?>
           <?php  while ( have_posts() ) : the_post(); ?>   
            <div class="post-image">
                <?php the_post_thumbnail('home-featured')  ?>
            </div>
            <div class="post-title">
                <h1> <?php the_title() ?></h1>
            </div>
                <div class="post-meta-row">
                    <div class="post-meta">
                        <strong> Author: <?php the_author() ?> </strong>
                    </div>
                    <div class="post-meta">
                        <strong> Posdted on : <?php the_time() ?> </strong>
                    </div>
                </div>
                <div class="post-content">
                 <p>  <?php the_content() ?> </p>
                </div>      
               
          <?php  endwhile; ?>
      <?php  endif;  ?>
      </div>

<?php
   get_footer();
?>

