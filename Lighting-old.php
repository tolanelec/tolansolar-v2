<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Lighting.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Tolan Solar Lighting products</title>
    <link rel="stylesheet" href="default.css" type="text/css" />
    
	<!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="side_form.css">
 <!--<![endif]-->
 
 
 <script>
body {
    background-color: #FFFFFF;
	z-index:0;
}
#content { background-color:#C6F5F2; width:950px; min-height:550px; text-align:left; padding:20px; padding-top:300px; }
h1 {
    padding:15px 10px 12px 10px;
}
h2 {
    padding-left: 0px !important;
}
#header {
    background-color: #CA410B !important;
}
.large { font-size:20px; }
.orange { color:orange; }
.italic { font-style:italic }
.textmiddle {vertical-align:middle;}
.padout { padding-left:20px; padding-right:20px; }
.rounded-corners {
     -moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.rounded-corners-top {
     -moz-border-top-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.right {
    float: right;
}
.scrolldown { padding-left:20px; color:#EDECE8; font-size:14px; font-weight:bold; vertical-align:middle;
	text-shadow: #6374AB 2px 2px 2px;
 }
 .contentblock { margin: 0px 20px; }
 .results { border: 1px solid blue; padding:15px; margin-top:15px; min-height:40px; }
 .blue-bold { font-size:16px; font-weight:bold; color:blue; }

 /* example styles for validation form demo */
#register-form {
	
    background: #F8FDEF url('form-fieldset.gif') repeat-x left bottom;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: -30px;
    margin-top:90px;
    width: 180px; padding-left:15px; padding-right:15px; padding-top:10px; padding-bottom:10px
	z-index:1;
}

#register-form .fieldgroup {
    background: url('form-divider.gif') repeat-x left top;
    display: inline-block;
    width: 170px; padding-left:5px; padding-right:10px; padding-top:8px; padding-bottom:8px
}

#register-form .fieldgroup label {
    float: left;
    padding: 8px 0 0;
    text-align: right;
    width: 80px;
}

#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 5px 0;
    height: 20px;
}

#register-form .submit {
    padding: 8px;
    width: 160px;
    height: 40px !important;
}

#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 30px;
    padding: 0;
    text-align: left;
    width: 170px;
}
</style>
 
 <style type="text/css">
   /* remove the border and color from the top bar */
   .googlecart-override #googlecart-widget-head {
       border-width: 3px ;
       /*background-color: transparent !important; */
	   background-color: #000000;
   }

   /* add a thicker border to the top of the product list */
   .googlecart-override #googlecart-widget-body {
       border-top-width: 10px;
   }
</style>
 
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



<meta name="description" content=" sitemap for tolan solar and lighting products "/>
<meta name="keywords" content="Lighting","led-lamps","rechargable lamps","LED disposable lights","Solar-lanterns","led-lights"  />


<script>
 (function() {
   var cx = '016733281910472351058:azkatytop1i';
   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
       '//www.google.com/cse/cse.js?cx=' + cx;
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
 })();
</script>

