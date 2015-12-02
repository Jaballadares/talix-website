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

  <div class="w-section blog-post-section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="w-container">
    <div class="w-col w-col-10">
          <h5 class="all-press"><a href="/press-releases">&lt; All Press Releases</a></h5>
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

        <div class="w-col w-col-12">
          <div data-ix="fade-in-on-scroll">
            <h1 class="blog-post-heading-2"><?php the_title(); ?><?php single_cat_title(); ?></h1>
            <div>
              <div class="divider"></div>
              <div class="w-row">

                <div class="w-col w-col-12">
                  <div class="blog-date">Date: <?php the_time("F j, Y"); ?></div>
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
