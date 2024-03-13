<?php 	

require_once 'core.php';



if($_POST) {	
      $employee_id = $_POST['assigned'];
    	$count=count($_POST['id']);

			for($i=0;$i<$count;$i++){
			  
				$sql="UPDATE lead SET employe_id='$employee_id' WHERE IN id='" . $_POST['id'] . "'";
			
			}

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