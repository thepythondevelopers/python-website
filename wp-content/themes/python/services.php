<?/*
Template name: Services
*/?>


<?php get_header();?>


  <section class="inner-cap services-cp">
    <div class="container col-xxl-8 px-4 py-2">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5  text-center">
        <div class="col-lg-12">
          <h1 class="mb-2"><?php echo the_title();?></h1>
        </div>
    </div>
  </section>
  <section class="about py-3">
    <div class="container px-4 py-5">      
      <div class="row align-items-center">
        <div class="col-sm-8 col-lg-6">
          <img src="<?php echo get_field( "t_image" );?>" class="img-fluid" loading="lazy">
        </div>
        <div class="col-sm-8 col-lg-6">
          <h3 class="main"><?php echo get_field( "t_main_heading" );?></h3>
          <h3 class="mb-3"><?php echo get_field( "t_main_heading" );?></h3>
            <?php echo get_field( "t_description" );?>
            <button type="button" class="orng-btn btn btn-primary btn-lg px-4 me-md-2"><?php echo get_field( "t_button" );?></button>           
          </div>        
      </div>
    </div>
  </section>
  <section class="serivces light-gray-bg py-3">
    <div class="container px-4 py-5">       
      <div class="row d-flex align-items-center justify-content-center ">
        <div class="col-sm-12 col-lg-9 text-center">
          <h3 class="main"><?php echo get_field( "o_main_title" );?></h3>
          <h3><?php echo get_field( "t_heading" );?></h3>
          <p class="mb-3"><?php echo get_field( "t_description" );?></p>
        </div>       
      </div>
      <div class="container mt-2">
        <div class="row row-cols-lg-4 pt-4">
          <?php if( have_rows('services_re') ): ?>
    <?php while( have_rows('services_re') ): the_row(); ?>

          <div class="process col mb-0 mb-2">
            <div class="card radius-10">
              <div class="feature-icon d-inline-flex align-items-left justify-content-left mb-3">
                <img src="<?php the_sub_field('image'); ?>" class="img-fluid" loading="lazy">
              </div>
              <h5 class=""><?php the_sub_field('ttile'); ?></h5>
              <p class="mb-0"><?php the_sub_field('description'); ?></p>
              <!-- <a href="#" class="read">Read More</a> -->
            </div>
          </div>
                            <?php endwhile; ?>

<?php endif; ?> 
          
        </div>

        <div class="row d-flex align-items-center justify-content-center mt-5">
        <button type="button" class="aplwhte-btn btn btn-primary btn-lg px-4 me-md-2"><?php echo get_field( "o_button" );?></button> 
        </div> 
      </div>
    </div>
  </section>
  <section class="about py-3">
    <div class="container px-5 py-5">      
      <div class="row align-items-center">
        <div class="col-sm-12 col-lg-7">
          <img src="<?php echo get_field( "c_image" );?>" class="img-fluid" loading="lazy">
        </div>
        <div class="col-sm-12 col-lg-5">
          <h3 class="main"><?php echo get_field( "c_main_title" );?></h3>
          <h3 class="mb-3"><?php echo get_field( "c_title" );?></h3>
            <?php echo get_field( "c_description" );?>
            <button type="button" class="aplwhte-btn btn btn-primary btn-lg px-4 me-md-2"><?php echo get_field( "c_button" );?></button>           
          </div>       
      </div>
      <div class="row g-3 pt-5 pb-0 row-cols-1 row-cols-lg-3">
<?php if( have_rows('tabs') ): ?>
    <?php while( have_rows('tabs') ): the_row(); ?>        
        <div class="col d-flex align-items-start">
          <div class="inn d-flex">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <img src="<?php the_sub_field('image'); ?>" alt="" />
            </div>
            <div>
              <h4><?php the_sub_field('title'); ?></h4>
              <p><?php the_sub_field('description'); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>

<?php endif; ?> 
      </div>
    </div>
  </section>
  <!--FREE QUOTE FORM START HERE-->
  <section class="quote-form py-3">
    <div class="container px-5 py-5">
      <div class="row d-flex align-items-center justify-content-center mb-3 ">
        <div class="col-sm-12 col-lg-6 text-center">          
          <h3 class="mb-1 text-white"><?php echo get_field( "q_title" );?></h3>
          <p class="text-white"><?php echo get_field( "q_description" );?></p>
        </div>       
      </div>
      <div class="row row justify-content-center pb-0">
        <?php echo do_shortcode("[contact-form-7 id='42' title='Free Quote']"); ?>
        
      </div>
    </div>
  </section> 
  <section class="testimonials py-3">
    <div class="container px-4 py-5">      
      <div class="row d-flex align-items-center justify-content-center ">
        <div class="col-sm-12 col-lg-6 text-center">
          <?php 
            $testimonial = get_post(63);
          ?>
          <h3 class="main"><?php echo $testimonial->post_title;?></h3>
          <h3 class="mb-3"><?php echo $testimonial->post_content;?></h3>
        </div>       
      </div>
      <div class="container mt-5">
        <div class="row">
        	<?php if( have_rows('testimonial', 63) ): ?>
    <?php while( have_rows('testimonial', 63) ): the_row(); ?>
            <div class="col-md-6 mb-2">
                <div class="testimonial rounded">
                  <img class="rounded-circle test-pic img-fluid" src="<?php the_sub_field('image'); ?>" width="100">
                  <img class="mb-3" src="<?php echo get_template_directory_uri();?>/assets/images/quote.svg" width="50">
                    <p><?php the_sub_field('description'); ?></p>
                    <div class="d-flex flex-row align-items-center">
                        <div class="ml-2 about"><h5 class="d-block name"><?php the_sub_field('title'); ?></h5><span class="place"><?php the_sub_field('position'); ?></span></div>
                    </div>
                </div>
            </div>
                  <?php endwhile; ?>

<?php endif; ?> 
        </div>
      </div>
    </div>
  </section>    

<?php get_footer();?>