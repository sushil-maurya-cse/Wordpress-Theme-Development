<?php /* Template Name: Course Page */ ?>
<?php get_header() ?>
<!-- End Header -->

<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php the_field('btitle') ?></h2>
      <p><?php the_field('bbody') ?></p>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- ======= Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Courses</h2>
        <p>Popular Courses</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $blog_args = array(
          'post_type'    => 'post',
          'posts_per_page'    => 3
        );
        $blog_posts = new WP_Query($blog_args);
        while ($blog_posts->have_posts()) {
          $blog_posts->the_post();
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <?php the_post_thumbnail('course-img', array('class' => 'img-fluid course-img')); ?>
              <!-- <img src="assets/img/course-1.jpg" class="img-fluid" alt="..."> -->
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php the_title(); ?></h4>
                  <p class="price"><?php the_field('course_price'); ?></p>
                </div>

                <h3><a href="<?php the_permalink(); ?>"><?php the_field('area_of_course'); ?></a></h3>
                <?php echo wp_trim_words(get_the_content(), 10, '...'); ?>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php the_field('tutor_image'); ?>" class="img-fluid" alt="">
                    <span><?php the_field('tutor'); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
        <?php } ?>
      </div>

    </div>
  </section><!-- End Courses Section -->

</main><!-- End #main -->




<!-- ======= Footer ======= -->
<?php get_footer(); ?>