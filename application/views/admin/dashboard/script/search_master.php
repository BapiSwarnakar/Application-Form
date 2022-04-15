<script type="text/javascript">
	$(document).ready(function(){

        $('#admin_data_form').parsley();
		$('#admin_data_form').on('submit',function(event){
		if($('#admin_data_form').parsley().validate())
		{
			$.ajax({
            url:"../../action-page/admin_ajax_action.php",
            method:"POST",
            enctype : "multipart/form-data",
            data: new FormData(this),
            dataType:"json",
            contentType: false,
            cache: false,
            processData:false, 
            //contentType: false,
            //cache: false,
            // processData:false,        
            beforeSend:function()
            {
              $('#submit').val('Please wait..');
              $('#submit').attr('disabled',true);
            },
            success:function(data)
            {
              if(data.success)
              {
                 toastr.options = {
                    "closeButton": true,  // true or false
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,  // true or false
                    "rtl": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false, // true or false
                    "showDuration": 300,
                    "hideDuration": 1000,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                toastr["success"](data.success, "Message");
                $('#admin_data_form')[0].reset();
                $('#submit').val('Submit');
                $('#submit').attr('disabled',false);
                $('#exampleModalCenter').modal('hide');
                Display_All_Payment(
					$('#from_date').val(),
					$('#to_date').val(),
					$('#myInput1').val(),
					$('#status').val()
					);
               
               }
               else
               {
                  toastr.options = {
                    "closeButton": true,  // true or false
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,  // true or false
                    "rtl": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false, // true or false
                    "showDuration": 300,
                    "hideDuration": 1000,
                    "timeOut": 5000,
                    "extendedTimeOut": 1000,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                  }
                  toastr["error"](data.error, "Message");
                  $('#submit').val('Submit');
                  $('#submit').attr('disabled',false);
               }
              
             }
           });
		}
	 event.preventDefault();
	});


	$(document).on('click','.Payment_Now',function(event){
         
         $.ajax({
		        url : "../../action-page/admin_ajax_action.php",
		        type : "POST",
		        data : {
		          page : "Payment_Amount",
		          action :"Payment_Amount",
		          id : $(this).data('id')
		        },
		        dataType: "json",
		        success : function(data){
		           $('#amount').val(data.amount);
		           $('#id').val(data.id);
		           $('#exampleModalCenter').modal('show');

		        }
		    });

		 event.preventDefault();
		});
		//current_date = (new Date()).toISOString().split('T')[0];
		Display_All_Payment(
			$('#from_date').val(),
			$('#to_date').val(),
			$('#myInput1').val(),
			$('#status').val(),
			$('#top').val()
			);

		  function Display_All_Payment(from_date,to_date,search_val,status,top)
		  {
             $.fn.dataTable.ext.errMode = 'none';
		     var table = $('#table').DataTable({
			      'ajax':{
			          'url': "<?= site_url("Dashboard/")?>"+$('#url').val()+"",
			          'method': 'POST',
			          'data' : {
				          'from_date' : from_date,
				          'to_date' : to_date,
				          'search_val' : search_val,
				          'status' : status,
				          'top' : top
			          },
			          'error': function(jqXHR, textStatus, errorThrown){
					        $('#table').DataTable().clear().draw();
					    }  
			       }, 
			      "bProcessing": true,
		          "bDestroy": true ,
			      'columnDefs': [{
					   'targets': 0,
					   'searchable':false,
					   'orderable':false,
					   'className': 'dt-body-center',
					   'render': function (data, type, full, meta){
					       return '<input type="checkbox" name="id[]" class="select_record" value="' + $('<div/>').text(data).html() + '">';
					   }
					}],
					'order': [[1, 'asc']],
					"responsive": true,
	                "autoWidth": false,
	                  dom: 'Bfrtip',
	                  buttons: [
	                      'copy', 'csv', 'excel', 'pdf', 'print'
	                  ]
			   });
            

            // Handle click on "Select all" control
			$('#example-select-all').on('click', function(){
			   // Get all rows with search applied
			   var rows = table.rows({ 'search': 'applied' }).nodes();
			   // Check/uncheck checkboxes for all rows in the table
			   $('input[type="checkbox"]', rows).prop('checked', this.checked);
			});
			// Handle click on checkbox to set state of "Select all" control
			$('#example tbody').on('change', 'input[type="checkbox"]', function(){
			   // If checkbox is not checked
			   if(!this.checked){
			      var el = $('#example-select-all').get(0);
			      // If "Select all" control is checked and has 'indeterminate' property
			      if(el && el.checked && ('indeterminate' in el)){
			         // Set visual state of "Select all" control
			         // as 'indeterminate'
			         el.indeterminate = true;
			      }
			   }
			});

            
			
					   
		}

    
    // Handle form submission event
 //    $('#frm-example').on('submit', function(e){

 //    	e.preventDefault();
 //    	var form = this;
 //    	var id = $('.select_record:checked').map(function(){
 //    		return $(this).val();
 //    	}).get().join(',');

 //    	alert(id);
	// 		      // alert($(form).serialize());

	// });

	$('#delete').click(function(event){

        var id = $('.select_record:checked').map(function(){
           return $(this).val();
        }).get().join(',');
        
        if(id !='')
        {
           var conn = confirm("Are You Sure Delete !");
           if (conn != false) {

                $.ajax({
                      url : "../../action-page/admin_ajax_action.php",
                      type : "POST",
                      data:{
                        page : $('#delete_').val(),
                        action  : $('#delete_').val(),
                        id : id
                      },
                      dataType : "json",
                      success : function (data)
                      {
                         if(data.success)
                            {
                               toastr.options = {
                                  "closeButton": true,  // true or false
                                  "debug": false,
                                  "newestOnTop": false,
                                  "progressBar": true,  // true or false
                                  "rtl": false,
                                  "positionClass": "toast-top-right",
                                  "preventDuplicates": false, // true or false
                                  "showDuration": 300,
                                  "hideDuration": 1000,
                                  "timeOut": 5000,
                                  "extendedTimeOut": 1000,
                                  "showEasing": "swing",
                                  "hideEasing": "linear",
                                  "showMethod": "fadeIn",
                                  "hideMethod": "fadeOut"
                                }
                              toastr["success"](data.success, "Message");                
                                setTimeout(function(){
                                  location.reload();
                                }, 500);

                             }
                             else
                             {
                                toastr.options = {
                                  "closeButton": true,  // true or false
                                  "debug": false,
                                  "newestOnTop": false,
                                  "progressBar": true,  // true or false
                                  "rtl": false,
                                  "positionClass": "toast-top-right",
                                  "preventDuplicates": false, // true or false
                                  "showDuration": 300,
                                  "hideDuration": 1000,
                                  "timeOut": 5000,
                                  "extendedTimeOut": 1000,
                                  "showEasing": "swing",
                                  "hideEasing": "linear",
                                  "showMethod": "fadeIn",
                                  "hideMethod": "fadeOut"
                                }

                                toastr["error"](data.error, "Message");
                             }
                      }

                    });
           }
        }
        else
        {
           alert("Please Select Minimun One Record !");
        }

      event.preventDefault();
        
     });



   //   $('#filter_form').parsley();
	  // $('#filter_form').on('submit',function(event){
	  //   if($('#filter_form').parsley().validate())
	  //   {
	  //     Display_All_Payment($('#from_date').val(),
			// $('#to_date').val(),
			// $('#myInput1').val(),
			// $('#status').val(),
			// $('#top').val()
			// );
	  //   }
	  //   event.preventDefault();
	  // });

	   $('#from_date').change(function(event){
	      let from_date = $(this).val();
          Display_All_Payment(from_date,$('#to_date').val(),$('#myInput1').val(),$('#status').val(),$('#top').val());       
	    event.preventDefault();
	   });

	   $('#to_date').change(function(event){
	      let to_date = $(this).val();
          Display_All_Payment($('#from_date').val(),to_date,$('#myInput1').val(),$('#status').val(),$('#top').val());       
	    event.preventDefault();
	   });

	   $('#top').change(function(event){
	      let top = $(this).val();
          Display_All_Payment($('#from_date').val(),$('#to_date').val(),$('#myInput1').val(),$('#status').val(),top);       
	    event.preventDefault();
	   });

	  // Select All Checkbox
	   $('#select_all').change(function(event){
	     $('.select_record').prop("checked",$(this).prop("checked"));

	    event.preventDefault();
	   });
	   // $('#select_all').on('change',function(event){
	   //   $('.select_record').prop("checked",$(this).prop("checked"));
	   //   event.preventDefault();
	   // })

	   $('#excel_downlode_btn').click(function(){
	      var id = $('.select_record:checked').map(function(){
	         return $(this).val();
	      }).get().join(' ');
	      window.open('export_excel_all_payment_list.php?id='+id+'','_blank' );
	      
	   });

	   // Search All AppointMent
	    $("#myInput1").on("keyup", function() {
	      // var value = $(this).val().toLowerCase();
	      // $("#data_ tr").filter(function() {
	      //   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	      // });
	       var Search_val = $(this).val();
	       if(Search_val !="")
	       {
	         Display_All_Payment(
	         	$('#from_date').val(),
				$('#to_date').val(),
				$('#myInput1').val(),
				$('#status').val()
				);
	       }
	    });

	});
</script>