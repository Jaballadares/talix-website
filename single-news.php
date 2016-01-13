<?php
/*
Template Name: Single News Template
*/
?>

<?php get_header(); ?>

  <div class="w-section blog-post-section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="w-container">
    <div class="w-col w-col-10">
          <h5 class="all-press"><a href="/news">&lt; All News</a></h5>
        </div>
    <?php the_post_thumbnail('large', array(
      'class' => 'w-img-responsive'
    )); ?>
    </div>
  </div>
  <div class="w-section cis-section-2" id="features">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-2"></div>

      </div>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-2 blog-left-column">
         <h3 class="h3-green-header">News by Topic</h3>
          <?php $terms = get_terms('news_taxonomy'); ?>

          <?php
          $terms = get_terms('news_taxonomy');

          foreach ($terms as $term) {
            ?>
    <a class="paragraph-2 blog-post-topic" href="/news-categories/<?php echo $term->slug; ?>"><?php echo $term->name ?></a>
  <?php
}

?>
        </div>
        <div class="w-col w-col-10">
          <div id="fader">
            <h1 class="blog-post-heading-2"><?php the_title(); ?><?php single_cat_title(); ?></h1>
            <div>
              <div class="divider"></div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <div class="blog-date">Date: <?php the_time("F j, Y"); ?></div>
                </div>
                <div class="w-col w-col-4">
                  <div class="blog-topic">Topic: <?php printf(__(get_the_category_list(', '))) ?></div>
                </div>
              </div>
            </div>
            <p class="blog-paragraph"><?php the_content(); ?></p>
            <div class="divider"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
      <?php endwhile; endif; ?>
<?php get_footer(); ?>
