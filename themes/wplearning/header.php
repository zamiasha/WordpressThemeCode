<?php
 /*
 This  Template is  used  display  header
 */

?>
<!DOCTYPE  html>
<html>
    <meta charset="UTF-8">
   
  <head>
   <?php wp_head()  ?>
    </head> 
    <body>

    <div class="site-main container">
      <div class="site-header">
        <div class="site-branding">
            
              <?php the_custom_logo() ?>
             </a>
          </div> 
     </header>
      </div>
     
        <div class="site-navigation">  
            <?php  
            wp_nav_menu( array(
              'theme_location' => 'primary'
            ) ); 
            ?>
        </div>

   




  