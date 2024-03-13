<?php 	

require_once 'core.php';



if(isset($_POST["submit"]))
{
 
          $file = $_FILES['file']['tmp_name'];
          $handle = fopen($file, "r");
          $c = 0;
          while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
                    {
          $company_name = $filesop[0];
          $username = $_SESSION['username'];
          $userid = $_SESSION['userId'];
          $cutomer_name = $filesop[1];
          $designation = $filesop[2];
          $phone =$filesop[3];
          $what_no =$filesop[4];
          $email =$filesop[5];
          $addresss=$filesop[6];
          $city=$filesop[7];
          $state=$filesop[8];
        
          $country=$filesop[9];
          $industry=$filesop[10];
        $interest=$filesop[11];
        $source=$filesop[12];
       
        $remarks=$filesop[13];
        
          $sql = "INSERT INTO `lead`(`company_name`, `lead_name`, `designation`, `phone`, `what_no`, `email`, `address`,`state`,`country`,`city`,`industry_type`,`interest`,`source`,`message`,`employe_name`,`employe_id`) VALUES ('$company_name','$cutomer_name','$designation','$phone','$what_no','$email','$addresss','$state','$country','$city','$industry','$interest','$source','$remarks','$username','$userid')";
           $c = $c + 1;
          	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Excel Successfully Added";
		header('location:../lead.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

         

}
    
    
    

	$connect->close();

}

?>
 
 

