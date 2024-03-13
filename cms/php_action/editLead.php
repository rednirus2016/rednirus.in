<?php 	

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$Id = $_GET['id'];
if($_POST) {	

  $lead_name = $_POST['lead'];
    $phone = $_POST['phone'];
    $email = $_POST['email']; 
    $city = $_POST['city'];
    $interest = $_POST['interest'];
    $source = $_POST['source'];
    $message = $_POST['message'];
    $status = $_POST['status'];
	$type = $_POST['industry_type'];
	
		$comany_name = $_POST['company_name'];
	$designation = $_POST['designation'];
	$what_no = $_POST['what_app'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	
	date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'd-m-Y h:i:s A', time () );
	$sql = "UPDATE lead SET lead_name = '$lead_name', message= '$message', phone = '$phone', email = '$email', city = '$city', interest = '$interest', source = '$source', status = '$status' ,last_update='$currentTime' , industry_type='$type',company_name='$comany_name', designation='$designation' , what_no='$what_no',address='$address',state='$state',country='$country' WHERE id = '$Id'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../lead.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while updating the categories";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST