<?php
/*
Template Name: Landing Page Circle
*/
?>

<?php require('header-landing-page.php'); ?>

<div class="main-wrapper">
 <a class="w-nav-brand brand-link" href="/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Final-Logos.png"></a>
  <div class="top-wrapper">
<?php if( have_rows('landing_page_copy') ): while (have_rows('landing_page_copy')): the_row(); ?>
    <h1 class="main-header"><?php the_sub_field('bold_words'); ?></h1>
    <p class="sub-head"><?php the_sub_field('sub_head'); ?></p>
    <div class="checkmark-wrapper">
    <ul class="circle circle1">
      <li><p class="bullet-content"><?php the_sub_field('first_bullet'); ?></p></li>
      <li><p class="bullet-content"><?php the_sub_field('second_bullet'); ?></p></li>
    </ul>

<div class="bottom-row">
    <ul class="circle">
      <li><p class="bullet-content"><?php the_sub_field('third_bullet'); ?></p></li>
      <li><p class="bullet-content"><?php the_sub_field('fourth_bullet'); ?></p></li>
    </ul>
</div>
    </div>
  </div>
  <div class="section-cutout"></div>

  <div class="bottom-wrapper" id="bottom-wrapper">
    <form class="cta-form" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="landing_page_form">
      <input type="hidden" name="oid" value="00DG0000000i5W2">
      <input type="hidden" name="retURL" value="http://www.talix.com/thanks">
      <input type="hidden" select="" id="lead_source" name="lead_source" value="JB-Adwords-Campaign-1" class="special">
      <div class="input-wrapper input-wrapper-1">
      <label for="first_name" class="placeholder-hide"></label>
      <input type="text" data-placeholder-focus="First Name" placeholder="First Name" id="first_name" size="20" maxlength="40" name="first_name" required/>
      <label for="last_name" class="placeholder-hide"></label>
      <input type="text" placeholder="Last Name" id="last_name" name="last_name" required/>
      </div>

      <div class="input-wrapper">
      <label for="email" class="placeholder-hide"></label>
      <input type="email" placeholder="E-mail" id="email" name="email" required/>
      <label for="company" class="placeholder-hide"></label>
      <input  id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company" required/>
      </div>


      <input type="submit" class="submit" value="Talk to Us to See If We Can Help!" name="submit"/>
    </form>
  </div>

  <div class="info-section">

  </div>
<?php endwhile; endif; ?>
</div>

<?php require('footer-landing-page.php'); ?>



