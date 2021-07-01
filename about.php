<?php /* Template Name: About Page */ ?>
<?php get_header() ?>
<?php the_Post() ?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      <?php if (have_rows('about_header_text_copy2')) :
          while (have_rows('about_header_text_copy2')) : the_row(); ?>
            <h2><?php the_sub_field('title') ?></h2>
            <p><?php the_sub_field('body')?></p>
          <?php endwhile; ?>
        <?php endif; ?>  
      </div>
    </div>
  <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php $hero = get_field('about_section_copy'); ?>
        <div class="row">
          <?php $repeater = $hero['bullets']; ?>
          <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content">
            <?php if (have_rows('about_section_copy')) : while (have_rows('about_section_copy')) : the_row(); ?>
                <h3><?php echo $hero['about_header_text']; ?></h3>
                <p class="fst-italic">
                  <?php echo $hero['add_more_info']; ?>
                </p>

                <ul>
                  <?php if (have_rows('bullets')) : while (have_rows('bullets')) : the_row();
                      $bullet = get_sub_field('add_bullet_1'); ?>
                      <li><i class="bi bi-check-circle"></i> <?php echo get_sub_field('add_bullet_1') ?></li>
                      <?php endwhile; ?><?php endif; ?><?php endwhile; ?>
                    <?php endif; ?>
                </ul>
                <p>
                  <?php echo $hero['add_more_info']; ?>
                </p>
          </div>
          <div class="col-lg-6 order-2 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo $hero['about_image']; ?>" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>
    <!-- ===== End About Section ======= -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts section-bg">
    <div class="container">
      <?php $hero = get_field('counts');?>
      <div class="row counters">
        <?php
            $field1 = get_field_object('students');
            $field2 = get_field_object('courses');
            $field3 = get_field_object('events');
            $field4= get_field_object('trainers');
        ?>
        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $hero['students']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $field1['value']; ?></span>
          <p>Students</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $hero['subjects']; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $hero['events']; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Events</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="<?php echo $hero['trainers']; ?>" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>

      </div>
    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
 
      <div class="section-title">
        <h2>TESTIMONIALS</h2>
        <p>WHAT ARE THEY SAYING</p>
      </div>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
        <?php
        $testimonial_args = array(
          'post_type'    => 'testimonial',
          'posts_per_page'    => 5
        );
        $testimonial_posts = new WP_Query($testimonial_args);
        while ($testimonial_posts->have_posts()) {
          $testimonial_posts->the_post();
        ?>
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <?php the_post_thumbnail('testimonial-image'); ?>
                <h3><?php the_title(); ?></h3>
                <h4><?php the_field('designation'); ?></h4>
                <?php the_content(); ?>
              </div>
            </div>
          </div><!-- End testimonial item -->
           <?php } ?>
         

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->


</div>
<?php get_footer(); ?>