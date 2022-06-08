<?/*
Template name: home
*/?>


<?php get_header();?>

  <section class="hero">
    <div class="container col-xxl-8 px-4 py-2">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-7">
          <img src="<?php echo get_field( "top_image" );?>" class="d-block mx-lg-auto img-fluid" loading="lazy" width="700" height="500" />
        </div>
        <div class="col-lg-5">
          <h3 class="heroh mb-0"><?php echo get_field( "top_title1" );?></h3>
          <h1 class="mb-2"><?php echo get_field( "top_title2" );?></h1>
            <p class="mb-4"><?php echo get_field( "top_description" );?></p>
          <div class="justify-content-md-start">
            <button type="button" class="orng-btn btn btn-primary btn-lg px-4 me-md-2"><?php echo get_field( "top_button1" );?></button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-2 py-0">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/play-btn.svg" class="img-fluid me-2" loading="lazy"><?php echo get_field( "top_button2" );?></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="features py-3">
    <div class="container px-4 py-5">
      <div class="row">
        <div class="col-sm-8 col-lg-5 pe-5">
          <h3 class="main"><?php echo get_field( "deliver_main_title" );?></h3>
          <h3 class="text-white mb-3"><?php echo get_field( "deliver_title" );?></h3>
            <?php echo get_field( "deliver_description" );?>
            <button type="button" class="aplwhte-btn btn btn-primary btn-lg px-4 me-md-2 mt-3"><?php echo get_field( "deliver_button" );?></button>           
          </div>
        <div class="col-sm-8 col-lg-7">
          <div class="row mb-4">
          <?php if( have_rows('deliveres') ): ?>
    <?php while( have_rows('deliveres') ): the_row(); ?>     

            <div class="feature col-6">
              <div class="feature-icon d-inline-flex align-items-center justify-content-center mb-3">
                <img src="<?php the_sub_field('image'); ?>" class="img-fluid" loading="lazy">
              </div>
              <h4 class="text-white"><?php the_sub_field('title'); ?></h4>
              <p class="mb-0"><?php the_sub_field('description'); ?></p>
              
            </div>
<?php endwhile; ?>

<?php endif; ?>


          </div>
          
        </div>
      </div>
    </div>
  </section>
  <section class="about py-3">
    <div class="container px-4 py-5">      
      <div class="row flex-lg-row-reverse align-items-center">
        <div class="col-sm-8 col-lg-6">
          <img src="<?php echo get_field( "what_image" );?>" class="img-fluid" loading="lazy">
        </div>
        <div class="col-sm-8 col-lg-6">
          <h3 class="main"><?php echo get_field( "what_title" );?></h3>
          <h3 class="mb-3"><?php echo get_field( "what_title_1" );?></h3>
            <?php echo get_field( "what_description" );?>
            <button type="button" class="aplwhte-btn btn btn-primary btn-lg px-4 me-md-2"><?php echo get_field( "what_button" );?></button>           
          </div>
        
      </div>
    </div>
  </section>
  <section class="work-process  py-3">
    <div class="container px-4 py-5">      
      <div class="row align-items-center">
        <div class="col-sm-8 col-lg-6">
          <h3 class="main"><?php echo get_field( "process_main_title" );?></h3>
          <h3 class="mb-3"><?php echo get_field( "process_title" );?></h3>
        </div>
        <div class="col-sm-8 col-lg-6">          
            <p><?php echo get_field( "process_description" );?></p>
        </div>        
      </div>
      <div class="row row-cols-lg-4 pt-4">
  <?php if( have_rows('deliveres') ): $i=1;?>
    <?php while( have_rows('deliveres') ): the_row(); ?>        
        <div class="process col mb-2">
          <div class="card">
            <span class="countee"><?php echo  $i; ?></span>
            <div class="feature-icon d-inline-flex align-items-left justify-content-left mb-3">
              <img src="<?php the_sub_field('image'); ?>" class="img-fluid" loading="lazy">
            </div>
            <h5 class=""><?php the_sub_field('title'); ?></h5>
            <p class="mb-0"><?php the_sub_field('description'); ?></p>
            
          </div>
        </div>
        <?php $i++; endwhile; ?>

<?php endif; ?>
      </div>
    </div>
  </section>
  <section class="case_study py-3">
    <div class="container px-4 py-5">      
      <div class="row align-items-center">
        <div class="col-sm-8 col-lg-6">
          <h3 class="main"><?php echo get_field( "case_main_title" );?></h3>
          <h3 class="mb-3"><?php echo get_field( "case_title" );?></h3>
        </div>
        <div class="col-sm-8 col-lg-6">          
            <p><?php echo get_field( "case_description" );?></p>
        </div>        
      </div>
      <div class="row row-cols-lg-3 pt-4">
        
        <?php  $args = array( 'post_type' => 'services','post_status'=>'publish','order'    => 'DESC', 'posts_per_page' => 3 );
                    $new_query = new WP_Query( $args );
                    $i =0; 
                    if ($new_query->have_posts()) {
                    while($new_query->have_posts()){
                      $i++;
                    $new_query->the_post();

                     $post_metas = get_post_meta($post->ID);
                    
                    $title = $post->post_title; 
                    $description = $post->post_content;
             

                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
             ?>
        <div class="process col-lg-4 mb-2">
          <div class="feature-icon d-inline-flex align-items-left justify-content-left mb-3">
            <img src="<?php echo $image[0] ?>" class="img-fluid" loading="lazy">
          </div>
          <h4 class=""><?php echo  $title;?></h4>
          <p class="mb-0"><?php echo  $description;?></p>
          <!-- <a href="#" class="read">View case study >         -->
          </a>
        </div>
        

            <?php
              }
        }
    
    wp_reset_query();
    ?>

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
                        <div class="ml-2 about"><h5 class="d-block name"><?php the_sub_field('name'); ?></h5><span class="place"><?php the_sub_field('position'); ?></span></div>
                    </div>
                </div>
            </div>
             <?php endwhile; ?>

    

<?php endif; ?>
            
        </div>
      </div>
    </div>
  </section>
  <section class="team py-3">
    <div class="container px-4 py-5">      
      <div class="row d-flex align-items-center justify-content-center ">
        <div class="col-sm-6 col-lg-6 text-center">
          <?php 
            $testimonial = get_post(76);
          ?>
          <h3 class="main"><?php echo $testimonial->post_title;?></h3>
          <h3 class="mb-3"><?php echo $testimonial->post_content;?></h3>
        </div>       
      </div>
      <div class="row row-cols-lg-3 pt-4 text-center">
        <?php if( have_rows('team', 76) ): ?>
    <?php while( have_rows('team', 76) ): the_row(); ?>
        <div class="process col-lg-4">
          <div class="feature-icon d-inline-flex align-items-left justify-content-left mb-3">
            <img src="<?php the_sub_field('image'); ?>" class="img-fluid" loading="lazy">
          </div>
          <h4><?php the_sub_field('title'); ?></h4>
          <h5><?php the_sub_field('position'); ?></h5>
        </div>
       <?php endwhile; ?>

<?php endif; ?>

      </div>
    </div>
  </section>
  


<?php get_footer();?>