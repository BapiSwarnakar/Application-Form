
<style type="text/css">
  #display_info_details{
    background-color: white;
    color: black;
  }
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         <!--  <div class="col-sm-6">
            <h1>Display Billing Details</h1>
          </div> -->
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Display Student details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             
                <div  class="form-row">

                  <div class="form-group">
                    <label>Top
                    <select name="top" id="top" class="form-control form-control-sm">
                      <option value="50">50</option>
                      <option value="200">200</option>
                      <option value="500">500</option>
                      <option value="All">All</option>
                    </select>
                  </label>

                    <label>From
                    <input type="date" name="from_date" id="from_date" class="form-control form-control-sm"></label>
                  </div>&nbsp;
                  <div class="form-group">
                    <label>To
                    <input type="date" name="to_date" id="to_date" class="form-control form-control-sm"></label>
                  </div>&nbsp;
                  <div class="form-group" style="display: none;">
                    <label>Status
                      <select class="form-control form-control-sm" name="status" id="status">
                        <?php
                        $all ='';
                        $two ='';
                        $one ='';
                        $three = '';
                         if(isset($_GET['status']) && !empty($_GET['status'])){

                           if($_GET['status']=='All')
                           {
                             $all .='selected'; 
                           }
                           if($_GET['status']=='2')
                           {
                             $two .='selected'; 
                           }
                           if ($_GET['status']=='1') {
                             $one .='selected'; 
                           }
                           if ($_GET['status']=='3') {
                             $three .='selected'; 
                           }
                         }
                         else
                         {
                           $all .='selected';
                         }
                        ?>
                        <option value="All" <?php echo $all; ?>>All</option>
                        <option value="1" <?php echo $one; ?>>Pending</option>
                        <option value="2" <?php echo $two; ?>>Active</option>
                        <option value="3" <?php echo $three; ?>>Rejected</option>
                        
                      </select>
                    </label>
                  </div>&nbsp;
                  <div class="form-group">
                    <br/>
                   <!--  <input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info btn-sm">
                    <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-danger btn-sm" onclick="location.reload()"> -->
                   <button class="btn btn-primary btn-sm mb-1 d-none" onclick="location.href='add_ncert_mcq_summeries.php'"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add</button>&nbsp; 
                
                
              </div>
              
                    
              </div>
           
                <div style="display: none;">
                  <input type="search" name="myInput1" id="myInput1" class="form-control form-control-sm" placeholder="Search User Name or Mobile No..">
                </div>
              

              <form id="frm-example" method="POST">
                

                <!-- <button type="submit" name="submit" id="delete" class="btn btn-danger btn-sm mb-1"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button>&nbsp; -->
               <table id="table" class="table table-bordered table-striped">
                  <thead>

                  <tr>

                    <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Father</th>
                    <th>Guardian</th>
                    <th>Dob</th> 
                    <th>School</th>  
                    <th>Aadhar</th> 
                    <th>Mobile</th> 
                    <th>Address</th>
                    <th>Addmission</th> 
                    <th>print</th>
                    <th>Date</th>                   
                  </tr>
                  </thead>
                  <tbody id="data_success">
                       <tr id="load">
                          <td colspan="14" class="text-center"><i class="fas fa-spinner fa-spin fa-2x"></i></td>
                        </tr>
                  </tbody>
                </table>

               
            </form>
              </div>
           
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Display Value -->
  <!-- <input type="hidden" id="display" value="Display_Billing_Point_All"> -->
  <input type="hidden" id="url" value="display_student">
