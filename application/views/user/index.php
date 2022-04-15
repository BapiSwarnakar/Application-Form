
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
	               	</div>
	               	<div class="col-md-12 col-12 mt-2">
	               		
						<p class="text-center text-uppercase">a unit of gour banga educationa & charitable trust</p>
						<p class="text-center text-uppercase">pandua, gazole, malda-732102</p>
	               	</div>
               </div>
				
			</div>
			<div class="card-body">
				<span id="success-message"></span>
				<form class="row g-3" id="registration">
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="name" name="name" />
				      <label for="name" class="form-label">Name</label>
				      
				    </div>
				    <div class="error-name text-danger"></div>
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="father" name="father" />
				      <label for="father" class="form-label">Father's Name</label>
				     
				    </div>
				     <div class="error-father text-danger"></div>
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="mother" name="mother" />
				      <label for="mother" class="form-label">Mother's Name</label>
				      
				    </div>
				    <div class="error-mother text-danger"></div>
				  </div>
				   <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="guardian" name="guardian"  />
				      <label for="guardian" class="form-label">Guardian Name</label>
				      
				    </div>
				    <div class="error-guardian text-danger"></div>
				  </div>
				  <div class="col-md-3">
				    <div class="form-outline">
				      <input type="date" class="form-control" id="dob" name="dob"  />
				      <label for="dob" class="form-label">Date of Birth</label>
				      
				    </div>
				    <div class="error-dob text-danger"></div>
				  </div>
				  <div class="col-md-5">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="school" name="school" />
				      <label for="school" class="form-label">Name of School (studying now/last studied)</label>
				      
				    </div>
				    <div class="error-school text-danger"></div>
				  </div>
				   <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="nationality" name="nationality" />
				      <label for="nationality" class="form-label">Nationality</label>
				      
				    </div>
				    <div class="error-nationality text-danger"></div>
				  </div>
				    <div class="col-md-4">
				        <select class="select select-initialized form-control" name="cast">
				          <option value="">Select Cast</option>
				          <option value="General">General</option>
				          <option value="ST">ST</option>
				          <option value="SC">SC</option>
				          <option value="OBC-A">OBC-A</option>
				          <option value="OBC-B">OBC-B</option>
				        </select>
				        <div class="error-cast text-danger"></div>
				  </div>
				   <div class="col-md-4">
				    <div class="form-outline">
				      <input type="number" class="form-control" id="aadhar" name="aadhar" />
				      <label for="aadhar" class="form-label">Aadhar No</label>
				      
				    </div>
				    <div class="error-aadhar text-danger"></div>
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="number" class="form-control" id="mobile1" name="mobile1" />
				      <label for="mobile1" class="form-label">Mobile No 1</label>
				     
				    </div>
				     <div class="error-mobile1 text-danger"></div>
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="number" class="form-control" id="mobile2" name="mobile2"  />
				      <label for="mobile2" class="form-label">Mobile No 2</label>
				      
				    </div>
				    <div class="error-mobile2 text-danger"></div>
				  </div>
				  <div class="col-md-12">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="address" name="address"  />
				      <label for="address" class="form-label">Full Postal Address</label>
				      
				    </div>
				    <div class="error-address text-danger"></div>
				  </div>
				  <div class="col-md-12">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="addmission" name="addmission"  />
				      <label for="addmission" class="form-label">Addmission Test for Class</label>
				      
				    </div>
				    <div class="error-addmission text-danger"></div>
				  </div>
				  <div class="col-md-6">
				    <div class="form-group">
				      <input type="file" class="form-control" id="photo" name="photo"  />
				      <label for="addmission" class="form-label">Upload Photo</label>
				      
				    </div>
				    <div class="error-photo text-danger"></div>
				  </div>
				  <div class="col-md-6">
				    <div class="form-group">
				      <input type="file" class="form-control" id="sig" name="sig"  />
				      <label for="addmission" class="form-label">Upload Signature</label>
				      
				    </div>
				    <div class="error-sig text-danger"></div>
				  </div>
				  
				  <div class="col-12">
				    <button class="btn btn-primary" type="submit" id="submit">Submit form</button>
				  </div>
				</form>
			</div>
			<div class="card-footer bg-warning">
				
			</div>
		</div>
	</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	 
	 $('#registration').on('submit',function(event){

	 	event.preventDefault();
        $.ajax({
			url:"<?= site_url("User/validation") ?>",
			method : "post",
			enctype : "multipart/form-data",
            data: new FormData(this),
			dataType : "json",
			contentType: false,
            cache: false,
            processData:false, 
			beforeSend : function()
			{
				$('#submit').attr('disabled',true);
				$('#submit').html('Please wait..');
			},
			success : function(data){
				if(data.error)
				{
				 
				  $('#success-message').html(data.message);
                  $('.error-name').html(data.name);
                  $('.error-father').html(data.father);
                  $('.error-mother').html(data.mother);
                  $('.error-guardian').html(data.guardian);
                  $('.error-dob').html(data.dob);
                  $('.error-school').html(data.school);
                  $('.error-nationality').html(data.nationality);
                  $('.error-cast').html(data.cast);
                  $('.error-aadhar').html(data.aadhar);
                  $('.error-mobile1').html(data.mobile1);
                  $('.error-mobile2').html(data.mobile2);
                  $('.error-address').html(data.address);
                  $('.error-addmission').html(data.addmission);
				  $('.error-photo').html(data.photo);
				  $('.error-sig').html(data.sig);
				  if(data.message)
				  {
                    swal("Error",data.message,"error");
				  }
				  

				}

				if(data.success)
				{
				  $('#success-message').html(data.message);
                  $('.error-name').html('');
                  $('.error-father').html('');
                  $('.error-mother').html('');
                  $('.error-guardian').html('');
                  $('.error-dob').html('');
                  $('.error-school').html('');
                  $('.error-nationality').html('');
                  $('.error-cast').html('');
                  $('.error-aadhar').html('');
                  $('.error-mobile1').html('');
                  $('.error-mobile2').html('');
                  $('.error-address').html('');
                  $('.error-addmission').html('');
				  $('.error-photo').html('');
				  $('.error-sig').html('');
                  
                  $('#registration')[0].reset();
                    
                  swal({
                  	  title: "Thankyou",
					  text: "Your Details Saved our Database",
					  icon: "success",
					  button: "Print",
                   })
					.then((value) => {
					  location.href='<?= site_url("User/print") ?>';
					});
				 }
				$('#submit').attr('disabled',false);
				$('#submit').html('Submit form');

			}
		});



	 });	
		
	        
});
</script>




<!-- <script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script> -->