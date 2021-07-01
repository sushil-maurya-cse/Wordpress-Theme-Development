<?php /* Template Name: Events Page */ ?>

<?php get_header() ?>
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Events</h2>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">
      <div class="row">
  <?php
        $event_args = array(
          'post_type'    => 'event',
          'posts_per_page'    => 2
        );
        $event_posts = new WP_Query($event_args);
        while ($event_posts->have_posts()) {
          $event_posts->the_post();
        ?>
    
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card">
          <div class="card-img">
          
          <?php the_post_thumbnail('portfolio-thumb', array('class' => 'img-fluid')); ?>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href=""><?php the_title(); ?></a></h5>
            <p class="fst-italic text-center"><?php echo   get_the_date() ?> at <?php echo   get_the_time() ?></p>
            <p class="card-text"><?php the_content(); ?></p>
          </div>
        </div>
      </div>
      
      <?php } ?></div>
    </div>

  </div>
</section><!-- End Events Section -->

</main><!-- End #main -->
<?php get_footer() ?>