<?php
get_header();

$works_category = '';
$works_tag = '';

if (isset($_GET['c'])) {
  $works_category = $_GET['c'];
}
if (isset($_GET['t'])) {
  $works_tag = $_GET['t'];
}

$wp_query = new WP_Query(array('post_type' => 'works', 'post_status' => 'publish', 'category_name' => $works_category,));

$tag_list = [];
if (have_posts()): while (have_posts()): the_post();

  $posttags = get_the_tags();
  if ($posttags) {
    foreach ($posttags as $tag) {
      $tag_list[] = $tag->name;
    }
  }

endwhile;
endif;
wp_reset_query();
$tag_list = array_unique($tag_list);
if (is_mobile()) {
  $posts_per_page = 30;
} else {
  $posts_per_page = -1;
}

$args = array(
  'post_type' => 'works',
  'post_status' => 'publish',
  'order' => 'DESC',
  'orderby' => 'date',
  'posts_per_page' => $posts_per_page,
  'category_name' => $works_category,
  'tag_slug__in' => $works_tag,
);
?>
  <div class="wrapper works-category">
    <div class="select-cat">
      <div class="pc">
        <img class="bg" src="<?php echo get_template_directory_uri() . '/assets/img/works/bg-works.jpg'; ?>"
             alt="works">
        <a href="/works/?c=dtp"><img class="dtp nav"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-dtp.svg'; ?>"
                                     alt="dtp"></a>
        <a href="/works/?c=logo"><img class="logo nav"
                                      src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-logo.svg'; ?>"
                                      alt="logo"></a>
        <a href="/works/?c=movie"><img class="movie nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-movie.svg'; ?>"
                                       alt="movie"></a>
        <a href="/works/?c=other"><img class="other nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-other.svg'; ?>"
                                       alt="other"></a>
        <a href="/works/?c=photo"><img class="photo nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-photo.svg'; ?>"
                                       alt="photo"></a>
        <a href="/works/?c=web"><img class="web nav"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-web.svg'; ?>"
                                     alt="web"></a>
      </div>
      <div class="sp">
        <img class="bg-sp"
             src="<?php echo get_template_directory_uri() . '/assets/img/works/bg-works_sp.jpg'; ?>"
             alt="works">
        <a href="/works/?c=dtp"><img class="dtp-sp nav"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-dtp_sp.svg'; ?>"
                                     alt="dtp"></a>
        <a href="/works/?c=logo"><img class="logo-sp nav"
                                      src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-logo_sp.svg'; ?>"
                                      alt="logo"></a>
        <a href="/works/?c=movie"><img class="movie-sp nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-movie_sp.svg'; ?>"
                                       alt="movie"></a>
        <a href="/works/?c=other"><img class="other-sp nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-other_sp.svg'; ?>"
                                       alt="other"></a>
        <a href="/works/?c=photo"><img class="photo-sp nav"
                                       src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-photo_sp.svg'; ?>"
                                       alt="photo"></a>
        <a href="/works/?c=web"><img class="web-sp nav"
                                     src="<?php echo get_template_directory_uri() . '/assets/img/works/nav-web_sp.svg'; ?>"
                                     alt="web"></a>
      </div>
    </div>
    <?php if ($works_category) : ?>
      <nav id="works-nav" class="works">
        <h2>
          <?php if ($works_category) : ?>
            <a href="?c=<?php echo $works_category; ?>"><img
                  src="<?php echo get_template_directory_uri() . '/assets/img/works/' . $works_category . '.svg'; ?>"
                  alt="<?php echo $works_category; ?>"></a>
          <?php else : ?>
            works
          <?php endif; ?>
        </h2>
        <ul>
          <?php foreach ($tag_list as $tag) : ?>
            <li><a href="?c=<?php echo $works_category; ?>&t=<?php echo $tag; ?>">#<?php echo $tag; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
      <div class="client-works">
        <ul class="masonry">
          <?php
          $wp_query = new WP_Query($args);
          $i = 0;
          ?>
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php
            $image = wp_get_attachment_image_src(get_field('img'), 'full');
            $url = $image[0];
            $width = $image[1];
            $r = (int)$width / 281;
            $height = round($image[2] / $r, 0);
            ?>
            <li id="<?php echo $i; ?>" class="modal-button item" <?php
            if (!is_mobile()) {
              echo 'style="height: ' . $height . 'px';
            } ?>">
              <img
                  data-src="<?php echo $url; ?>"
                  class="lazyload"
                  alt="<?php the_title(); ?>">
            </li>
            <?php $i++; ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
      <div id="modal-container">
        <div class="modal-background">
          <div class="modal">
            <?php
            $i = 0;
            ?>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
              <?php
              $image = wp_get_attachment_image_src(get_field('img'), 'full');
              $description = get_field('description');
              $url = $image[0];
              ?>
              <div class="works-modal <?php echo $i; ?>">
                <img data-src="<?php echo $url; ?>"
                     class="lazyload"
                     alt="<?php the_title(); ?>">
                <p><?php echo $description; ?></p>
              </div>
              <?php $i++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                 preserveAspectRatio="none">
              <rect x="0" y="0" fill="none" width="700" height="500" rx="3" ry="3"></rect>
            </svg>
          </div>
        </div>
      </div>
      <div class="go-top"><a href="#"><img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/works/up_1.png"
              alt=""></a></div>
    <?php endif; ?>
  </div>

<?php get_footer();
