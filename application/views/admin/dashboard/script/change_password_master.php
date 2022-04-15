<script type="text/javascript">
  $(document).ready(function(){
        $('#Admin_login_form').parsley();
        $('#Admin_login_form').on('submit',function(event){
          if($('#Admin_login_form').parsley().validate())
          {
            $.ajax({
              url:"<?= site_url("Dashboard/change_password_action") ?>",
              method:"post",
              data : $(this).serialize(),
              dataType:"json",
              beforeSend:function()
              {
                $('#submit').html('Please Wait..');
                $('#submit').attr('disabled',true);
              },
              success:function(data)
              {
              if(data.success)
                  {
                    swal("Thankyou", "Password Change Successfully done !", "success");
                    $('#Admin_login_form')[0].reset();
                    $('#submit').html('Change Password');
                    $('#submit').attr('disabled',false);
                     
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
                     toastr["error"](data.message, "Message");
                     $('#submit').html('Change Password');
                     $('#submit').attr('disabled',false);
                   }
              }
            });
          }
        event.preventDefault();
        });

});
</script>