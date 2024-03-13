<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	
	$userid = $_SESSION['userId'];
	$username = $_SESSION['username'];
	$comany_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$what_no = $_POST['what_app'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	
	$lead_name = $_POST['lead'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $city = $_POST['city'];
    $interest = $_POST['interest'];
    $source = $_POST['source'];
	 $industry = $_POST['industry_type'];
     $assigned = $_POST['assigned'];
    $status = $_POST['status'];
	$message = $_POST['message'];
	$starting = $_POST['start_date'];
	$ending = $_POST['end_date'];
	date_default_timezone_set('Asia/Kolkata');
       $currentTime = date( 'd-m-Y h:i:s A', time () );

        if($_SESSION['userId'] ==1){
			$sql = "INSERT INTO `lead`(`lead_name`, `phone`, `email`, `city`, `interest`, `source`, `status`,`employe_id`,`employe_name`,`industry_type`,`last_update`,`message`,`company_name`,`designation`,`what_no`,`address`,`state`,`country`,`start_date`,`end_date`) VALUES ('$lead_name', '$phone','$email','$city','$interest','$source','$status',' $assigned','$username','$industry','$currentTime','$message','$comany_name','$designation','$what_no','$address','$state','$country','$starting','$ending')";
		}else{
		   $sql = "INSERT INTO `lead`(`lead_name`, `phone`, `email`, `city`, `interest`, `source`, `status`,`employe_id`,`employe_name`,`industry_type`,`last_update`,`message`,`company_name`,`designation`,`what_no`,`address`,`state`,`country`,`start_date`,`end_date`) VALUES ('$lead_name', '$phone','$email','$city','$interest','$source','$status','$userid','$username','$industry','$currentTime','$message','$comany_name','$designation','$what_no','$address','$state','$country','$starting','$ending')";
		}
	

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:../lead.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST