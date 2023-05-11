<?php
get_header();

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 10,
  'orderby' => 'date',
  'order' => 'ASC'
);
$query = new WP_Query($args);
?>


<div class="limiter">
  <div class="container-homepage">
    <div class="wrap-table100">

      <div class="table100">
        <h1 class="title">
          Procedimentos
        </h1>
        <nav class="nav-home">

          <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="home-link">
                <button class="button-black">
                  <?php the_title() ?>
                </button>
              </a>
          <?php endwhile;
          endif; ?>
          </section>
        </nav>

      </div>
    </div>
  </div>

  <?php
  get_footer()
  ?>