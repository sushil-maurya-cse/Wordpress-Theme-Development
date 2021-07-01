<?php /* Template Name: Pricing Page */ ?>
<?php get_header() ?>
<?php the_post();?>
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

      <?php echo do_shortcode('[supsystic-price-table id=8]'); ?>
         
    </section><!-- End Pricing Section -->

  </main>

<?php get_footer(); ?>