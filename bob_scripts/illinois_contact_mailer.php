<?php
if(isset($_POST['submitButton'])) {

$to = "sales@radovent.com";
$subject = "Radon Quote Request - Illinois";
$contact_job = $_POST['job_description'];
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_address = $_POST['address'];
$contact_phone = $_POST['phone'];

$header = "From: $contact_name";
 
$body = "From: $contact_name\n Address: $contact_address\n E-Mail: $contact_email\n Phone: $contact_phone\n Notes: $contact_job\n";
 
mail($to,$subject,$body,$header);

} else {

echo "There has been an error processing - Please Try Again";

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>Radon Mitigation Company | Illinois Best Radon Mitigation</title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <meta name="description" content="Radovent - Americaís #1 Radon Mitigation Company. Dedicated to saving lives by providing superior radon mitigation services and radon systems.">
  <meta name="keywords" content="radon mitigation,radon illinois,radon utah,radon mitigation
  system,radon system,radon remediation,radon removal,radon abatement,radon reduction">

  <link rel="stylesheet" href="../styles/reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="../styles/landing_page.css" type="text/css" media="screen" title="no title" charset="utf-8">

  <!--[if IE ]>
    <link rel="stylesheet" type="text/css" href="styles/IE.css" />
  <![endif]-->
</head>
<body class="yui-skin-sam">
  <!-- Application Layout -->
  <div id="wrapper" class="container_12">
	  <div id="hd" class='grid_12 alpha omega'>
	    <a id="header_link" href="http://www.radovent.com" title="www.radovent.com">
        <h1 class="hidden">Radovent - Radon reduction services</h1>
      </a>

      <div id="heading_contact">
        <span class="bold">Contact Us</span><br/>
        888-698-8368<br/>
        764 W Algonquin Rd.<br/>
        Arlington Heights, IL 60005<br/>
      </div>
      <div id="illinois_logo" class="hidden">
        Illinois #1 Radon Mitigation Team
      </div>

      <div id="header_url">
        <a href="http://www.radovent.com">www.RadoVent.com</a>
      </div>
	  </div>
    <div id="bd" class="grid_12 alpha omega">
      <div id="main_content">
      <h2 class="main_content_heading">Get Your Free Quote to Stop Radon Gas Now!</h2>
      <!-- Image Column -->
      <div id="column_1">
        <image id="utah_image" src="../images/landing_page_images/illinois_city_image.jpg" alt="48% of Illinois homes are at risk for Radon" title="48% of Illinois homes are at risk for Radon">
        <image src="../images/landing_page_images/illinois_quote.jpg" alt="I was very happy with the service and results. Was at 200 pci/L and now I'm at 0.7 pci/L in less than a week. Very nice people that I would recommend to anyone">
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
          Thank You,<br/>
          Your request for a quote has been received. Someone will contact you shortly.
        </div>
      </div>
      </div>
      <div id="sidebar">
      <!-- Sidebar Column -->
      <div id="column_3">
        <p class="radon_green center">
          Illinois Master<br/>
          Radon Gas Tech<br/>
          <span class="bold black">Travis Jewell</span>
        </p>
        <image src="../images/landing_page_images/illinois_tech.jpg" alt="Travis Jewell Illinois Radon Gas Tech" title="Travis Jewell Illinois Master Radon Gas Tech"/>
        <p class="radon_green center">Radon Certifications</p>
        <image src="../images/landing_page_images/illinois_certs.jpg" alt="Radovent Certifications" title="Radovent Certifications"/>
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
          888-698-8368<br/>
          764 W Algonquin Rd.<br/>
          Arlington Heights, IL 60005<br/>
        </div>
        <div class="footer_email">
          <a href="mailto:sales@radonvent.com">sales@radovent.com</a>
        </div>
      </div>
    </div>
    <div class="clear"></div>
	</div>  
</body>
</html>

