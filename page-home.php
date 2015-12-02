<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

 <div class="w-section section main" id="top">
    <div class="w-container">
      <div>
        <div class="w-row">
          <div class="w-col w-col-9">
          <?php if( have_rows('main_header') ): while (have_rows('main_header')): the_row(); ?>
            <h4 class="top-heading"><?php the_sub_field('top_header');  ?></h4>
            <h1 class="cis-heading-2"><?php the_sub_field('sub_header'); ?></h1>
          </div>
          <div class="w-col w-col-3"><img class="home-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/TalixHomePageIcon.png" data-ix="fade-in-on-load" alt="Patient Data Analytics Icon">
          </div>
        </div>
      </div>

    <?php endwhile; endif; ?>
    </div>
    <div class="w-container"><a class="button" href="/scheduler">Schedule a Demo</a>
    </div>
  </div>
  <div class="w-section healthdata-engine section" id="features">
    <div class="w-container">
    <?php if (have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_1'); ?>
      <p class="home-paragraph"><?php the_sub_field('top_text'); ?></p>
    </div>
    <div class="w-container">
      <div class="w-row row-1">
        <div class="w-col w-col-6"><img class="semantic-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Gear.gif" data-ix="fade-in-on-scroll" alt="Risk Adjustment Gear Icon">
          <h4>Coding InSight for Providers</h4>
          <div class="paragraph-2"><?php the_sub_field('providers_snippet'); ?></div><a class="button learn-more-green" href="/products/coding-insight-for-providers">Learn More</a>
        </div>
        <div class="w-col w-col-6"><img class="coding-insight-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/TalixComputer.gif" data-ix="fade-in-on-scroll" alt="Coding Optimization Providers Icon">
          <h4>Coding InSight for Payers</h4>
          <div class="paragraph-2"><?php the_sub_field('payers_snippet') ?></div><a class="button learn-more-green" href="/products/coding-insight-for-payers
          ">Learn More</a>
        </div>
      </div>
    </div>

<?php endwhile; endif; ?>
  </div>
  <div class="w-section section purple" id="pricing">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="plan-wrapper" data-ix="fade-in-on-scroll">
            <h3>Recent Blog Posts</h3>
           <?php
            query_posts(array(
              'post_type' => 'post',

              'showposts' => 3
            ));
            ?>

          <?php while(have_posts()): the_post(); ?>
                <div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                <div class="date"><?php the_time("F j, Y"); ?></div>
                <div class="section-divider"></div>
                <?php endwhile; ?>
            <a class="button learn-more-white learn-more-homepage" href="/blog">Read Blog Posts</a>

          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="plan-wrapper" data-ix="fade-in-on-scroll">
            <?php
            query_posts(array(
              'post_type' => 'news',
              'showposts' => 3
              ));
            ?>
            <h3>Talix in the News</h3>

            <?php while(have_posts()): the_post(); ?>
            <div class="post-title">
            <a href="<?php the_field('article_link'); ?>" target="_blank"><?php the_title(); ?></a>
            </div>

            <div class="publication"><?php the_field('publication'); ?></div>


            <div class="date"><?php the_time("F j, Y"); ?></div>

            <div class="section-divider"></div>
            <?php endwhile; ?>
            <a class="button learn-more-white learn-more-homepage" href="/news">Read News Coverage</a>
          </div>
        </div>
        <div class="w-col w-col-4">
          <div class="plan-wrapper" data-ix="fade-in-on-scroll">
           <h3>Upcoming Events</h3>

           <!-- <a class="post-title" href="http://www.healthtechconference.com/">HealthTech Conference</a>
            <div class="date">October 27-28, 2015
              <br>Santa Clara, California
              </div>
            <div class="section-divider"></div> --><a class="post-title" href="http://www.himssconference.org/">HIMSS Annual Conference</a>
            <div class="date">February 29 - March 4, 2016
              <br>Las Vegas, Nevada
              <br>Booth #10925
              <p style="margin-top:.6rem; font-size:15px;"><em>Join Village Family Practice's Dr. Clive Fields on 3/2 for "Coding for Care: Using Data Analytics for Risk Adjustment"</em></p>
              </div>
              <div class="section-divider"></div>
              <a class="post-title" href="https://www.frallc.com/events/rise/#/Intro">RISE Nashville</a>
              <div class="date">March 20-22, 2016
            <br>Nashville, Tennessee</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section customer-section" id="customers"><div class="w-container"><h4 class="our-customers">Some of Our Customers</h4><img class="customer-image" width="1000" alt="Talix-Customer-Aetna" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-aetna.png"><img class="customer-image" width="797" alt="Talix Customer - United" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-UHC.jpg"><img class="customer-image" alt="Talix Customer -Genentech" width="500" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-Genentech.png"><img class="customer-image" width="946" alt="Talix Customer -AARP" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-aarp.png"><img class="customer-image" alt="Talix Customer - Medscape" width="1000" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-medscape.png"><img class="customer-image" width="150" alt="Talix Customer - Wellmatch" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logo-WellMatch.png"><img class="customer-image" width="377" alt="Talix Customer - Village Family Practice" data-src="<?php bloginfo('template_directory'); ?>/library/images/Logog-VFP.png"></div></div>

<?php get_footer(); ?>
