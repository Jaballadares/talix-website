<?php
/*
Template Name: Platform Template
*/
?>

<?php get_header(); ?>

<div class="w-section hde-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
         <?php if( have_rows('main_header') ): while ( have_rows('main_header')): the_row(); ?>
          <h3 class="hde-headline-1"><?php the_sub_field('top_header'); ?></h3>
          <h1 class="hde-headline-2 platform-headline"><?php the_sub_field('sub_header'); ?></h1>
        </div>
           <?php endwhile; endif; ?>
        <div class="w-col w-col-2"><img class="hde-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/TalixCodeIcon.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section hde-section-2" id="features">
     <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>
    <div class="w-container platform-container-1">
      <p class="hde-paragraph"><?php the_sub_field('top_text'); ?></p>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9 platform-column">
          <div data-ix="fade-in-on-scroll">
            <h4 class="hde-heading-1"><?php the_sub_field('platform_product_name'); ?></h4>
            <p class="hde-paragraph"><?php the_sub_field('platform_blurb'); ?></p><img class="hde-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/BreastCancerTaxonomy.png">
          </div>
          <div data-ix="fade-in-on-scroll">
            <h4 class="hde-heading-1"><?php the_sub_field('natural_language_processing_title'); ?></h4>
            <p class="hde-paragraph"><?php the_sub_field('nlp_blurb'); ?></p><img class="hde-image-3" src="<?php bloginfo('template_directory'); ?>/library/images/NLP1.gif">
          </div>
          <div data-ix="fade-in-on-scroll">
            <h4 class="hde-heading-1"><?php the_sub_field('clinical_rules_title'); ?></h4>
            <p class="hde-paragraph"><?php the_sub_field('clinical_rules_blurb'); ?></p><img class="hde-image-4" src="<?php bloginfo('template_directory'); ?>/library/images/ClinicalRules.png">
          </div>
        </div>
        <div class="w-col w-col-3 side-column">
          <h3 class="h3-green-header">Learn More about HealthData Engine</h3>
          <div class="divider sidebar-divider"></div>
          <h3 class="post-title"><a href="<?php bloginfo('template_directory'); ?>/library/images/Company_Overview_Brochure_2015TX_v5.pdf">Download our product overview sheet</a></h3>
          <h3 class="h3-green-header">Read Related Blog Posts</h3>
          <?php query_posts(array(
              'post_type' => 'any',
              'category_name' => 'coding-insight',
              'showposts' => 3
            ));
            ?>
          <div class="divider sidebar-divider"></div>
          <?php while(have_posts()): the_post(); ?>
          <div class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="divider sidebar-divider"></div>
        <?php endwhile; ?>

         <!--  <div class="divider sidebar-divider"></div> -->
          <h3 class="h3-green-header">What’s Your Health IQ?</h3>
          <div class="post-text">Test your knowledge with our HealthTaxonomy game</div><a class="w-button button sidebar-button" href="http://talixtaxonomygame.herokuapp.com/">Taxonomy Game</a>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section hde-section-3">
    <div class="w-container">
      <h4 class="h4-white"><?php the_sub_field('cta_question'); ?></h4>
                <?php endif; ?>
<?php endwhile; endif; ?>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <a class="w-inline-block hde-image-5" href="/products/coding-insight-for-providers"><img class="hde-image-5" width="195" src="<?php bloginfo('template_directory'); ?>/library/images/TalixDocumentIcon.png"> <!-- data-ix="fade-in-on-scroll" -->
          </a>
          <div class="text-white"><a class="text-white" href="/products/coding-insight-for-providers">Coding InSight for Providers</a>
          </div>
        </div>
        <div class="w-col w-col-6">
          <a class="w-inline-block hde-image-6" href="/products/coding-insight-for-payers"><img class="hde-image-6" width="195" src="<?php bloginfo('template_directory'); ?>/library/images/TalixSmallGraphIcon.png">
          </a>
          <div class="text-white"><a class="text-white" href="/products/coding-insight-for-payers">Coding InSight for Payers</a>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php get_footer(); ?>