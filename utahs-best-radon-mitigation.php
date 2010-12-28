<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php require_once("partials/utah_landing/headmeta.php"); ?>
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper" class="container_12">
	  <div id="hd" class='grid_12 alpha omega'>
	    <?php require_once("partials/utah_landing/header.php");?>
	  </div>
    <div id="bd" class="grid_12 alpha omega">
      <div id="main_content">
      <h2 class="main_content_heading">Get Your Free Quote to Stop Radon Gas Now!</h2>
      <!-- Image Column -->
      <div id="column_1">
        <image id="utah_image" src="images/landing_page_images/utah_city_image.jpg" alt="1 in 4 Utah homes are at risk for Radon" title="1 in 4 Utah homes are at risk for Radon">
        <image src="images/landing_page_images/utah_quote.jpg" alt="I was very happy with the service and results. Was at 200 pci/L and now I'm at 0.7 pci/L in less than a week. Very nice people that I would recommend to anyone">
      </div>
      <!-- Form Column -->
      <div id="column_2">
        <div id="bullets">
          <ul>
            <li class="bullet">Serving Salt Lake, Provo & Ogden Areas</li>
            <li class="bullet">Licensed, Trustworthy & Professional Techs</li>
            <li class="bullet">Guaranteed Results - #1 Team In Utah</li>
          </ul>
        </div>
        <div id="form">
          <form id="utah_form" action="bob_scripts/utah_contact_mailer.php" method="post" accept-charset="utf-8">
            <input type="hidden" name="js_test" value="15" id="captcha">
            
            <div class="field">
              <label for="name">Name*</label><br/>
              <input type="text" name="name" value="" id="name" class="validate(required)">
            </div>
            <div class="field">
              <label for="address">Address*</label><br/>
              <input type="text" name="address" value="" id="address" class="validate(required)">
            </div>
            <div class="field">
              <label for="email">Email*</label><br/>
              <input type="text" name="email" value="" id="email" class="validate(required, email)">
            </div>
            <div class="field">
              <label for="phone">Phone*</label><br/>
              <input type="text" name="phone" value="" id="phone" class="validate(required, digits)">
            </div>
            <div class="field">
              <label for="job_description">Notes</label><br/>
              <textarea id="job_description" name="job_description" rows="3" cols="22"></textarea>
            </div>
            <div class="field">
              <label for="name">Humanize* (what is 9 + 6)</label><br/>
              <input type="text" name="captcha_test" value="" id="name" class="validate(match(#captcha))">
            </div>

            <div class="button_field">
              <input id="submit" type="submit" value="Get Free Quote" name="submitButton"/>
            </div>
          </form>
        </div>
      </div>
      </div>
      <div id="sidebar">
      <!-- Sidebar Column -->
      <div id="column_3" class="center">
        <p class="radon_green center">
          Radon Gas Techs<br/>
        </p>
        <image src="images/landing_page_images/truck_and_trailer.png" alt="Utah Master Radon Gas Techs" title="Utah Master Radon Gas Techs"/>
        <p class="radon_green center">Radon Certifications</p>
        <image src="images/landing_page_images/utah_certs.jpg" alt="Radovent Certifications" title="Radovent Certifications"/>
        </div>
      </div>
    </div>
    <div id="ft" class="grid_12 alpha omega">
      <div id="footer_tag">
        MAKING YOUR HOME A SAFER PLACE TO BREATHE&trade;
      </div>
      <div id="sub_footer" class="center">
        <div class="footer_url">
          <a href="http://www.radovent.com">www.RadoVent.com</a>
        </div>
        <div class="footer_address">
          <span class="bold">Contact Us</span><br/>
          801-285-9255<br/>
          7069 S Highland Drive #250<br/>
          Cottonwood Heights, UT 84121<br/>
        </div>
        <div class="footer_email">
          <a href="mailto:sales@radonvent.com">sales@radovent.com</a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
	</div>  
	<?php require_once("partials/scripts.php"); ?>
	<script type="text/javascript" charset="utf-8">
	 $(document).ready(function() {
	   $('#utah_form').ketchup();
	 });
	</script>
</body>
</html>