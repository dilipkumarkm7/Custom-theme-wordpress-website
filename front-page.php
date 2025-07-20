<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="DK Theme - A custom-built, responsive WordPress theme with testimonials and optimized performance.">
     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

     <div class="hero">
          <nav class="navbar">
               <div class="navbar-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/novel-office-logo.webp"
                         alt="Logo" loading="lazy">
               </div>

               <div class="hamburger" onclick="toggleMenu()">
                    &#9776;
               </div>

               <div class="navbar-menu" id="navbarMenu">
                    <a href="#">HOME</a>
                    <a href="#">SOLUTIONS</a>

                    <div class="dropdown" onclick="toggleDropdown(event)">
                         <a href="#" class="dropdown-toggle">LOCATIONS <span>&#9662;</span></a>
                         <div class="dropdown-content" id="dropdownContent">
                              <a href="#">Marathahalli</a>
                              <a href="#">M G Road</a>
                              <a href="#">WhiteField (Now)</a>
                              <a href="#">WhiteField (BTP)</a>
                              <a href="#">Queens Road</a>
                              <a href="#">Koramangala</a>
                              <a href="#">HSR Extension</a>
                         </div>
                    </div>

                    <a href="#">INVESTMENTS</a>
                    <a href="#">CONTACT US</a>
                    <a href="#">MORE</a>
               </div>
          </nav>

          <div class="main-content">
               <h1>OFFICES</h1>
               <h2>WITH</h2>
               <h1>NOVEL</h1>
          </div>
          <div class="scroll-animation">
               <div class="bar"></div>
          </div>
          <div class="scroll-indicator">
               Scroll to know more
          </div>
     </div>
     <div class="testimonials">
          <h2 class="testimonials-heading">Testimonials</h2>
          <div class="testimonial-container">
               <?php
               $args = array('post_type' => 'testimonial', 'posts_per_page' => 3);
               $testimonials = new WP_Query($args);
               if ($testimonials->have_posts()):
                    while ($testimonials->have_posts()): $testimonials->the_post(); ?>
                         <div class="testimonial">
                              <h3 class="testimonial-title"><?php the_title(); ?></h3>
                              <p class="testimonial-content"><?php the_excerpt(); ?></p>
                         </div>
                    <?php endwhile;
                    wp_reset_postdata();
               endif;
               ?>
          </div>
     </div>
     <?php get_footer(); ?>
</body>
</html>