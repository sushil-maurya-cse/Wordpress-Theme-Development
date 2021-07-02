<?php 
  /* Template Name: Homepage */ 
  get_header() 
  the_post()
?>
<main id="main">
  <!-- ======= Start Hero Section ======= -->
  <?php if (have_rows('header_section')) : ?>
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
              <?php while (have_rows('header_section')) : the_row(); ?>
                <?php
                $image = get_sub_field('slider_image');
                $header_text = get_sub_field('header_text');
                $sub_text_1 = get_sub_field('sub_text_1');
                $button_link = get_sub_field('button_link');
                $header_button_text = get_sub_field('header_button_text');
                ?>

                <div class="swiper-slide">
                    <section id="hero" class="d-flex justify-content-center align-items-center"> -->
                        <img src="<?php the_sub_field('slider_image'); ?>" class="img-fluid" alt="">
                          <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
                              <h1><?php the_sub_field('header_text'); ?><br><?php the_sub_field('sub_text_1'); ?></h1>
                              <h2><?php the_sub_field('sub_text-3'); ?></h2>
                              <a href="<?php the_sub_field('button_link'); ?>" class="btn-get-started-down"><?php the_sub_field('header_button_text'); ?></a>
                          </div>
                    </section>
                </div>
              <?php endwhile; ?>
         </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </div>
    </div>
  <?php endif; ?>
  <script>
      var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  </script>
  <!-- ======= End Hero Section ======= -->
  <main id="main">

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

        <div class="row counters">
          <?php
          $field1 = get_field_object('students');
          $field2 = get_field_object('courses');
          $field3 = get_field_object('events');
          $field4 = get_field_object('trainers');
          ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $field1['value']; ?>" data-purecounter-duration="1" class="purecounter"><?php echo $field1['value']; ?></span>
            <p><?php echo $field1['label']; ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $field2['value']; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $field2['label']; ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $field3['value']; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $field3['label']; ?></p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $field4['value']; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $field4['label']; ?></p>
          </div>

        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <?php if (have_rows('why_us_section')) :
          while (have_rows('why_us_section')) : the_row(); ?>
            <div class="row">
              <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                  <h3><?php the_sub_field('title') ?></h3>
                  <p>
                    <?php the_sub_field('body') ?>
                  </p>
                  <div class="text-center">
                    <a href="<?php the_sub_field('add_a_button_link'); ?>" class="more-btn"><?php the_sub_field('add_a_button_text'); ?> <i class="bx bx-chevron-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                  <div class="row">
                    <div class="col-xl-4 d-flex align-items-stretch">
                      <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-receipt"></i>
                        <h4><?php the_sub_field('heading-1') ?></h4>
                        <p><?php the_sub_field('body-1') ?></p>
                      </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                      <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-cube-alt"></i>
                        <h4><?php the_sub_field('heading-2') ?></h4>
                        <p><?php the_sub_field('body-2') ?></p>
                      </div>
                    </div>
                    <div class="col-xl-4 d-flex align-items-stretch">
                      <div class="icon-box mt-4 mt-xl-0">
                        <i class="bx bx-images"></i>
                        <h4><?php the_sub_field('heading-3') ?></h4>
                        <p><?php the_sub_field('body-3') ?></p>
                      </div>
                    </div>
                  </div>
                </div><!-- End .content-->
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
      <?php $hero = get_field('title_and_taglines'); ?>
      <div class="section-title" style="margin-top: 10px">
          <h2><?php echo $hero['title']; ?></h2>
          <p> <?php echo $hero['tagline']; ?></p>
        </div>
      
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php if (have_rows('our_features')) : while (have_rows('our_features')) : the_row();?>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <?php the_sub_field('featured_icon') ?>
                <!-- <i class="ri-store-line" style="color: #ffbb2c;"></i> -->
                <h3><a href=""><?php the_sub_field('name') ?></a></h3>
              </div>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?php the_title(); ?></h2>
          <p><?php the_field('tagline'); ?></p>
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
                  <?php echo wp_trim_words(get_the_content(), 14, '...'); ?>
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
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php
          $team_args = array(
            'post_type'    => 'team',
            'posts_per_page'    => 3
          );
          $team_posts = new WP_Query($team_args);
          while ($team_posts->have_posts()) {
            $team_posts->the_post();
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                <div class="member-content">
                  <h4><?php the_title(); ?></h4>
                  <span><?php the_field('subtitle'); ?></span>
                  <p>
                    <?php the_field('introduction'); ?>
                  </p>
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </section>
    <!-- End Trainers Section -->
 
  </main>

  <?php get_footer(); ?>
