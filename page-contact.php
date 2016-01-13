  <?php
/*
Template Name: Contact Page Template
*/
?>

<?php get_header(); ?>

 <div class="w-section contact-section">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-10">
          <h2 class="contact-heading-1">Contact Us</h2>
        </div>
        <div class="w-col w-col-2"><img class="contact-image-1" src="<?php bloginfo('template_directory'); ?>/library/images/Talix-Contact-Flags.png" data-ix="fade-in-on-load">
        </div>
      </div>
    </div>
  </div>
  <div class="w-section contact-section-1" id="features">
    <div class="w-container">
      <h4 class="contact-heading-2">Have questions? Want more information? Contact us below.</h4>
      <div class="divider"></div>
      <div class="w-row contact-row-1">
        <div class="w-col w-col-6 contact-info-div">
          <h3 class="contact-heading-3">Sales:</h3>
          <h3 class="contact-heading-3">Media/Press:</h3>
          <h3 class="contact-heading-3">Careers:</h3>
        </div>
        <div class="w-col w-col-6 contact-info-div2">
          <div class="contact-paragraph-1">sales@talix.com</div>
          <div class="contact-paragraph-1">pr@talix.com</div>
          <div class="contact-paragraph-1">careers@healthline.com</div>
        </div>
      </div>
      <h4 class="contact-heading-4" id="Lets-Talk">Let's Talk</h4>
      <div class="w-form">
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="email-form-2" name="email-form-2" data-name="Email Form 2">
          <div>
            <div class="w-row mar-t" href="/contact#form">
      <div class="w-col-medium-8 w-col-medium-offset-2">
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="form-general form-get-started">
          <input type="hidden" name="oid" value="00DG0000000i5W2">
          <!-- Thank you page redirect -->
          <input type="hidden" name="retURL" value="http://talix.com/thanks">
          <input type="hidden" name="leadSource" value="corpSite">

          <div class="input-wrap left">
         <label class="placeholder-hide" for="first_name">First Name</label>
            <input id="first_name" maxlength="40" class="ben-input" name="first_name" size="20" type="text" placeholder="First Name">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="last_name">Last Name</label>
            <input id="last_name" maxlength="80" class="ben-input" name="last_name" size="20" type="text" placeholder="Last Name">
          </div>

          <div class="input-wrap left">
            <label class="placeholder-hide" for="company">Company</label>
            <input id="company" maxlength="40" class="ben-input" name="company" size="20" type="text" placeholder="Company">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="title">Title</label>
            <input id="title" maxlength="40" class="ben-input" name="title" size="20" type="text" placeholder="Title">
          </div>

          <div class="input-wrap left">
            <label class="placeholder-hide" for="city"></label>
            <input id="city" maxlength="40" class="ben-input" name="city" size="20" type="text" placeholder="City">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="state">State/Province</label>
            <input id="state" maxlength="20" class="ben-input" name="state" size="20" type="text" placeholder="State/Province">
          </div>

          <div class="input-wrap left">
            <label class="placeholder-hide" for="postal_code">Postal Code</label>
            <input id="postal_code" maxlength="20" class="ben-input" name="postal_code" size="20" type="numever" placeholder="Postal Code">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="email">Email</label>
            <input id="email" maxlength="80" class="ben-input" name="email" size="20" placeholder="Email">
          </div>

          <input type="submit" value="Submit" class="w-button button learn-more-green contact-button-1">
        </form>
      </div>
    </div>
          </div>
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
      <div class="divider"></div>
      <h4 class="contact-heading-4">Our Office</h4>
      <div class="w-row">
        <div class="w-col w-col-6">
          <div class="w-widget w-widget-map" data-widget-latlng="37.779032,-122.393601" data-widget-style="roadmap" data-widget-zoom="15" data-widget-tooltip="Talix Headquarters"></div>
        </div>
        <div class="w-col w-col-6">
          <h3 class="contact-heading-5" style="padding-left: 0;">Mailing Address</h3>
          <p class="contact-paragraph-1">660 Third Street
            <br>2nd Floor
            <br>San Francisco, CA 94107</p>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
