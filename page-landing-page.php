<?php
/*
Template Name: Landing Page
*/
?>

<?php require('header-landing-page.php'); ?>

<div class="wrapper">
  <div class="copy-wrapper">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/99201/Talix_RGB_White_Green_Large[1].png" alt="Talix Logo White" class="logo" />
    <h1 class="main-headline">Getting the most out of your EMR <br> means you need an integrated<br> Risk Adjustment Solution</h1>
    <p class="snippet">Proactively identify high-risk conditions and expedite code capture at the point of care to improve care planning and accurately realize reimbursements.</p>
    <button class="button-reveal" id="button-reveal">Learn More</button>
    <p class="small">Or don't, but we really think you'll like what you see</p>

  </div>
  <div class="form-wrapper" id="formWrapper">
      <form class="lead-gen" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
        <input type="hidden" name="oid" value="00DG0000000i5W2">
        <input type="hidden" name="retURL" value="http://www.talix.com/thanks">
        <input type="hidden" select="" id="lead_source" name="lead_source" value="JB-Adwords-Campaign-1" class="special">
        <label for="first-name">First Name</label>
        <input type="text" placeholder="Mr. Robot" id="first-name" />
        <label for="last-name">Last Name</label>
        <input type="text" id="first-name" placeholder="Last Name" />
        <label for="email">E-mail</label>
        <input type="email" placeholder="reimbursements@cms.com" id="email" />
        <div class="g-recaptcha" data-sitekey="6LezqA8TAAAAAGh_JJzd5WV4ZVvbYwabEUaaSKrL"></div>

        <input class="submit-btn" type="submit" value="Submit" />
      </form>
    </div>
</div>

<?php require('footer-landing-page.php'); ?>
