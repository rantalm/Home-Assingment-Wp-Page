<?php get_header(); ?>

<?php get_template_part('inc/template-parts/hero', 'page'); ?>

<!-- page content -->
<section class="section" id="scroll-to">
  <div class="content">
    <h2 class="section__title">Welcome to the Atrium Fund </h2>
    <h3 class="section__subtitle">
      Atrium Fund is encouraging a new generation of young, educated leaders from the periphery.
    </h3>
    <p class="section__txt">
      The Fund awards grants to exceptional students from the periphery, studying at the University of Haifa , in a wide range of disciplines, and provides comprehensive study scholarships , from BA to PhD for outstanding students. The students, who demonstrate leadership potential, academic excellence and social responsibility, receive full study grants for BA to PhD courses, covering a wide range of disciplines. The Students are also involved in community activities, take part in a unique leadership program and receive individual academic coaching.
    </p>
    <a href="#" class="btn">ABOUT US</a>
  </div>
</section>

<!-- carousel -->
<?php
/**
 * qeury testimonials
 */
$args = array(
  'post_type' => 'testimonials',
  'post_status' => 'publish',
  'posts_per_page' => -1,
);

$tesimonoals = new WP_Query($args);
if ($tesimonoals->have_posts())
?>
<section class="section carousel-wrap" style="background-image: url('<?= wp_upload_dir()['baseurl'] ?>/2020/10/shutterstock_778768615.jpg');">
  <div class="content content--wide carousel-wrap__inner">

    <div class="carousel-wrap__left">
      <h2 class="carousel-wrap__title">A word from our Students</h2>
    </div>
    <div class="carousel-wrap__right">
      <div class="carousel">
        <?php while ($tesimonoals->have_posts()) : $tesimonoals->the_post(); ?>
          <div class="carousel__slide">
            <div class="carousel__slide-inner">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="carousel__img" />
              <div class="carousel__content">
                <div class="carousel__name"><?php echo ucwords(get_the_title()); ?> <span class="carousel__date">graduated <?php the_field('g_date'); ?></span></div>
                <p class="carousel__quote">“<?php echo get_the_excerpt(); ?>”</p>
              </div>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>