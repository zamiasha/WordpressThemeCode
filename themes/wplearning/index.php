

<?php
get_header();
?>
      
      


        <div class="home-main">
            <div class="custom-header">
               <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width) ?>"   width="<?php echo absint(get_custom_header()->height) ?>" class="img-fluid" >  
            </div>
        <div class="row">
        <div class="home-posts col-8 ">
            <?php  if ( have_posts() ) : ?>
            <?php  while ( have_posts() ) : the_post(); ?>   
                         
               <article class="home-post">
                  <div class="post-header">
                    <div class="post-thumbnail  row  ml-0 mr-0">
                    <a href=" <?php the_permalink() ?> "><?php the_post_thumbnail('home-featured') ?></a> 
                    </div>
                    <h1><a href=" <?php the_permalink() ?> "> <?php the_title() ?> </a> </h1>
                  </div>
                  <div class="post-description">
                  <?php the_excerpt() ?>
                  </div>
                  <div class="post-footer row ml-0 mr-0 mr-10">
                    <div class="post-meta">
                        <strong> Author: <?php the_author() ?> </strong>
                    </div>
                    <div class="post-meta">
                        <strong> Posdted on : <?php the_time() ?> </strong>
                    </div>
                  </div>
               </article>
                   
            <?php  endwhile; ?>
        <?php  endif;  ?>
                <div class="pagination">
                    <!-- row ml-0 mr-0" added  this  row  into pagination class  for  show  pagination in page layout  -->
                    <?php  echo paginate_links() ?>
                    </div>
        </div>
        
        <div class="home-sidebar col-4">
                    <?php get_sidebar(); ?>
                </div>
        </div>
                    
        </div>



<?php
   
    get_footer();
?>


