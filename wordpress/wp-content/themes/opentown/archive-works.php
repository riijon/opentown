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

$args = array(
    'post_type' => 'works',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    'category_name' => $works_category,
    'tag_slug__in' => $works_tag,
);
?>
  <div class="wrapper">
    <div class="select-cat">
      <img class="bg" src="<?php echo get_template_directory_uri() . '/assets/img/works/bg-works.jpg'; ?>" alt="works">
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
          <li><a href="?c=<?php echo $works_category; ?>&t=<?php echo $tag; ?>">#<?php echo $tag; ?></a>
          </li>
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
          $image = get_field('img');
          $url = $image['url'];
          $width = $image['width'];
          $r = (int)$width / 281;
          $height = round($image['height'] / $r, 0);
//          echo $height;
          ?>
          <li id="<?php echo $i; ?>" class="modal-button item" style="height: <?php echo $height; ?>px;"><img
                src="<?php echo $url; ?>"
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
            $image = get_field('img');
            $description = get_field('description');
            $url = $image['url'];
            ?>
            <div class="works-modal <?php echo $i; ?>">
              <img src="<?php echo $url; ?>"
                   alt="<?php the_title(); ?>">
              <p><?php echo $description; ?></p>
            </div>
            <?php $i++; ?>
          <?php endwhile; ?>
          <?php endif; ?>
          <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
               preserveAspectRatio="none">
            <rect x="0" y="0" fill="none" width="600" height="400" rx="3" ry="3"></rect>
          </svg>
        </div>
      </div>
    </div>
    <div class="go-top"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/up_1.png"
                                         alt=""></a></div>
  </div>

<?php get_footer();
