<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>
<div class="w-section cis-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9">
          <h1 class="blog-heading-1">Welcome to the Talix Blog</h1>
          <h2 class="blog-heading-2">The Hub that Powers Intelligent Conversations</h2>
        </div>
        <div class="w-col w-col-3"><img class="blog-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Blog-Image.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>

  <div class="w-section blog-post-section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="w-container">
    <div class="w-col w-col-10">
          <h5 class="all-press"><a href="/blog">&lt; All Posts</a></h5>
        </div>
    <!-- <?php the_post_thumbnail('large', array(
      'class' => 'w-img-responsive'
    )); ?> -->
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
        <div class="w-col w-col-2 blog-left-column mobile-hide">
          <?php dynamic_sidebar("sidebar-left"); ?>

          <div class="authors-list">
          <h3 class="h3-green-header">Posts by Author</h3>
          <?php wp_list_authors($args); ?>
          </div>
        </div>
        <div class="w-col w-col-10">
          <div data-ix="fade-in-on-scroll">
            <h1 class="blog-post-heading-2"><?php the_title(); ?><?php single_cat_title(); ?></h1>
            <div>
              <div class="divider"></div>
              <div class="w-row blog-header">
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
            </div>
            <?php the_content();  ?>




          </div>
        </div>
      </div>
    </div>
  </div>
      <?php endwhile; endif; ?>
<?php get_footer(); ?>
