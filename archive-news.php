<?php
/*
Template Name: Archive News Template
*/
?>

<?php get_header(); ?>

<div class="w-section cis-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
          <h1 class="blog-heading-1">Pressroom</h1>
          <h2 class="blog-heading-2">Talix in the News</h2>
        </div>
        <div class="w-col w-col-2"><img class="blog-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Blog-Image.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section cis-section-2" id="features">
    <div class="w-container">

    <h4 class="author-heading"><span>
    <?php if ( is_category() ) : ?>
    <?php _e( 'Category:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
    <?php elseif (is_author()): ?>
    <?php _e( 'Author:', 'bonestheme' ); ?></span> <?php the_author(); ?>
    <?php endif; ?>
    </h4>
      <div class="w-row">
        <!-- <div class="w-col w-col-2 blog-left-column">

          <h3 class="h3-green-header">News by Topic</h3>

          <?php $terms = get_terms('news_taxonomy'); ?>

          <?php
          $terms = get_terms('news_taxonomy');

          foreach ($terms as $term) {
            ?>
    <a class="paragraph-2 blog-post-topic" href="/press-releases-categories/<?php echo $term->slug; ?>"><?php echo $term->name ?></a>
  <?php
}

?>

        <div class="authors-list">
          <h3 class="h3-green-header">Post by Author</h3>
          <?php wp_list_authors($args); ?>
        </div>
        </div> -->

        <div class="w-col w-col-9">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div><?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('small'); ?>
            </a>
            <?php } ?>

            <div>
              <div class="w-row">
                <div class="w-col w-col-12">

               <!--    <div class="blog-topic">Topic: <?php $terms = wp_get_post_terms( get_the_ID(), 'news_taxonomy'); foreach ($terms as $term) {
  ?>
  <a href="/press-releases-categories/<?php echo $term->slug; ?>"/><?php echo $term->name ?></a>
<?php
}?></div> -->
              </div>
            </div>

            <h3 class="blog-post-heading-1"><a class="w-inline-block blog-link" href="<?php the_field('article_link'); ?>"><?php the_title(); ?></a></h3>
            <div class="publication publication-news-archive"><?php the_field('publication'); ?></div>
            <div class="date"><?php the_time("F j, Y"); ?></div>

          </div>
        </div>

            <div class="divider"></div>
                <?php endwhile; endif; ?>
          </div>
  <div class="w-col w-col-3 side-column">
    <h3 class="h3-green-header">Read our Latest Twitter Updates</h3>
<a class="twitter-timeline" href="https://twitter.com/TalixHealth" data-widget-id="648617076454625280">Tweets by @TalixHealth</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <h3 class="h3-green-header">Watch our Latest Videos</h3>
    <?php the_field('video_embed_code'); ?>
    <iframe width="186" height="105" src="https://www.youtube.com/embed/oRZ2UgtL7WY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    <h3 class="h3-green-header">Play our HealthTaxonomy Game</h3><a class="w-button button sidebar-button" href="http://healthlinetaxonomygame.herokuapp.com/">Taxonomy Game</a>
  </div>

<div class="w-clearfix"></div>
          <?php bones_page_navi(); ?>



        </div>
      </div>

      </div>
    </div>
  </div>
<?php get_footer(); ?>



