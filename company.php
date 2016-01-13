<?php
/*
Template Name: Company Page
*/
?>

<?php
get_header();
?>

<div class="w-section company-section" id="top">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-9">
          <h1 class="co-headline-1">Our Story</h1>
          <h2 class="co-headline-2">Meet Talix. Get to Know Us.</h2>
        </div>
        <div class="w-col w-col-3"><img class="company-image-1" src="<?php
bloginfo('template_directory');
?>/library/images/Talix Website Elements-23.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section company-section-1">
    <div class="w-container">
      <h2 class="careers-snippet">At Talix, we harness the power of data to tackle healthcare risk adjustment’s biggest challenges and drive real outcomes for healthcare organizations across the country. This is our story.</h2>
    </div>
    <div class="w-container hl-video">
      <div class="w-embed w-video video" style="padding-top: 56.17021276595745%;">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oRZ2UgtL7WY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen id="hl_video"></iframe>
      </div>
    </div>

    <div class="w-container divider company-divider"></div>
  </div>
  <div class="w-section company-section-3" id="newsroom">
    <div class="w-container">
      <h4 class="hde-heading-1">Newsroom</h4>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="co-column">
             <?php
query_posts(array(
    'post_type' => 'press_release',
    'showposts' => 3
));
?>
            <h3>Press Releases</h3>
          <?php
while (have_posts()):
    the_post();
?>




                <div class="post-title"><a href="<?php
    the_permalink();
?>"><?php
    the_title();
?></a></div>
                <div class="date"><?php
    the_time("F j, Y");
?></div>
                <div class="section-divider"></div>
                <?php
endwhile;
?>
                <a class="w-button button learn-more-white" href="/press-releases">All Press Releases</a>

          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="co-column">
            <?php
query_posts(array(
    'post_type' => 'news',
    'showposts' => 3
));
?>

            <h3>In the News</h3>
            <?php
while (have_posts()):
    the_post();
?>
            <div class="post-title"><a class="post-title" href="<?php
    the_field('article_link');
?>" target="_blank"><?php
    the_title();
?></a>
            </div>
            <div class="publication"><?php
    the_field('publication');
?></div>
            <div class="date"><?php
    the_field('date_news');
?></div>
               <div class="section-divider"></div>
          <?php
endwhile;
?>
        <a class="w-button button learn-more-white" href="/news">All News</a>

        </div>
      </div>
    </div>
    <div class="w-container divider company-divider"></div>
  </div>
  <div class="w-section company-section-4" id="leadership">
    <div class="w-container">
      <h4 class="hde-heading-1">Talix Leadership Team</h4>
    </div>
 <div class="w-container">
      <div class="w-row">
      <div class="w-row">
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/dean.jpg">
          <div class="post-title"><a href="https://www.linkedin.com/pub/dean-stephens/2/328/443" class="post-title">Dean Stephens</a>
          </div>
          <div class="date">Chief Executive Officer</div>
        </div>
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/niraj-katwala.jpg">
          <div class="post-title"><a href="https://www.linkedin.com/pub/niraj-katwala/0/217/186" class="post-title">Niraj Katwala</a>
          </div>
          <div class="date">Chief Technology Officer</div>
        </div>
        <!-- empty spot in row -->
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/murray-brozinsky.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/murray-brozinsky/0/217/854">Murray Brozinsky</a>
          </div>
          <div class="date">Chief Strategy Officer</div>
        </div>
        <!-- empty spot in row -->
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/derek.jpg">
          <div class="post-title"><span><a class="post-title" href="https://www.linkedin.com/in/djgordon415">Derek Gordon</a></span>
          </div>
          <div class="date">General Manager</div>
        </div>

        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/Paul_2.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/in/paulclip">Paul Clip</a>
          </div>
          <div class="date">SVP, Engineering</div>
        </div>

        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/scott-marber.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/scott-marber/0/16/555">Scott Marber</a>
          </div>
          <div class="date">SVP, Sales &amp; Account Management</div>
        </div>


      </div>



        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/tim-england.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/tim-england/0/b45/122">Tim England</a>
          </div>
          <div class="date">VP, Product Engineering</div>
        </div>
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/angela-moseyko.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/angela-moseyko/2/22a/685">Angela Moseyko</a>
          </div>
          <div class="date">VP, Informatics Engineering</div>
        </div>
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/lawerence.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/lawrence-chang/1/ab5/110">Lawrence Chang</a>
          </div>
          <div class="date">VP, Professional Services Engineering</div>
        </div>

        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/shahyan.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/shahyan-currimbhoy/1/b9a/a4a">Shahyan Currimbhoy</a>
          </div>
          <div class="date">VP, Product Management</div>
        </div>

        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/Patton2.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/michael-patton-rn/8/775/232">Michael Patton, RN</a>
          </div>
          <div class="date">Senior Director, Clinical Terminology</div>
        </div>


        <div class="w-col w-col-2"><img class="team-image" src="http://www.talix.com/wp-content/uploads/2015/11/Cathy-Shae-Talix1.jpg">
          <div class="post-title">
            <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/cathy-shea/5/baa/975">Cathy Shea</a>
            </div>
          </div>
          <div class="date">Director, Sales &amp; Account Management</div>
        </div>
      </div> <!-- end second row -->
      <div class="w-row">



        <div class="w-col w-col-2"><img class="team-image" src="http://www.talix.com/wp-content/uploads/2015/10/Steve-Gasiorek.jpg">
          <div class="post-title"><a class="post-title" href="https://www.linkedin.com/pub/steve-gasiorek/2/960/b56">Steve Gasiorek</a>
          </div>
          <div class="date">Director, Sales &amp; Account Management</div>
        </div>
        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/pauline.jpg">
          <div class="post-title"><a href="https://www.linkedin.com/in/paulinelouie" class="post-title">Pauline Louie</a>
          </div>
          <div class="date">Director, Marketing &amp; Communications</div>
        </div>


        <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/Alex.jpg">
          <div class="post-title"><a href="https://www.linkedin.com/in/alexjben" class="post-title">Alex Benjamin</a>
          </div>
          <div class="date">Senior Manager, Operations</div>
        </div>
          <div class="w-col w-col-2"><img class="team-image" src="<?php bloginfo('template_directory'); ?>/library/images/gummy.jpg">
          <div class="post-title">Gummy</div>
          <div class="date">Senior Hall Monitor</div>
        </div>
      </div><!-- end third row of images -->

  </div>
    <div class="w-container divider company-divider"></div>
    <div class="w-section">
    <div class="w-container">
      <h4 class="hde-heading-1" id="careers">Board of Directors</h4>
    </div>
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="post-title">Philip Dur</div>
          <div class="date">Partner and Co-Founder, PeakSpan Capital
    <br>
    Venture Partner, Investor Growth Capital
