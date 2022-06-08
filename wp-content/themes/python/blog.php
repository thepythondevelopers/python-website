<?/*
Template name: Blog
*/?>


<?php get_header();?>


    <section class="inner-cap blog-cp">
      <div class="container col-xxl-8 px-4 py-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 text-center">
          <div class="col-lg-12">
            <h1 class="mb-2">Our Blogs</h1>
          </div>
        </div>
    </section>
    <!--FREE QUOTE FORM START HERE-->    
    <section class="blogs py-5">
      <div class="container">      
        <div class="row g-5">
          <div class="col-md-8">
            <?php  $args = array( 'post_type' => 'post','post_status'=>'publish','order'    => 'DESC', 'posts_per_page' => -1 );
                    $new_query = new WP_Query( $args );
                    $i =0; 
                    if ($new_query->have_posts()) {
                    while($new_query->have_posts()){
                      $i++;
                    $new_query->the_post();

                     $post_metas = get_post_meta($post->ID);
             
                     $client_name = $post_metas['client_name'][0];
                    
                    $title = $post->post_title; 
                    $description = $post->post_content;
                    $date = $post->post_date;

                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
             ?>
            <article class="blog-post mb-5">
              <h3 class="blog-post-title"><?php echo $title; ?></h3>
              <p class="blog-post-meta"><?php echo date('d M,Y',strtotime($date)) ?><a href="#"><?php echo $client_name;?></a></p>
              <div class="blog-img mb-3">
                <img src="<?php echo $image[0];?>" class="img-fluid" loading="lazy">
              </div> 
              <p>
                <?php echo wp_trim_words( $description, 55); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="aplwhte-btn btn btn-primary btn-lg px-4 me-md-2">Read More</a>
              
            </article>

            <?php
              }
        }
    
    wp_reset_query();
    ?>
            
          </div>
      
          <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
              <!-- <div class="p-4 mb-3 bg-light rounded">
                <h4>About</h4>
                <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
              </div>
              <div class="card mb-4">
                <div class="card-body">
                  <h4 class="card-title">Tags</h4>
                  <a class="btn btn-light btn-sm mb-1" href="#">Development</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">Designing</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">eCommerce</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">Python</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">PHP</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">Wordpress</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">HTML</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">CSS</a>
                  <a class="btn btn-light btn-sm mb-1" href="#">Magento</a>
                </div>
              </div> -->
              <div class="card mb-4">
                <div class="card-body">
                  <h4 class="card-title">Popular Blogs</h4>
  				    <?php  $args = array( 'post_type' => 'post','post_status'=>'publish','order'    => 'DESC', 'posts_per_page' => 3 );
                    $new_query = new WP_Query( $args );
                    $i =0; 
                    if ($new_query->have_posts()) {
                    while($new_query->have_posts()){
                      $i++;
                    $new_query->the_post();
                     $client_name = $post_metas['client_name'][0];
                    $title = $post->post_title; 
                    $date = $post->post_date;

                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
             ?>
                  <a href="<?php the_permalink(); ?>" class="d-inline-block mb-2">
                    <h6><?php echo $title?></h6>
                    <img src="<?php echo $image[0]?>" class="img-fluid" loading="lazy">
                  </a>
                  <time class="timeago" ><?php echo time_ago(); ?></time>
  				<?php
              }
        }
    
    wp_reset_query();
    ?>	
                  
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---============================FAQ SECTION-->    


<?php get_footer(); ?>