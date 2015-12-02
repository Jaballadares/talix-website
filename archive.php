<?php get_header(); ?>

<div class="w-section cis-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
          <h1 class="blog-heading-1">Welcome to the Talix Blog</h1>
          <h2 class="blog-heading-2">The Hub that Powers Intelligent Conversations</h2>
        </div>
        <div class="w-col w-col-2"><img class="blog-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Blog-Image.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section cis-section-2" id="features">
    <div class="w-container">

    <div class="author-heading">
    <?php if ( is_category() ) : ?>
    <?php _e( 'Category:', 'bonestheme' ); ?>
     <?php single_cat_title(); ?>
    <?php elseif (is_author()): ?>
    <?php echo get_avatar( $post->post_author ); ?>
    <?php _e( '', 'bonestheme' ); ?>
    <div class="info-wrapper">
    <p class="author-name"><?php the_author(); ?></p>

    <p><?php the_author_meta('description'); ?></p>
    </div>

    <?php endif; ?>
    </div> <!-- end author heading -->
      <div class="w-row">
        <div class="w-col w-col-2 blog-left-column">
          <?php dynamic_sidebar("sidebar-left"); ?>
        <div class="authors-list">
          <h3 class="h3-green-header">Post by Author</h3>
          <?php wp_list_authors($args); ?>
        </div>
        </div>

        <div class="w-col w-col-7">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="featured-image-blog-container"><?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink() ?>">
              <?php the_post_thumbnail('small'); ?>
            </a>
            <?php } ?>

            <div>
              <div class="w-row">
                <div class="w-col w-col-4">
                  <div class="blog-author">Author: <?php the_author_posts_link(); ?></div>
                </div>
                <div class="w-col w-col-4">
                  <div class="blog-date">Date: <?php the_time("F j, Y"); ?></div>
                </div>
                <div class="w-col w-col-4">
                  <div class="blog-topic">Topic: <?php printf(__(get_the_category_list(', '))) ?></div>
              </div>
            </div>
            <h3 class="blog-post-heading-1"><a class="w-inline-block blog-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="w-row">
              <div class="w-col w-col-2"><h5><a class="w-clearfix w-inline-block blog-read-more" href="<?php echo get_permalink(); ?>"></a></h5>
              </div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
              <div class="w-col w-col-2"></div>
            </div>
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
    <h3 class="h3-green-header">Play our HealthTaxonomy Game</h3><a class="w-button button sidebar-button" href="http://talixtaxonomygame.herokuapp.com/">Taxonomy Game</a>
  </div>

<div class="w-clearfix"></div>
          <?php bones_page_navi(); ?>



        </div>
      </div>

      </div>
    </div>
  </div>
<?php get_footer(); ?>
