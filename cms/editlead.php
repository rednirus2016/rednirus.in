<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>

<?php include('./constant/connect.php');

$sql="SELECT * from lead where  id='".$_GET['id']."'";
  $result=$connect->query($sql)->fetch_assoc();  ?>    
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Edit Lead Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Edit Lead</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="row" method="POST"  id="submitBrandForm" action="php_action/editLead.php?id=<?php echo $_GET['id'];?>"enctype="multipart/form-data">

                                    <div class="form-group col-md-6">
                  <label class="control-label">Company Name</label>
                  <input type="text" class="form-control" value="<?php echo $result['company_name'];  ?>" id="leadName" placeholder="Company Name" name="company_name" 
                    />
                </div>
                                         <div class="form-group col-md-6">
                                            <label class="control-label">Customer Name</label>
                                            <input type="text"  class="form-control" id="leadName" placeholder="Lead Name" name="lead" value="<?php echo $result['lead_name'];  ?>"  pattern="^[a-z A-z]+$"/>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                  <label class="control-label">Designation</label>
                                  <input type="text" class="form-control" id="leadName" value="<?php echo $result['designation'];  ?>" placeholder="Designation" name="designation"
                                   />
                                </div>
                                                        
                                        <div class="form-group col-md-6">
                                            <label class=" control-label">Phone</label>
                                            <input type="text"  class="form-control"id="categoriesName" placeholder="Phone" name="phone" value="<?php echo $result['phone'];  ?>"  pattern="^[0-9]+$"/>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                  <label class=" control-label">What's app no.</label>
                  <input type="text" class="form-control" value="<?php echo $result['what_no'];  ?>" id="categoriesName" placeholder="Phone" name="what_app"
                     pattern="^[0-9]+$" />
                </div>
                                        
                                        
                                        
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Email</label>
                                            <input type="text"  class="form-control"id="categoriesName" value="<?php echo $result['email'];  ?>"  placeholder="Email" name="email"   />
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                  <label class="control-label">Address</label>
                  <input type="text" class="form-control"  value="<?php echo $result['address'];  ?>"  id="categoriesName" placeholder="address" name="address"
                    />
                </div>
                                        
                                        
                                         <div class="form-group col-md-6">
                                            <label class="control-label">City</label>
                                            <input type="text"  class="form-control"id="categoriesName" value="<?php echo $result['city'];  ?>" placeholder="City" name="city"   />
                                        </div>
                                        
                                         <div class="form-group col-md-6">
                                  <label class="control-label">State</label>
                                  <input type="text" class="form-control"  value="<?php echo $result['state'];  ?>"  id="categoriesName" placeholder="State" name="state"
                                    />
                                </div>
                                 <div class="form-group col-md-6">
                                  <label class="control-label">Country</label>
                                  <input type="text" class="form-control"  value="<?php echo $result['country'];  ?>"  id="categoriesName" placeholder="Country" name="country"
                                    />
                                </div>
                                        
                                        
                                        
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Industry Type</label>
                                            <input type="text"  class="form-control" id="categoriesName" placeholder="Industry Type" name="industry_type"  value="<?php echo $result['industry_type'];  ?>"  pattern="^[a-z A-z]+$"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Interested In</label>
                                            <input type="text"  class="form-control"id="categoriesName" placeholder="Interested In" name="interest" value="<?php echo $result['interest'];  ?>"  />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Start Date</label>
                                            <input type="date"  class="form-control"id="categoriesName" placeholder="Interested In" name="start_date"  value="<?php echo $result['start_date'];  ?>" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label">End Date</label>
                                            <input type="date"  class="form-control"id="categoriesName" placeholder="Interested In" name="end_date"  value="<?php echo $result['end_date'];  ?>" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class=" control-label">Source</label>
                                            <select class="form-control" id="categoriesStatus" name="source">
                                               <option value="Call" <?php 
                                                        if($result['source']=="Call") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Call</option>
                                               <option value="Organic" <?php 
                                                        if($result['source']=="Organic") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Organic</option>
                                               <option value="SocialMedia" <?php 
                                                        if($result['source']=="SocialMedia") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Social Media</option>
                                               <option value="Website" <?php 
                                                        if($result['source']=="Website") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Website</option>
                                                <option value="Campaign" <?php 
                                                        if($result['source']=="Campaign") 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Campaign</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class=" control-label">Status</label>
                                            <select class="form-control" id="categoriesStatus" name="status">
                                                <option value="1" <?php 
                                                    if($result['status']==1) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>New</option>
                                                        <option value="2" <?php 
                                                    if($result['status']==2) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Working</option>
                                                
                                                <option value="3" <?php 
                                                    if($result['status']==3) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Contacted</option>
                                               <option value="4" <?php                                        if($result['status']==4) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Qualified</option>
                                                <option value="5" <?php 
                                                    if($result['status']==5) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Failed</option>
                                                <option value="6" <?php 
                                                    if($result['status']==6) 
                                                            { 
                                                                echo "selected";
                                                            }
                                                        ?>>Closed</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class=" control-label">message</label>
                                            <textarea class="form-control" id="message" name="message" value="<?php echo $result['message'] ?>"><?php echo $result['message'] ?></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>


