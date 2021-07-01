<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">

          <div class="textwidget custom-html-widget">
            <?php $field = get_field_object('location', 'options'); ?>
            <?php $field1 = get_field_object('email', 'options'); ?>
            <?php $field2 = get_field_object('call', 'options'); ?>
            <h3><?php echo get_bloginfo('name'); ?></h3>
            <p>
              <?php echo $field['value']; ?><br>
              <strong><?php echo $field2['label']; ?>:</strong> <?php echo $field2['value']; ?><br>
              <strong><?php echo $field1['label']; ?>:</strong> <?php echo $field1['value']; ?><br>
            </p>
          </div>
        </div>


        <div class="col-lg-2 col-md-6 footer-links">
          <?php dynamic_sidebar('footer-2') ?>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <?php dynamic_sidebar('footer-3') ?>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
            <div class="convertful-128722"></div>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
      <?php  the_field('copyright-title', 'options'); ?>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <?php echo do_shortcode('[Sassy_Social_Share]');?>
    </div>
  </div>
</footer><!-- End Footer -->

<!-- <div id="preloader"></div
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

<!-- Vendor JS Files -->
<!-- <script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script> -->

<!-- Template Main JS File -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>