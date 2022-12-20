<?php
 /*
 This  Template is  used  display  header
 */

?>
<!DOCTYPE  html>
<html>
    <meta charset="UTF-8">
   
  <head>
  <title>
 
   <?php echo get_the_title(); ?> |   
   <?php bloginfo('name') ?>
    
        
    </title>
   <?php wp_head()  ?>
    </head>
    <body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  
  
  <script>

      jQuery(document).ready(function($) {
        $("h1").fadeOut();
      })

 </script>





  