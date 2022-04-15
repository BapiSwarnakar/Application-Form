<?php
 class User extends CI_Controller
 {
 	public function index()
	{
		//$this->load->helper("html");
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
		//echo "Testing..";
	}

	public function validation()
	{
		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run('validate_form'))
		{
			$this->load->library('upload');
			$post = $this->input->post();
			$post['Reg_Flag']='1';
			
			// Image Upload
			$photo_data = array();
			$sig_data = array();
			$unicName = strtotime("now");
			
			$photo = $unicName."_".$_FILES['photo']['name'];
			$sig   = $unicName."_".$_FILES['sig']['name'];
			
			$config = array(
				'upload_path' => "./uploade/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				// 'max_height' => "768",
				// 'max_width' => "1024",
				'file_name' =>$photo
				);
			$this->upload->initialize($config);
			if(! $this->upload->do_upload('photo'))
			{
				$array = array(
					'error'=>true,
					'message'=>$this->upload->display_errors()
				);

			}
			else{
				$photo_data = $this->upload->data();

				$config1 = array(
					'upload_path' => "./uploade/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					// 'max_height' => "768",
					// 'max_width' => "1024",
					'file_name' =>$sig
					);
				$this->upload->initialize($config1);
				if(! $this->upload->do_upload('sig'))
				{
					$array = array(
						'error'=>true,
						'message'=>'Not Upload Signature '
					);
				}
				else{
					$sig_data = $this->upload->data();
					$post['photo'] = $photo_data['file_name'];
			        $post['signature']=$sig_data['file_name'];
					// Image Upload Exit
					$this->load->model('User_Model');
					if($last_id = $this->User_Model->Register_Form($post))
					{
					$this->session->set_userdata('id',$last_id);
					$array = array(
						'success'   => true,
						'message' => '<div class="alert alert-success">Your Application Saved Successfully</div>',
					);
					// return redirect('admin/Welcome');
					}
					else
					{
					$array = array(
						'error'   => true,
						'message' => '<div class="alert alert-danger">Technical issue, Please try again !</div>',
					);
					
					}
				}
			}

			
		 

		}
		else
		{
		   $array = array(
		    'error'   => true,
		    'name' => form_error('name'),
		    'father' => form_error('father'),
		    'mother' => form_error('mother'),
		    'guardian' => form_error('guardian'),
		    'dob' => form_error('dob'),
		    'school' => form_error('school'),
		    'nationality' => form_error('nationality'),
		    'cast' => form_error('cast'),
		    'aadhar' => form_error('aadhar'),
		    'mobile1' => form_error('mobile1'),
		    'mobile2' => form_error('mobile2'),
		    'address' => form_error('address'),
		    'addmission' => form_error('addmission'),
			'photo' => form_error('photo'),
			'sig' => form_error('sig')


		   );
		}
	 echo json_encode($array);
	}


	public function photo_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['photo']['name']);
        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('photo_check', 'Please select only gif/jpg/png file.');
                
				return false;
            }
        }else{
            $this->form_validation->set_message('photo_check', 'Please choose a <b>Photo</b> to upload.');
                
		   return false;
        }
    }

	public function sig_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['sig']['name']);
        if(isset($_FILES['sig']['name']) && $_FILES['sig']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('sig_check', 'Please select only gif/jpg/png file.');
                
				return false;
            }
        }else{
            $this->form_validation->set_message('sig_check', 'Please choose a <b>Signature</b> to upload.');
                
		   return false;
        }
    }


	public function print()
	{
      $id = $this->session->userdata('id');
      $this->load->model('User_Model');
	  $result = $this->User_Model->Fetch_Application_Details($id);
	  $this->load->view('user/header');
	  $this->load->view("user/print_application",['data'=>$result]);  
	  $this->load->view('user/footer');  
	}
	






// End Class

 }
  
?>