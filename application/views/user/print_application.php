<?php
if(isset($data))
{
   $name = $data->name;
   $father = $data->father;
   $mother = $data->mother;
   $guardian = $data->guardian;
   $dob = $data->dob;
   $school = $data->school;
   $nationality = $data->nationality;
   $cast = $data->cast;
   $aadhar = $data->aadhar;
   $mobile1 = $data->mobile1;
   $mobile2 = $data->mobile2;
   $address = $data->address;
   $addmission = $data->addmission;
   $photo = $data->photo;
   $sig = $data->signature;
   $Reg_Date = $data->Reg_Date;
   
}
?>
<style type="text/css">
	table tr th{
		border: none;
	}
</style>
<style>
    .error{
      color: red;
        font-style: italic;
    }
    
  </style>
  <style>
    .error{
      color: red;
        font-style: italic;
    }
    #logo{
    	width: 120px;
    }
    @media (max-width: 768px){
    	#logo{
    	  width: 80px;
       }
       
    }
    
    input[type="text"],select{
        text-transform:uppercase;
    }
  </style>
<body>
	<div class="container mt-4 col-md-9">
		<div class="card">
			<div class="card-header">
               <div class="row">
	               	<div class="col-md-1 col-3">
	               		<img src="<?php echo base_url() ?>/uploade/logo.jpg" id="logo">
	               		
	               	</div>
	               	<div class="col-md-10 col-9">
	               		<h1 class="card-title text-uppercase text-center">
					pandua ideal academy (r)
						</h1>
					<div class="float-right" style="cursor: pointer;">
						<a onclick="print_App();"><img src="https://st2.depositphotos.com/1432405/12062/v/450/depositphotos_120621618-stock-illustration-printer-icon-flat-style.jpg" width="30px;"></a>
					</div>
	               	</div>
	               	<div class="col-md-12 col-12">
	               		
						<p class="text-center text-uppercase">a unit of gour banga educationa & charitable trust</p>
						<p class="text-center text-uppercase">pandua, gazole, malda-732102</p>
	               	</div>
               </div>
				
			</div>
			<div class="card-body">
				<div class="col-md-12">
				  <table class="table table-sm">
				  	 <tr>
				  	 	<th style="border: none;">1. Name :</th>
				  	 	<td style="border: none;"><?php echo $name; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">2. Father's Name :</th>
				  	 	<td ><?php echo $father; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">3. Mother's Name :</th>
				  	 	<td  style="border: none;"><?php echo $mother; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">4. Guardian Name :</th>
				  	 	<td><?php echo $guardian; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">5. Date of Birth :</th>
				  	 	<td  style="border: none;"><?php echo $dob; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">6. Name of School :</th>
				  	 	<td><?php echo $school; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">7. Nationality :</th>
				  	 	<td  style="border: none;"><?php echo $nationality; ?></td>
				  	 	<th  style="border: none;">8. Cast :</th>
				  	 	<td style="border-top: none;"><?php echo $cast; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">9. Aadhar No :</th>
				  	 	<td ><?php echo $aadhar; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">10. Mobile No 1 :</th>
				  	 	<td><?php echo $mobile1; ?></td>
				  	 	<th  style="border: none;">11. Mobile No 2 :</th>
				  	 	<td style="border-top: none;"><?php echo $mobile2; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">12. Full Postal Address :</th>
				  	 	<td  style="border: none;"><?php echo $address; ?></td>
				  	 </tr>
				  	 <tr>
				  	 	<th  style="border: none;">13. Addmission Test for Class :</th>
				  	 	<td><?php echo $addmission; ?></td>
				  	 </tr>

				  </table>
				  <div class="row" style="margin-top: 15%;">
				  	<div class="col-md-6">
				  		
				  		<p class="text-center" style="border:1px solid lightgray; border-bottom: none;border-left: none;border-right: none; width: 80%;">Sig. of Guardian</p>
				  	</div>
				  	<div class="col-md-6">
						  <div class="d-flex justify-content-center">
						     <img src="<?= base_url("uploade/") ?><?php echo $sig; ?>" height="40px" >
                         </div>
				  		<p class="text-center" style="border-bottom: none;border-left: none;border-right: none;">Sig. of Applicant</p>
				  	</div>
				  </div>
				  <div class="row mt-5">
				  	<div class="col-md-12 text-center">
				  		<span>...................................................................................................................................................................................................................</span>
				  	</div>
				  </div>
				  <div class="row mt-5">
				  	<div class="col-md-12">
				  		<h4 class="text-center">ACKNOWLEDGEMENT</h4>

				  		
				  	</div>
				  	<div class="col-md-6 mt-2">
				  		<p>Rs-50/-(fifty) and an application form for the Addmission Test likely to be held on 21/03/2022</p>
				  	</div>
				  	<div class="col-md-6 text-right">
					  <div class="d-flex justify-content-end">
						     <img src="<?= base_url("uploade/") ?><?php echo $photo; ?>" height="120px" >
                         </div>
				  		<!-- <img src="" height="120px" width="100px" style="border:1px solid black;"/ > -->
				  	</div>
				  	<div class="col-md-12 mt-3">
				  		From.......................................................................................................S/o............................................................................................
				  	</div>
				  	<div class="col-md-6 mt-5">
				  		Date : <?php echo $Reg_Date; ?>
				  	</div>
				  </div>
				   
				</div>
			
			</div>
			<div class="card-footer bg-warning">
				
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">

  print_App();

  function print_App(){

  	window.print();
  }
	
</script>
