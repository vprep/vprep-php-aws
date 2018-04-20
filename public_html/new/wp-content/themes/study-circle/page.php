<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Study Circle
 */

get_header(); ?>

<?php if ( is_front_page() && ! is_home() ) { } else {?>
<div class="container">
      <div class="page_content">
        <section class="site-main">               
                <?php while( have_posts() ) : the_post(); ?>                
                    <?php get_template_part( 'content', 'page' ); ?>
                    <?php
                        //If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() )
                            comments_template();
                        ?>                               
                <?php endwhile; ?>                    
        </section><!-- section-->
     <?php get_sidebar();?>      
    <div class="clear"></div>
    </div><!-- .page_content --> 
</div><!-- .container --> 
<?php } ?>

<?php if ( is_front_page() && ! is_home() ) { ?>
<!-- STARTS HERE -->
<hr class="separator">
<div class="containercolour">
<div class="container123">
      <div class="page_content">
<div>
<section id="whoweareasection" class="menu_page">
    <div class="themefeatures">
      <h2 class="section_title">Features</h2>
      <div class="one_third"><i class="fa1 fa fa-wrench"></i>
        <p></p>
        <h4>Simplified Test Creation</h4>
        <p>We enable tutors and institutes to create online tests in minutes.</p>
      </div>
      <div class="one_third"><i class="fa1 fa fa-area-chart"></i>
        <p></p>
        <h4>Diagnostic Analysis</h4>
        <p>Tutors on Vprep’s platform will be able to identify the weak areas of their students.</p>
      </div>
      <div class="one_third last_column"><i class="fa1 fa fa-hand-scissors-o"></i>
        <p></p>
        <h4>Customized Tests</h4>
        <p>Tutors will be able to customize their tests by modifying exam start date, exam end date, etc.</p>
      </div>
      <div class="one_third"><i class="fa1 fa fa-graduation-cap"></i>
        <p></p>
        <h4>Individual Attention</h4>
        <p>Get detailed analysis of every students’ report card and focus accordingly.</p>
      </div>
      <div class="one_third"><i class="fa1 fa fa-laptop"></i>
        <p></p>
        <h4>Tech Platform</h4>
        <p>We enable tutors to push tests and materials to their students through our platform anytime, anywhere.</p>
      </div>
      <div class="one_third last_column"><i class="fa1 fa fa-shopping-cart"></i>
        <p></p>
        <h4>E-Commerce</h4>
        <p>Our platform enables tutors and institutes to spread their materials and tests beyond their students too and earn extra revenue.</p>
      </div>
    </div>
    <!-- .end section class -->
  <!-- container --> 
</section>

	<div class="clear"></div>
    </div><!-- .page_content -->
  </div> 
 </div><!-- .container --> 
</div>
<?php } ?>
<!-- ENDS HERE -->


<?php if ( is_front_page() && ! is_home() ) { ?>
<!-- TESTIMONIALS START -->
<div class="container" id="testimonials-slider-container">
      <div class="page_content">
        <section>
		<h2 class="section_title">Testimonials</h2>    
			<div class="bxslider-testimonials">
				<?php
					$args_testimonials = array (
					'cat' => 6,
					'posts_per_page' => -1,
					'orderby' => 'date'
					);

					$cat_posts_testimonials = new WP_query($args_testimonials);

					if ($cat_posts_testimonials->have_posts()) : while ($cat_posts_testimonials->have_posts()) : $cat_posts_testimonials->the_post();
						echo "<div>";
						echo the_content();
						echo "</div>";
					endwhile; endif;
				?>
			</div>
        </section><!-- section-->
     <?php get_sidebar();?>      
    <div class="clear"></div>
    </div><!-- .page_content --> 
 </div><!-- .container --> 
<script>
jQuery('.bxslider-testimonials').bxSlider({
	<?php
		$post_testimonials_options = get_post(400);
		echo $post_testimonials_options->post_content;
	?>

});
</script>
<!-- TESTIMONIALS END -->
<?php } ?>

<!-- STARTS HERE -->
<?php if ( is_front_page() && ! is_home() ) { ?>

<hr class="separator">
<div class="container1234">
	<?php echo do_shortcode("[slide-anything id='314']"); ?>
     <div class="clear"></div>
 </div><!-- .container --> 

<!-- ENDS HERE -->


<hr class="separator">
<div class="container">
	<div class="page_content">
		<div id="footer_boxes_1" class="footer_boxes  footer_boxes_side">
			<?php
				$post1 = get_post(356);
				echo $post1->post_content;
			?>
		</div>
		<div id="footer_boxes_2" class="footer_boxes  footer_boxes_center ">
			<?php
				$post3 = get_post(432);
				echo $post3->post_content;
			?>
		</div>
		<div id="footer_boxes_3" class="footer_boxes  footer_boxes_side">
			<?php
				$post2 = get_post(358);
				echo $post2->post_content;
			?>
		</div>
  	</div> 
</div><!-- .container --> 
</div>
<!-- ENDS HERE -->
<?php } ?>

<?php get_footer(); ?>