</head>
<body>
<script  id='googlecart-script' type='text/javascript' src='https://checkout.google.com/seller/gsc/v2_2/cart.js?mid=146701109927099' integration='jscart-wizard' post-cart-to-sandbox='false' currency='GBP' productWeightUnits='KG'></script>

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
	
	<!--	<div id="googlecart-widget-control" googlecart-widget-control-align="left" style="height:180px; margin-top:0px; margin-left:700px; z-index:10; width:200px; height:30px;"> <img src="images/shopping_cart_icon.png" /> 
			     View Your Shopping Cart
				<span id="googlecart-item-count"></span>
				<span id="googlecart-subtotal"></span>
			</div>-->
	
    <div id="cf">
	  	   <img class="bottom" src="images/container_bg9.png" alt="solar panel"/>
           <img class="top" src="images/freeimage-4669410 black battery.jpg"/>	

	</div>




	<div id="sidebar">

	    <div id="column1">
		<div id="column_left">
			<span id="contentsfaq_update">
		
	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Repairs </h3>
				<UL class="sidemenu">
					<LI><a href="repairs.php">Repairs</a></LI>
					<LI><a href="repairs.php">Recycling</a></LI>
					<LI><a href="repairs.php"> Returns Policy</a></LI>
					
				</UL>

				
				

			

			</span>
			</div>
			
			
		<div id="column_small">	
		
			
			<span id="topic">
				<h3 id="topic">Lighting product </h3>
			</span>
			
			<span id="items">
			<p>Tolan also sells energy efficient LED lamps and Lanterns for domestic and commercial use.
				  Our products are energy efficient, light weight and affordable. Product ranges from regular desk lamps to security flood lights.
			</p></span>
			<span id="items">
			<p><abbr title="light emitting diode">LED</abbr> Lanterns - AA battery <p>
			<p> We sell energy efficient <abbr title="light emitting diode">LED</abbr> Lanterns which take disposable AA batteries. Takes 2 AA batteries , Disposable lantern - battery lasts 12hours.
			Price range from <strong>N3.00</strong></p><span style="float:right"><div class="product"><input type="hidden" class="product-title" value="LED-AAlamps"><input type="hidden" class="product-price" value="N3.00">
			<div class="googlecart-add-button" tabindex="0" role="button" title="Add to cart"></div></div></span></p>
			</span>
			<span id="items"><p>
			<strong>LED Rechargeable Lanterns </strong></p>
			<p><abbr title="light emitting diode">LED</abbr> rechargeable lanterns - uses internal lithium batteries. Has light setting and USB recharger. Also comes with solar-array. 12 hours of Light on full charge.
			Price range from <strong>N5.00</strong> </p><span style="float:right"><div class="product"><input type="hidden" class="product-title" value="rechargable Lanterns"><input type="hidden" class="product-price" value="N5.00">
			<div class="googlecart-add-button" tabindex="0" role="button" title="Add to cart"></div></div></span></p></span>
			<span id="items">
			<p><strong><abbr title="light emitting diode">LED</abbr> security flood lights 
			</strong>
			</p>
			<p> Out door security lights and flood lights: Security lights and Flood lights used for lighting paths
			For lighting special events, filming, security. Price range from <strong>N15.00</strong></p><span style="float:right"><div class="product"><input type="hidden" class="product-title" value="security lamps"><input type="hidden" class="product-price" value="15.00">
			<div class="googlecart-add-button" tabindex="0" role="button" title="Add to cart"></div></div></span></p></span>
			
			
			</div>
			
			<div id="column_right">
			
			<div id="googlecart-widget-control" googlecart-widget-control-align="left" style="border:1px; margin-top:-120px; margin-left:-120px; margin-right:90px; z-index:8; width:90px; height:40px;"> <img src="images/shopping_cart_icon.png" /> 
				<span id="googlecart-item-count"></span>
				<span id="googlecart-subtotal"></span>
			</div>
			
			
			<img src="images/whitespace.gif" />
			<form action="" method="post" id="register-form"  novalidate="novalidate"  >
			
			<h2>Quick Order</h2>
			
			<div id="form-content">
				<fieldset>
                    
					    <div class="fieldgroup">
					    <label for="name">Firstname</label>
						<input type="text" name="firstname" size="20" required />
						</div>
						<div class="fieldgroup">
						 <label for="lastname">Lastname</label>
						 <input type="text" name="lastname" size="20" required />
						</div>
						<div class="fieldgroup">
						<label for="email">Email</label>
						<input type="text" name="email"  size="20" required />
						</div>
						
					    <div class="fieldgroup">
						<label for="contact">Contact </label>
						<input type="text" name="contact" size="20" required />
						</div>
						
						<div class="fieldgroup">
						<label for="product">Product Selection </label>
						<select name="product" size="30"/>
						  <option value="none" selected> </option>
						  <option value="solar">solar array</option>
						  <option value="roofing" >roof install</option>
						  <option value="single">single room </option>
						  <option value="double">double room</option>
						  <option value="mobile">mobile panels</option>
						  <option value="commercial">commercial install</option>
				        </select></br>
						</div>
	
						<div class="fieldgroup">
						<p class="right">By clicking submit you agree to our <a target="_blank" href="/policy">policy</a>.</p>
						<input type="submit" value="Submit" class="submit" >
						</div>
						
						
						
						
				</fieldset>		
				</div>
				</form>	
	
			</div>
			</div>
			</div>
			

	</div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Privacy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> | 
	</p> </span>
	</div>


	
</body>
</html>