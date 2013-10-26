<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/PV-Installation.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Tolan Solar - solar technology , panels and solar installations</title>
	
<meta name="description" content=" Residential solar panel installations by tolan solar in Nigeria "/>
<meta name="keywords" content="Repair ","solar-panel projects","Solar panels","Roofing panels"  />
<meta name="author" content="L Jinad">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="60">

<link rel="stylesheet" href="default.css" type="text/css" />
<!--[if IE]><!-->	
<link rel="stylesheet" href="main3_style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="side_form.css">
<!--<![endif]-->
 
 
<script type="text/javascript" src="jquery.min.js">
</script>

<script type="text/javascript" src="jquery.validate.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("p.text").click(function(){
    $(this).hide();
  });
});
</script>

		




	<script>
 (function() {
   var cx = '016733281910472351058:azkatytop1i';
   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
       '//www.google.com/cse/cse.js?cx=' + cx;
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
 })();
</script>


<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
				rules: {
				 firstname: "required",
				 lastname: "required",
				 email: {
				   required:true,
				   email:true
				 },
				 contact: {
				   required: true,
				   minlength:9
				 },
				 agree: "required"
				 },
				 messages: {
				   firstname:"please enter firstname",
				   lastname:"please enter lastname",
				   contact: {
				      required:"please provide a number",
					  minlength: "phone must be at least 9 characters long" },
					  product: "please select product",
					  email: "please enter a valid email address",
					  agree:"please accept our policy"
					},
					submitHandler:function(form){
				             form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();

    });

})(jQuery, window, document);
</script>
</head>
<body>


    <div id="Header">
	     <div id="menu"> 
		    <ul class="topmenu">
			  <li class="search">
			  <gcse:searchbox-only></gcse:searchbox-only>
              </li>
			</ul>
			
 		 </div>
		 
		 <div id="logo">
		   <span id="imag">
			<img src="images/Tolan-Logo.jpg" alt="tolansolar logo"/>
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
	  	   <img class="bottom" src="images/container_bg9.jpg"/>
           <img class="top" src="images/container_bg3.jpg"/>	
	</div>
	
	<div id="sidebar">
	    <div id="column1">
			<span id="contentsfaq">
		    
	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Repairs and Replacements</h3>
				<UL class="sidemenu">
					<LI><a href="repairs.php">Repairs</a></LI>
					<LI><a href="repairs.php">Recycling</a></LI>
					<LI><a href="repairs.php"> Returns Policy</a></LI>
					<LI><a href="Frequent_Questions.php">FAQ</a></LI>
					
				</UL>
			</blockquote>	
				

		
			</span>
			
			
			
		  <span id="contents2">
				<h3>PV-INSTALLATION</h3>
			</span>
			<span id="contents3">
			<h3 class="blue">Solar home installations</h3>
						<table width="588" height="230" border="0">
  <tr>
    <td width="298" height="200" valign="top"><p align="left">Tolan instals pv-solar technology solutions for business power solutions, ranging
	  from small business external solar-arrays to medium sized solar farm. We also sell solar-componenents and technologies for solar-energy uses.
      You can take a look of list of our products below and click for further product details. </p></td>
    <td width="280"><div align="center"><img src="images/images-battery.jpg" width="200" height="150"/></div></td>
  </tr>
</table>
    <span id="contents_left">
 				<h3 class="blue">Solar home red kit </h3>

			    <table id="description" summary="Solar Lantern" >
				
					The solar home red kit will provide the consumer with 
					minnimum 400 watt solar panel plus inverter, battery and 6 energy saving light bulb, power fan, laptop and small TV.
				   <br/>
				   <h4>Specifications</h4>
				
					<tr >
						<th></th>
							<th scope="col">Output</th>
							<th scope="col">Battery life</th>
							<th scope="col">Charge(hrs)</th>
							<th scope="col">Price</th>
						</tr>
					<tr>
						<th scope="row"> Solar Lantern A</th>
						<td>dual </td>
						<td>5 hours </td>
						<td> 2-3HRS </td>
						<td>price subject to user requirements</td>
					</tr>			
				
				</table>
				
		</span>
 
 <span id="contents_left">
			
				<h3 class="blue">Solar home green kit</h3>
				<table id="description" summary="Solar green kit">
				
				
					Solar green home kit provides basic power supply for home user.
				    battery and 6 energy saving light bulb 
				   <h4>Specifications</h4>
				
						
					<tr >
						<th></th>
							<th scope="col">Output</th>
							<th scope="col">Battery life</th>
							<th scope="col">Charge(hrs) </th>
							<th scope="col">Price</th>
						</tr>
					<tr>
						<th scope="row"> Panel</th>
						<td>200w</td>
						<td>5 hrs </td>
						<td> none </td>
						<td> N76,500</td>
					</tr>
				</table>
 
			</span>
			</span> 
			<span id="contents3b">

			</span>
			<span id="contents3c">
			<p>&nbsp;</p>
			</span></div>
	</div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> | 
	</p> </span>
	</div>


	
</body>
</html>