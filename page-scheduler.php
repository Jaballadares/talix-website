<?php
/*
Template Name: Scheduler Template
*/
?>


<?php require('header-scheduler.php'); ?>


<div class="w-row scheduleTime">
    <div class="w-col-12">
      <div class="w-col-6 form-template">
        <h1 class="main-header">Schedule Time to Chat</h1>

        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" id="datePicker" class="form-scheduler" method="POST">
          <input type="hidden" name="oid" value="00DG0000000i5W2">
          <input type="hidden" name="retURL" value="http://www.talix.com/thanks">
          <input type="hidden" select="" id="lead_source" name="lead_source" value="Coding-InSight-Demo" class="special">

          <label for="first_name" class="placeholder-hide"></label>
          <input type="text" name="first_name" id="first_name" class="sudoPicker" placeholder="First Name" size="20" maxlength="40" required />

          <label for="last_name" class="placeholder-hide"></label>
          <input type="text" name="last_name" id="last_name" class="sudoPicker" placeholder="Last Name" size="20" maxlength="40" required  />

          <label for="email" class="placeholder-hide"></label>
          <input type="text" name="email" id="email" class="sudoPicker" placeholder="Email" size="20" maxlength="40" required>

          <label for="calendar"></label>
          <input type="text" id="calendar" class="preferred_day sudoPicker" name="preferred_day" placeholder="Preferred Day" required/>

          <label for="clock"></label>
          <input type="text" id="clock" name="preferred_time" class="preferred_time sudoPicker" placeholder="Preferred Time" required/>



          <div class="w-row" id="salesSubmit">
            <input type="submit" name="submit" value="Let's Talk!" id="submitTime" class="sudoPicker">
          </div>

        </form>
      </div>
    </div>
  </div>

<?php require('footer-scheduler.php'); ?>