<?php
//require_once './php_action/core.php';
 session_start();
 include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>
<?php include('./constant/connect');?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> View Lead</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">View Lead</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="add-lead.php"><button class="btn btn-primary">Add Lead</button></a>
                 <a href="add-review.php"><button class="btn btn-primary">Add Review</button></a>

                <br>
                	<div class="outer-container">
                		<div class="row">
                			<form  action="php_action/excel-lead.php" method="POST" enctype="multipart/form-data" >
                               <div class="form-group">
                            <label for="exampleInputFile">File Upload</label>
                            <input type="file" name="file" id="file" size="150">
                            <p class="help-block">Only CSV File Import.</p>
                        </div>
                        <button type="submit" class="btn btn-default" name="submit" value="submit">Upload</button>
                			</form>
                		</div>
                	</div>
                
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>#</th>
                              
                                 <th>Company Name</th>
                                <th>Customer Name</th>
                                 <th>Designation Name</th>
                                <th>Phone</th>
                                <th>What's app</th>
                                <th>Email </th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Industry</th>
                                <th>Interested</th>
                                <th>Source</th>
                                <th>Posted By</th>
                                <th>last update</th>
                                <th>Reviews</th>
                                <th>Add Reviews</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                        
                                    $userid = $_SESSION['userId'];
                                        if($userid == 1){
                                            $sql = "SELECT * FROM lead where lead_status=1";
                                        }else{
                                            $sql = "SELECT * FROM lead where lead_status=1 AND  employe_id= '$userid'";
                                        }
                                    
                                    $result1 = $connect->query($sql);
                                    $i=1;


                            while($row = $result1->fetch_array()) {
                                    ?>
                            <tr>

                                <td class="text-center">
                                    <?php echo $i ?>
                                </td>
                                <!--<td><input type="checkbox" name="id[]" value="<?php echo $row['id'] ?>"></td>-->
                                  <td class="text-center">
                                    <?php echo $row['company_name'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['lead_name'] ?>
                                </td>
                                 <td class="text-center">
                                    <?php echo $row['designation'] ?>
                                </td>
                                <td>
                                    <?php echo $row['phone'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['what_no'] ?>
                                </td>

                                <td>
                                    <?php echo $row['email'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['address'] ?>
                                </td>
                                <td>
                                    <?php echo $row['city'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['state'] ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['country'] ?>
                                </td>
                                <td>
                                    <?php echo $row['industry_type'] ?>
                                </td>

                                <td>
                                    <?php echo $row['interest'] ?>
                                </td>
                                <td>
                                    <?php echo $row['source'] ?>
                                </td>
                                <td>
                                    <?php echo $row['employe_name'] ?>
                                </td>
                                <td>
                                    <?php echo $row['last_update'] ?>
                                </td>
                                <td>
                                   <a class="label label-success" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                               Reviews</a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <?php 
                                 
                                  $sql="SELECT * from follow_up where lead_id='".$row['id']."'";
                                 $results = $connect->query($sql);

                                  
                                
                                ?>
                              <div class="reviews">
                                   <?php 
                                   $x = 1;
                                   while($rows = $results->fetch_array()) { 
                                             ?>
                    <p>
                     <span> <?php echo $rows['remarks'] ?> </span>   <?php echo $rows['date'] ?> comment : <?php echo $rows['user_name'] ?>
                    </p>

                                          <?php    
                                                $x++;  }
                                            ?>
                              </div>
                            </div>
                                    
                                </td>
                             
                             
                             
                             <td>
                                 
                                 
                                 <form class="row" method="POST" id="submitBrandForm" action="php_action/addreview.php"
                enctype="multipart/form-data">
                
                 <div class="form-group col-md-12">
                 
                  <textarea class="form-control" id="message" name="review"></textarea>
                   <input type="hidden" value="<?php echo $row['id']?>" name="lead_id"/>
               <button type="submit" name="create" id="createCategoriesBtn"
                    class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                          </div>
               
              </form>
                                 
                                 
                                 
                             </td>
                             
                             
                             
                             
                             
                             
                             
                             

                                <td>
                                    <?php  if($row['status']==1)
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
                                        ?>
                                </td>

                                <td>

                                    <a href="editlead.php?id=<?php echo $row['id']?>"><button type="button"
                                            class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>



                                    <a href="php_action/removeLead.php?id=<?php echo $row['id']?>"><button type="button"
                                            class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are you sure to delete this record?')"><i
                                                class="fa fa-trash"></i></button></a>


                                </td>
                            </tr>
                            <?php $i++;}  ?>
                        </tbody>

                    </table>
                </div>
               
                                       
                                   
             
                                       
            </div>
        </div>
    </div>
</div>

<?php include('./constant/layout/footer.php');?>