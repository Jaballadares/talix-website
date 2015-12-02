<?php
/*
Template Name: Product For Provider Template
*/
 ?>

<?php get_header(); ?>

 <div class="w-section cis-section-1">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
         <?php if( have_rows('main_header') ): while ( have_rows('main_header')): the_row(); ?>
          <h3 class="ci-heading-1"><?php the_sub_field('top_header'); ?></h3>
          <h1 class="cis-heading-2"><?php the_sub_field('sub_header'); ?></h1>
        </div>
        <?php endwhile; endif; ?>
        <div class="w-col w-col-2"><img class="provider-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix Website Elements-06.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section cis-section-2" id="features">
   <?php if( have_rows('provider_solution_content') ): while ( have_rows('provider_solution_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>
    <div class="w-container">
      <p class="provider-paragraph-1"><?php the_sub_field('top_text'); ?></p>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9">
          <div data-ix="fade-in-on-scroll">
            <div class="w-row provider-row">
              <div class="w-col w-col-4"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix Website Elements-09.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="cis-heading-3"><?php the_sub_field('value_prop_1'); ?></h4>
              </div>
            </div>
            <p class="provider-paragraph-1"><?php the_sub_field('value_prop_1_blurb'); ?></p><a class="w-button button cis-button-1 schedule-button-1 schedule-button" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row provider-row">
              <div class="w-col w-col-4"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Calculator-Precision.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="providers-heading-1"><?php the_sub_field('value_prop_2'); ?></h4>
              </div>
            </div>
            <p class="provider-paragraph-1"><?php the_sub_field('value_prop_2_blurb'); ?></p><a class="w-button button cis-button-1 schedule-button-2 schedule-button" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row provider-row">
              <div class="w-col w-col-4"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Checklist-Icon.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="providers-heading-1"><?php the_sub_field('value_prop_3'); ?></h4>
              </div>
            </div>
            <p class="provider-paragraph-1"><?php the_sub_field('value_prop_3_blurb'); ?></p><a class="w-button button cis-button-1 schedule-button-3 schedule-button" href="/scheduler">Schedule a Demo!</a>
          </div>
          <div data-ix="fade-in-on-scroll">
            <div class="w-row provider-row">
              <div class="w-col w-col-4"><img class="provider-image-2" src="<?php bloginfo('template_directory'); ?>/library/images/TalixDatabaseIcon.png">
              </div>
              <div class="w-col w-col-8">
                <h4 class="providers-heading-1"><?php the_sub_field('value_prop_4'); ?></h4>
              </div>
            </div>
            <p class="provider-paragraph-1"><?php the_sub_field('value_prop_4_blurb'); ?></p>
          <?php endif; ?>
<?php endwhile; endif; ?>
            <a class="w-button button cis-button-1 schedule-button-4 schedule-button" href="#">Schedule a Demo!</a>
          </div>
        </div>
        <div class="w-col w-col-3 side-column mobile-hide">
          <!-- <h3 class="h3-green-header">How Much Can You Get Back in Reimbursements?</h3>
          <div class="paragraph-2 p2-on-green">Try out our risk calculator</div>
            <a class="button learn-more-white">Risk Calculator</a>
          </a> -->
          <h3 class="h3-green-header">Learn More about Coding InSight</h3>
          <div class="post-title"><a href="http://www.talix.com/wp-content/uploads/2015/11/Company_Overview_Brochure_2015TX_v5.pdf">Download our Coding InSight Overview Sheet</a></div>

          <div class="post-title"><a href="/products/coding-insight-for-payers">Read about Coding InSight for Payers</a></div>
          <div class="divider sidebar-divider"></div>
          <h3 class="h3-green-header">Read Related Blog Posts</h3>
          <?php
            query_posts(array(
              'post_type' => 'post',
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
  <div class="w-section cis-section-3">
    <div class="w-container">
      <h4 class="cis-heading-4">What Can Coding InSight Do for You?</h4>
    </div>
    <div class="w-container">
      <div class="w-row cis-row-1">
        <div class="w-col w-col-3 providers-column-1"><img class="provider-image-3" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Up-Graph.png">
        </div>
        <div class="w-col w-col-3">
          <div class="provider-paragraph-2">7-10x
            <br>ROI</div>
        </div>
        <div class="w-col w-col-3"><img class="provider-image-3" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Hand-Heart-Icon.png">
        </div>
        <div class="w-col w-col-3">
          <div class="provider-paragraph-2">10-15% Improvement in RAF Score</div>
        </div>
      </div>
    </div>
    <div class="w-container divider"></div>
    <div class="w-container">
      <div class="w-row cis-row-1">
        <div class="w-col w-col-3"><img class="provider-image-4" src="<?php bloginfo('template_directory'); ?>/library/images/Clive-Fields-BW.jpg">
        </div>
        <div class="w-col w-col-9">
          <p class="provider-paragraph-1">“Before Village Family Practice began the pilot program with Coding InSight, each of our clinicians manually went through the patient charts and mined codes that were either captured inaccurately or missing altogether. This required a lot of time from our clinicians—time that could be better spent seeing patients—and we wanted a solution that would automate this tedious process for us. With Coding InSight, we are already beginning to see significant improvements in practice efficiency as well as potential cost savings and improvements in care quality.”</p>
          <p class="italics-paragraph">— Clive Fields, MD,  President of Village Family Practice</p>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>
