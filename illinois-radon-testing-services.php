<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php require_once("partials/utah_testing/headmeta.php"); ?>
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper" class="container_12">
	  <div id="hd" class='testing grid_12 alpha omega'>
	    <?php require_once("partials/illinois_landing/header.php");?>
	  </div>
    <div id="bd" class="grid_12 alpha omega">
      <div id="main_content">
      <h2 class="main_content_heading">Radon Testing Services</h2>
      <!-- Image Column -->
      <div id="column_1">
        <image id="utah_image" src="images/landing_page_images/radalink_unit.jpg" alt="RADALINK™ a provider of state of the art radon testing devices." title="RADALINK™ a provider of state of the art radon testing devices.">
      </div>
      <!-- Form Column -->
      <div id="column_2">
        <h3 class="header_space">RADOVENT LLC&trade;</h3>
        <p>
          As a Radalink&trade; affiliate, all radon tests provided by Radovent&trade; are independently verified for accuracy, tampering and quality. Although most radon mitigation contractors also offer radon measurement services, some states consider this a conflict of interest. RadoVent&trade; LLC is the only local Utah radon mitigation contractor who offers electronic radon test results that are verified by an independent third party. You can receive your radon test result from RadoVent&trade; with the confidence that the information is accurate and that the radon testing devise has not been tampered with.
        </p>
        <h3 class="header_space">Tamper Resistant Features for Your Protection</h3>
        <p>
         EPA strongly urges the use of tamper resistant techniques when conducting a radon test in the context of a real estate transaction. All Radalink&trade; monitors are equipped with a tilt sensor that will log any time the monitor is moved and a power sensor that will record if the power source changes from AC to battery and back to AC. Hourly readings of the radon concentration, temperature, relative humidity, and barometric pressure will record any unusual fluctuations resulting from Protocol violations. In other words, it is extremely difficult to compromise a Radalink&trade; test without being caught.
        </p>
        <h3 class="header_space">Quality Assurance</h3>
        <p>
         Every time a Radalink Monitor is powered on, a routine diagnostic test is performed, checking the high voltage and background settings and the electronic communication between the microprocessor and the ion chamber.  The program then performs a Routine Instrument Check, counting the known activity of a built-in check source. Only when it has passed these tests, does the display change to the Test Mode.
        </p>
        <h3 class="header_space">Our Detector Technology</h3>
        <p>
         All Radalink Monitors utilize our  pulsed ion chamber technology. Ambient air passively diffuses into the chamber in which the radon atoms (as well as the subsequent polonium decay products) disintegrate, emitting alpha particles.
        </p>
        <p>
          The alphas (positively charged ions) create bursts of additional ion pairs by knocking electrons from surrounding air atoms. Negative ions will pulse to the positively charged probe; positive ions will pulse to the negatively charged cylinder wall. The pulses are counted by the electrometer and stored hourly. Detector efficiency is computed by exposures to known radon concentrations to determine the pulse counts per hour per pCi/l.
        </p>
        <p>
          Unlike open-cage ion detectors that can record spurious counts and severely bias the measurement, Radalink’s ion chamber is specially shielded to eliminate interference from vibrations, electrical line noise, cellular phones and microwave energy.
        </p>
      </div>
      <div class="button_row">
        <h2 class="quote_block_header no_button">SCHEDULE YOUR PROFESSIONAL RADON TEST TODAY!</h2>
        <div class="quote_block_phone no_button radon_green"> CALL THE PRO'S at RADOVENT LLC 801-285-9255</div>
      </div>
      </div>
      
      <div id="sidebar">
      <!-- Sidebar Column -->
      <div id="column_3" class="center">
        <?php require_once('partials/illinois_sidebar.php');?>
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
        <?php require_once("partials/illinois_info/footer_address.php"); ?>
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