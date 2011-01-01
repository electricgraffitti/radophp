<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php require_once("partials/illinois_landing/headmeta.php"); ?>
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper" class="container_12">
	  <div id="hd" class='grid_12 alpha omega'>
	    <?php require_once("partials/illinois_info/header.php");?>
	  </div>
    <div id="bd" class="grid_12 alpha omega">
      <div id="main_content">
      <h2 class="main_content_heading">Get Your Free Quote to Stop Radon Gas Now!</h2>
      <!-- Image Column -->
      <div id="column_1">
        <image id="utah_image" src="images/landing_page_images/illinois_city_image.jpg" alt="46% of Illinois homes are at risk for Radon" title="46% of Illinois homes are at risk for Radon">
        <image src="images/landing_page_images/illinois_quote.jpg" alt="Radovent installed the radon mitigation system in my house to my total satisfaction. Throughout the process from getting a quote to the last clean up of the place, I was pleased with everything.">
      </div>
      <!-- Form Column -->
      <div id="column_2">
        <div id="bullets">
          <ul>
            <li class="bullet">Proudly Serving All Of Northern Illinois</li>
            <li class="bullet">Licensed, Trustworthy & Professional Techs</li>
            <li class="bullet">Guaranteed Results - #1 Team In Illinois</li>
          </ul>
        </div>
          <div id="form">
            <form id="utah_form" action="bob_scripts/illinois_contact_mailer.php" method="post" accept-charset="utf-8">
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
      
      <div class="full_column">
        <h3 class="header_space">RadoVent LLC proudly serving Northern Illinois:</h3>
        <p class="service_cities">
          Chicago, Evanston, Skokie, Niles, Park Ridge, Des Plaines, Elk Grove, Itasca, Arlington Heights, Palatine, Wheeling, Buffalo Grove, Northbrook, Glenview, Wilmette, Highland Park, Deerfield, Lake Forest, Lake Bluff, Waukegan, Winthrop Harbor, Gurnee, Lake Villa, Lindenhurst, Antioch, Grayslake, Round Lake, Libertyville, Mundelein, Hawthorn Woods, Lake Zurich, Wauconda, Island Lake, Barrington, Cary, McHenry, Crystal Lake, Woodstock, Lake In The Hills, Huntley, Dundee, Carpentersville, Pingree Grove, Schaumburg, Streamwood, Bartlett, Bloomingdale, Roselle, Glen Ellyn, Wheaton, West Chicago, Elgin, St. Charles, Geneva, Batavia, Aurora, Naperville, Lisle, Woodridge, Downers Grove, Hinsdale, Darien, Woodridge, Bolingbrook, Montgomery, Plainfield, Romeoville, Joliet, Channahon, New Lennox, Tinley Park, Mokena, Oak Park, Oak Forrest, Oak Lawn, Chicago Heights, La Grange, Brookfield, Rockford, Freeport, Stockton, Elizabeth, Galena, Oregon, Dixon, Dekalb Rochelle, Sugar Grove, Yorkville and surrounding areas.
        </p>
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
          <a href="mailto:sales@radovent.com">sales@radovent.com</a>
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