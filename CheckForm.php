<?php
    
			
class CheckForm { 
	
	public static $name;
	public static $title;
	public static $contact;
	public static $email;
	public static $product;
	public static $details;
	public static $address;
	public static $reference;
	public static $query;
	


	public function CheckForm( ){
		

		
	}
	
		
		//validate name and format
		
		public static function setTitle(&$t){
			global $title;
			
			CheckForm::$title = $t ;
		
		}
		
		public static function &setName(&$a){
				static $name;
				
				
				if(CheckForm::isValidName($a)){
					
					
					$value = trim($a);
					$otherstr = " ";
					$pos = stripos($value, $otherstr);
					
					$first = substr($value, 0,$pos);

					$last = strstr($value, " ");
					
					CheckForm::$name = array("first" => $first, "last" =>$last);
					
                    
					
					
				}else{
				
					echo "no";
				}
				
			
		}
		
		public function setDetails(&$dtl){
			global $details;
			CheckForm::$details = $dtl ;
		
		}
  
		//validate name and format
        public function setEmail( &$em ){
			global $email ;
			
			CheckForm::$email = $em ;
			
		}
   
		//validate contact and format
		public function setContact($con ){
			global $contact;

			//$contact = $con ;
			CheckForm::$contact = $con ;
			
		}
		
		public function setQuery( $que) {
			global $query;
			
			CheckForm::$query = $que ;
		}
		
		
		//validate product and format
		public function setProduct($pro){
			global $product;
			
				CheckForm::$product = $pro;
				
		}
		
		//validate address.
		
		public function setAddress($add){
            global $address;
			
			    CheckForm::$address = $add;
		
		}
	
	
		public function getTitle(){
			global $title;
			
			return CheckForm::$title;
		
		}
		//return name;
		
		
		
		public function getName(){
			global $name;
			
			return CheckForm::$name;
			
		}
		
		public function getDetails(){
			global $details;
			
			return CheckForm::$details;
			
		}
		// get and return email
		public function getEmail(){
			
			
			return CheckForm::$email;

		}
		
		// get and return contact
		
		public function getContact(){
			
			
			return CheckForm::$contact;

		}
	
		public function getAddress(){


			return CheckForm::$address;
		
		}
		
		public function getProduct(){
			
			
			return CheckForm::$product;
		}
		
		public function getReference(){
			
			
			return CheckForm::$reference;
		}
		
		public function getError(){
		
			
			//trigger_error($str , E_USER_ERROR);
			return $str;
		}
		
		public function getMsg(){
		
			return $valid->errorMsg();
			
		}
		
		public function getQuery(){
			
			
			return CheckForm::$query;
		
		}
	
	
     
	public static function isValidEmail(&$b)
	{
		
		 
       if(filter_var($b, FILTER_VALIDATE_EMAIL))
       {
               
			   $bolResult = array(email => $boolEmail);
			   $valEmail = $b;
			   $boolEmail = True;
			   $results = array("email" => $valEmail);
			   
       }
	   else {
	          $txtE = "<p>EMAIL: not valid email</p>";
			  $errorMsg = htmlentities($txtE);
			  $errors = array(EMAIL => $errorMsg);
			  
	          $boolEmail = False;
			  $bolResult = array(email=>$boolEmail);
			  //echo " " . $txtE ;
			  $valEmail = $errorMsg;
			  $results = array("email" => $valEmail);
	          
	   }
	   return $boolEmail;
	}


// check phone for correct format return if valid

	public static function isValidContact(&$c){
	
	global $valCont;
	static $results;
	

   // make sure value is not null
	if( isset($c)){
		$error = array("<p>re-enter phone number</p>");
		// make sure it is not integer
			if(is_Integer($c)){
				$txtC ="<p> reenter number using 44 or 0 </p>";
				$errorContact = htmlentities($txtC, ENT_HTML5);
				$errors = array(CONTACT => $errorContact);
				//echo "error". $c . "is incorrect format";
		
				// if integer format to pass as string 
				$c = parse_str(&$c);
				echo " " . $c . "<br />";
			}
			// check Nigerian number
			if (((substr($c, -11,2)=="08") OR (substr($c,-11,2)=="09" ))&&(strlen($c)===11)){
	            
				// need to change the return values. 
				$bolCont = True;
				$bolResult = array(contact=>$bolCont);
				$valCont = $c;
				$contact = $c;
				$results = array("contact" => $valCont );
				
				
			
			}else{
				$txtCF = "</p>invalid phone number</p>";
				$errorContact = htmlentities($txtCF);
				$errors = array(CONTACT2 => $errorContact2) ;
				//echo "error2: " . $c . " is of invalid length <br />";
				$bolCont = False;
				$bolResult = array(contact=>$bolCont);
				$valCont = $errorContact;
				
			}		
		}else{
			$errorCN = "<p>invalid phone number</p>";
			$errorContact = htmlentities($errorCN);
			$errors = array(CONTACT3 => $errorContact3);
			//echo "error3: no number entered <br />";
			$bolCont = False;
			$bolResult = array(contact=>$bolCont);
			$valCont = $errorContact;
		
		}
		return $bolCont;
	}

// check name of customer if valid and format for use
	public static function isValidName( &$value ){
	
		global $aName;
		global $name;
		
     
		if(isset($value)&& is_string($value)){
	    
			$value =trim($value);
			$otherstr = " ";
			$pos = stripos($value, $otherstr);
			
			if($pos===false){
				echo "ERROR: please enter firstname and then your last name seperated by space";
				$errorNS = "<p>incorrect format please enter surname</p>";
				$errorName = htmlentities($errorNS);
				$errors = array(NAME => $errorName);
				$bolName = False;
				$aName = array($errorName);
				
				
			}else{
				
				$bolName = True;
				
			}
			return $bolName;
		}
	 
	}

		//check address is valid for further processing
		function isValidAddress($location){
			
			global $valAdd;
			
				
			if(isset($location) && is_string($location)){	
				$bolResult = array(address=>$Add);
				$valAdd = array(address=>$location);
				$results = array(address => $location);
				$bolAdd = True;
				$address = $location;
				
			} else {
				$errorAd = "<p>invalid address provided</p>";
				$errorAdd = htmlentities($errorAd);
				$valAdd = array(error=>$errorAdd);
				$bolAdd = False;
			}
			return $bolAdd;
		}

// check product is valid 
		function isValidProduct($item){
		
			global $valProd;
			
		
			if(isset($item)&& (is_string($item))){
				
				$bolResult = array(prod => $bolProd);
				$valProd = $item;
				$bolProd = True;
				$product = $item;
				
			}else {
				$errorProd = "<p>invalid phone number</p>";
				$errorProduct = htmlentities($errorProd);
				$bolProd = False;
				$bolResult = array(prod => $bolProd);
				$valProd = $errorProduct;
			}
			return $bolProd;
		}



		function isValidRequest(){


		}


		static public function getIt(){
	
			var_dump(get_called_class());

	

		}

// get error messages in array

		function errorMsg(){
	
			return $errors;
		}

		public function getBol() {

			return $bolResult;
		}
		
		
		

}




?>