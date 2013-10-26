<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Cookie_Privacy.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Tolan Cookies and Privacy page</title>	
<meta name="description" content=" Tolan-solar , website and cookies ">
<meta name="keywords" content="Tolan-solar solar","guidelines", "cookies", "privacy"  >
<meta name="author" content="L Jinad">
<meta charset="UTF-8">


    <link rel="stylesheet" href="default.css" type="text/css">
    <!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" >
 <!--<![endif]-->
 

<script type-"text/javascript" src="jquerybrowserdetect.js">
</script>

<script type="text/javascript" src="jquery.min.js">
</script>
<!--<script type="text/javascript" src="jquery.validator.min.js"></script>-->
<script type="text/javascript" src="jquery.validate.min.js">
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("p.text").click(function(){
    $(this).hide();
  });
});
</script>
</head>
<body>


    <div id="Header">
	     <div id="menu"> 
		    <ul class="topmenu">
			  <li class="search">
			<gcse:searchbox-only></gcse:llsearchbox-only>
              </li>
			</ul>
			
 		 </div>
		 
		 <div id="logo">
		   <span id="imag">
			<img src="images/Tolan-Logo.jpg" alt="tolan logo"/>
		   </span>
		 </div>


    
		 <ul class="navigate">
		    <li><a class="nav" href="home.php"> Home </a>
				<ul>
					<li><a href="About_us.php">Who we are</a></li>
					<li><a href="Charity.php">Community Support</a></li>
					<li><a href="Case_study.php">Case Study</a></li>
				</ul>
			</li>			
			<li><a class="nav" href="Contact.php"> Contact  </a></li>
			<li><a class="nav" href="Products.php"> Products</a>
				<ul>
					<li><a href="House.php">Home Products </a></li>
					<li><a href="Lighting.php">Lighting Products</a></li>
				
				</ul>
			</li>
			<li><a class="nav" href="PV-Installation.php">Installation</a>

			</li>
			<li><a class="nav" href="Support.php">Support</a>
				<ul>
					<li><a href="Frequent_Questions.php">FAQ </a></li>
					<li><a href="Repairs.php">Repairs</a></li>
					<li><a href="Manuals.php">Manuals</a></li>
					<li><a href="Deliveries.php">Deliveries</a></li>
				</ul>
			</li>
		 </ul>
	 
		 
	</div>	
	
	
    <div id="cf">
	  	   <img class="bottom" src="images/container_bgg.jpg" alt="sunset off docks"/>
           <img class="top" src="images/container_bg3.jpg" alt="solar panels"/>	
	</div>
	
	<div id="sidebar">
	    <div id="column1">
		<div id="column_left">
			<span id="contentsfaq_update">


	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="Complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="Repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Repairs and Replacements</h3>
				<UL class="sidemenu">
					<LI><a href="Repairs.php">Repairs</a></LI>
					<LI><a href="Repairs.php">Recycling</a></LI>
					<LI><a href="Repairs.php"> Returns Policy</a></LI>
					<LI><a href="Frequent_Questions.php">FAQ</a></LI>
					
				</UL>
			</blockquote>
				
				

			</span>
		  </div>
			
			
		<div id="column_small">	
		
			<span id="contents5">
<h3 class="grey"> Cookie and Privacy </h3>
			

				<p class="text">
				<strong>Cookies : What is it ? </strong>
				Cookies are technologies used by server to help improve
				interaction with our website.</p>
				
				<hr>
				<p class="text">
				<strong> Cookie use : How we use it ?</strong>
				Tolan largely uses cookies for improving customers usability
				Particularly in providing customised page and accounts.
				</p>
				<hr>
				<p class="text">
				<strong> Data Privacy </strong>
				  Tolan values privacy of our customers , we therefore will not gather
				  anything more than information required and will not use information 
				  gathered other than for what we have advised to our customers. Prior consent will be
				  requested from customers where we wish to pass data onto third parties and customers
				  will be notified in such scenarios.</p>
				  <hr>
				<p class="text">
				<strong> Your Privacy </strong>
				   We value your privacy and advise that we use cookies on this website, we advise you
				   to discontinue use of this website if you do not wish to have cookies active on your
				   computer.</p>
			</span></div>
			
			<div id="column_right">
			
		    <span id="span#contentsfaq_right">

				
			
			</span>
			</div>
	  </div>
			

	</div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> | 
	</p> </span></div>


	
</body>
</html>