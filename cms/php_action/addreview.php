<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
 	$userid = $_SESSION['userId'];
	$username = $_SESSION['username'];
	$review = $_POST['review'];
	$lead_id = $_POST['lead_id'];


	date_default_timezone_set('Asia/Kolkata');
      $currentTime = date( 'd-m-Y h:i:s A', time () );
       
    
      
			$sql = "INSERT INTO `follow_up`(`remarks`, `lead_id`, `user_id`, `date`,`user_name`) VALUES ('$review', '$lead_id','$userid','$currentTime','$username')";
	

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