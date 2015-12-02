<?php
/*
Template Name: Page Products Payers
*/
?>

<?php get_header(); ?>

<div class="w-section cis-payers-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
 <?php if( have_rows('main_header') ): while ( have_rows('main_header')): the_row(); ?>
      <h3 class="ci-heading-1"><?php the_sub_field('top_header'); ?></h3>
      <h1 class="cis-heading-2"><?php the_sub_field('sub_header'); ?></h1>
        </div>
         <?php endwhile; endif; ?>
        <div class="w-col w-col-2"><img class="payer-image-1" id="Payer" src="<?php bloginfo('template_directory'); ?>/library/images/TalixSmallGraphIcon.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section cis-payers-section-2" id="features">
    <?php if( have_rows('payer_solution_content') ): while ( have_rows('payer_solution_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>
   <div class="w-container">
      <p class="payer-paragraph-1"><?php the_sub_field('top_text'); ?></p>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9">
          <div data-ix="fade-in-on-scroll">
            <div class="w-row payer-row">
              <div class="w-col w-col-4"><img class="payer-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/TalixStopWatchIcon.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="payer-heading"><?php the_sub_field('value_prop_1'); ?></h4>
              </div>
            </div>
            <p class="payer-paragraph-1"><?php the_sub_field('value_prop_1_blurb'); ?></p><a class="w-button button cis-button-1" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row payer-row">
              <div class="w-col w-col-4"><img class="payer-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-3-gear-icon.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="payer-heading-2"><?php the_sub_field('value_prop_2'); ?></h4>
              </div>
            </div>
            <p class="payer-paragraph-1"><?php the_sub_field('value_prop_2_blurb'); ?></p><a class="w-button button cis-button-1" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row payer-row">
              <div class="w-col w-col-4 w-clearfix"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-analytics-and-reporting.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="payer-heading"><?php the_sub_field('value_prop_3'); ?></h4>
              </div>
            </div>
            <p class="payer-paragraph-1"><?php the_sub_field('value_prop_3_blurb'); ?></p><a class="w-button button cis-button-1" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row payer-row">
              <div class="w-col w-col-4 w-clearfix"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Audit-Confidence-Icon.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="payer-heading"><?php the_sub_field('value_prop_4'); ?></h4>
              </div>
            </div>
            <p class="payer-paragraph-1"><?php the_sub_field('value_prop_4_blurb'); ?></p>
          <?php endif; ?>
<?php endwhile; endif; ?>
            <a class="w-button button cis-button-1" href="/scheduler">Schedule a Demo!</a>
          </div>
        </div>
        <div class="w-col w-col-3 side-column mobile-hide">

         <!--  <h3 class="h3-green-header">How Much Can You Get Back in Reimbursements?</h3>
          <div class="paragraph-2 p2-on-green">Try out our risk calculator</div>
          <a class="button learn-more-white">Risk Calculator</a>
          </a> -->
          <h3 class="h3-green-header">Learn More about Coding InSight</h3>
          <div class="post-title"><a href="http://www.talix.com/wp-content/uploads/2015/11/Company_Overview_Brochure_2015TX_v5.pdf">Download our Product Overview Sheet</a></div>
          <div class="post-title"><a href="/products/coding-insight-for-providers">Read about Coding InSight for Providers</a></div>
          <div class="divider sidebar-divider"></div>

          <h3 class="h3-green-header">Read Related Blog Posts</h3>

          <?php
            query_posts(array(
              'post_type' => 'any',
              'category_name' => 'coding-insight',
              'showposts' => 3
            ));
            ?>
           <?php while(have_posts()): the_post(); ?>
          <div class="post-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="divider sidebar-divider"></div>
        <?php endwhile; ?>
          <h3 class="h3-green-header">Learn More about HealthData Engine</h3>
          <div class="post-title"><a href="/platform">Visit our Platform Page</a></div>
        </div>
      </div>
    </div>
    <div class="w-container divider"></div>
  </div>
  <div class="w-section cis-payers-section-3">
    <div class="w-container">
      <h4 class="cis-heading-4">What Can Coding InSight Do for You?</h4>
    </div>
    <div class="w-container">
      <div class="w-row cis-row-1">
        <div class="w-col w-col-5"><img class="payer-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Coder-Productivity-icon.png">
        </div>
        <div class="w-col w-col-7 w-clearfix">
          <div class="provider-paragraph-2">3x Improvement in Coder Productivity</div>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
