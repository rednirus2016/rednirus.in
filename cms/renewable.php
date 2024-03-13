
<?php
//require_once './php_action/core.php';
 include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');?>

       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Closed Lead</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Closed Lead</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-lead.php"><button class="btn btn-primary">Add Lead</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                             
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>                           
                            <th>Email </th>
                            <th>City</th>
                            <th>Interested</th>
                            <th>Source</th>
                            <th>Industry</th>
                            <th>Posted by</th>
                            <th>Last Update</th>
                            <th>message</th>
                            <th>Start Date</th>
                            <th>Days Left</th>
                            <th>Last Date</th>
                            <th>Status</th>
                            <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        
    

   $userid = $_SESSION['userId'];
       if($userid == 1){
        $sql = "SELECT * FROM lead where lead_status=1 and status=6";
       }else{
        $sql = "SELECT * FROM lead where lead_status=1 and status=6  AND  employe_id= '$userid' ORDER BY start_date ASC";
       }
    $result1 = $connect->query($sql);
    $i=1;
   while($row = $result1->fetch_array()) {Qualified
                                    ?>    
                                        <tr>
                                                
                                            <td class="text-center"><?php echo $i ?></td>
                                                
                                            <td class="text-center"><?php echo $row['lead_name'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                           
                                               <td><?php echo $row['email'] ?></td> 
                                               <td><?php echo $row['city'] ?></td> 
                                    
                                             <td><?php echo $row['interest'] ?></td>
                                              <td><?php echo $row['source'] ?></td>
                                              
                                              <td><?php echo $row['industry_type'] ?></td>
                                              <td><?php echo $row['employe_name'] ?></td>
                                              <td><?php echo $row['last_update'] ?></td>
                                              <td><?php echo $row['message'] ?></td>
                                              <td><?php echo $row['start_date'] ?></td>
                                              <td>
                                                <?php 
                                                 $date=strtotime($row['end_date']);
                                                 $diff=$date-time();
                                                 $days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                                                 $hours=round(($diff-$days*60*60*24)/(60*60));

                                                  //Report
                                                echo "<label class='label label-danger'>$days days $hours hours remain</label><br />";
                                              ?></td>
                                               <td><?php echo $row['end_date'] ?></td>
                                             <td><?php  if($row['status']==1)
                                            {
                                                 
                                                 $status = "<label class='label label-primary' ><h4>New</h4></label>";
                                                 echo $status;
                                            }
                                            else if($row['status'] == 2){
                                                $status = "<label class='label label-primary'><h4> Working</h4></label>";
                                                echo $status;
                                            }else if($row['status'] == 3){
                                                $status = "<label class='label label-primary'><h4> Contacted</h4></label>";
                                                echo $status;
                                            }else if($row['status'] == 4){
                                                $status = "<label class='label label-success'><h4> Qualified</h4></label>";
                                                echo $status;
                                            }else if($row['status'] == 5){
                                                $status = "<label class='label label-danger'><h4> Failed</h4></label>";
                                                echo $status;
                                            }
                                            else if($row['status'] == 6){
                                                $status = "<label class='label label-danger'><h4> Closed</h4></label>";
                                                echo $status;
                                            }
                                        ?></td>
                                           
                                            <td>
            
                                              <a href="editlead.php?id=<?php echo $row['id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a> 
                                              

             
                                                <a href="php_action/removeLead.php?id=<?php echo $row['id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
                                                </td>
                                        </tr>
                                      <?php $i++;}  ?>
                                    </tbody>
                        
                               </table>
                                </div>
                            </div>
                        </div>
</div></div>
<!--  Author Name: Mayuri K. = www.mayurik.com
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include('./constant/layout/footer.php');?>


