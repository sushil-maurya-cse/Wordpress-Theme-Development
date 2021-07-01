<?php /* Template Name: contact Page */ ?>
<?php get_header() ?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <?php dynamic_sidebar('contact-map'); ?>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="widget_text row mt-5">
            <div class="widget_text info">
              <div class="textwidget custom-html-widget">
              <?php  $field = get_field_object('location','options');?>
              <?php  $field1 = get_field_object('email','options');?>
              <?php  $field2 = get_field_object('call','options');?>

                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4><?php echo $field['label']; ?>:</h4>
                  <p> <?php echo $field['value']; ?></p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4><?php echo $field1['label']; ?>:</h4>
                  <p> <?php echo $field1['value']; ?></p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4><?php echo $field2['label']; ?>:</h4>
                  <p> <?php echo $field2['value']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <?php echo do_shortcode('[contact-form-7 id="379" title="Contact Page"]'); ?>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>