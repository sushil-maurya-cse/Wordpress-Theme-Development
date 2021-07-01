<?php /* Template Name: Trainer Page */ ?>
<?php get_header() ?>

<main id="main" data-aos="fade-in">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php the_field('btitle') ?></h2>
        <p><?php the_field('bbody')?></p>
      </div>
    </div>
  <!-- End Breadcrumbs -->

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
    </section><!-- End Trainers Section -->

</main><!-- End #main -->
<?php get_footer(); ?>