</div>
        </div>
        <div class="w-col w-col-4">
  <div class="post-title">Richard Harroch</div>
          <div class="date">Managing Director, VantagePoint Capital Partners
<br>
Managing Director, Evisionary Ventures</div>
        </div>
        <div class="w-col w-col-4">
          <div class="post-title">Richard H. Carmona, MD, MPH, FACS</div>
          <div class="date">President, Canyon Ranch Institue
Former Surgeon General of the United States</div>
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="post-title">Michael Barber</div>
          <div class="date">COO, Healthcare Systems, GE Healthcare</div>
        </div>
        <div class="w-col w-col-4">
          <div class="post-title">Kevin Brown</div>
          <div class="date">General Partner, Reed Elsevier Ventures</div>
        </div>
        <div class="w-col w-col-4">
          <div class="post-title">Paul Shells</div>
          <div class="date">CEO, P&R Dental Strategies</div>
</div>
<div class="w-col w-col-4">
          <div class="post-title">Jim Warner</div>
          <div class="date">Principal, Third Floor Enterprises</div>
        </div>
        <div class="w-col w-col-4">
          <div class="post-title">Dean Stephens</div>
          <div class="date">CEO, Talix</div>
        </div>
        </div>
      </div>
    </div>
    <div class="w-container divider company-divider"></div>
  </div>
  <div class="w-section company-section-5" id="career">
    <div class="w-container">
      <h4 class="hde-heading-1" id="careers">Careers</h4>
      <h3 class="careers-snippet">We are a growing group of passionate people, ready to take on real healthcare problems and bring disruption to the risk adjustment industry. We’re here to make a difference. Do you share our passion?</h3>
      <h3>Life at Talix</h3>
      <ul class="list">
        <li>
          <div class="paragraph-3">We are a mission-driven company, committed to driving improved outcomes and reduced costs for the people of the world.</div>
        </li>
        <li>
          <div class="paragraph-3">At Talix, we’ll take care of you. We offer medical, dental and vision insurance, competitive salaries, stock options, and generous PTO.</div>
        </li>
        <li>
          <div class="paragraph-3">We work hard, but we also recognize the importance of having fun at work. Ping pong, mini-golf tournaments, yoga classes, BBQs and Happy Hours are just a few of the fun activities here at Talix.</div>
        </li>
        <li>
          <div class="paragraph-3">Love dogs? We do too. At Talix, we’re a dog-friendly office.</div>
        </li>
        <li>
          <div class="paragraph-3">If you ever get hungry, don’t worry. We’ve got you covered with a fully stocked kitchen.</div>
        </li>
        <li>
          <div class="paragraph-3">We like to give back to the community and support important causes. Every year, we participate as a team in Walk MS, AIDS Walk and other events.</div>
        </li>
      </ul>
      <a class="w-button button co-button-2" href="/careers">Join our Team</a>
    </div>
    <div class="w-container">
      <div class="w-slider co-slider-container" data-animation="slide" data-duration="1500" data-infinite="1" data-nav-spacing="4" data-delay="4000" data-autoplay="1" data-easing="ease-in">
        <div class="w-slider-mask mask">
          <div class="w-slide co-slide"><img src="<?php
bloginfo('template_directory');
?>/library/images/Talix Slide 8.jpg">
          </div>
          <div class="w-slide"><img src="<?php
bloginfo('template_directory');
?>/library/images/Talix Slide 4.jpg">
          </div>
          <div class="w-slide"><img src="<?php
bloginfo('template_directory');
?>/library/images/Talix Slide 9.jpg">
          </div>
          <div class="w-slide"><img src="<?php
bloginfo('template_directory');
?>/library/images/Talix Slide 7.jpg">
          </div>
        </div>
        <div class="w-slider-arrow-left arrow-back">
          <div class="w-icon-slider-left arrow"></div>
        </div>
        <div class="w-slider-arrow-right arrow-back">
          <div class="w-icon-slider-right arrow"></div>
        </div>
        <div class="w-slider-nav w-slider-nav-invert w-round slide-navigation"></div>
      </div>
    </div>
  </div>

  <?php
get_footer();
?>
