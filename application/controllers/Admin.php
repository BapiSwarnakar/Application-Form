<?php
class Admin extends CI_Controller
{
	
	public function index()
	{
		$page_title['title']="Admin Login";
		if($this->session->userdata('admin_active'))
	    {
	      redirect(base_url('dashboard')); 
	    }
	    else
	    {
	    	$this->load->view('admin/header',$page_title); 
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
	    }
			  
		
	}

	public function valid_login()
	{
		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run('validate_admin_login'))
		{
		   $username = $this->security->xss_clean($this->input->post('username'));
		   $password = $this->security->xss_clean($this->input->post('password'));
		   // echo "Username & Password ".$username. " ".$password ;
		   $this->load->model('Admin_Model');
		   $data = $this->Admin_Model->Admin_Login($username,$password);

		   if($data)
		   {
		   	 $admin_data = array(
                'id'=>$data->id,
                'username'=>$data->username,
                'admin_type'=>$data->admin_type,
                'admin_flag'=>$data->admin_flag,
                'admin_active'=>true

		   	);
            $this->session->set_userdata($admin_data);
            $array = array(
                'success'   => true,
		        'message' => 'Login success',
              );

		    }
		    else
		    {
		       $array = array(
                'error'   => true,
		        'message' => '<div class="alert alert-danger">Invalid Username or Password !</div>',
                );

		    }
		
		}
		else
		{
		   $array = array(
		    'error'   => true,
		    'message' => '
		    <div class="alert alert-danger">'.form_error('username').'</div>
		    <div class="alert alert-danger">'.form_error('password').'</div>
		    '    
		   );
		}


	 echo json_encode($array);

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("Admin/index"));
	}


	


	// public function Welcome()
	// {
 //            $this->load->model('Loginmodel');
	// 		//$articles = $this->Loginmodel->Articlelist();
	// 		$this->load->library('pagination');
	//         $config = [
 //               'base_url'=>base_url('admin/Welcome'),
 //               'per_page'=>2,
 //               'total_rows'=>$this->Loginmodel->num_rows(),
	//         ];
	//        $this->pagination->initialize($config);

	//        $articles = $this->Loginmodel->Articlelist($config['per_page'],$this->uri->segment(3));
           
 //            $this->load->view("Admin/dashboard",['articles'=>$articles]);

		
	// }

	// public function register()
	// {
	// 	$this->load->view("Admin/register");
	// }
	// public function Login()
	// {
	// 	$this->load->view("Admin/Login");
	// }

	
	// public function UserValidation()
	// {
	// 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	// 	if($this->form_validation->run('add_article_validate'))
	// 	{
	// 		$post = $this->input->post();
	// 		$this->load->model('Loginmodel','add_user');
	// 		if($this->add_user->Add_articles($post))
	// 		{
 //              $this->session->set_flashdata('msg','Record Inserted');
 //              $this->session->set_flashdata('msg_class','alert-success');
	// 	   	  return redirect('admin/Welcome');
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('msg','Record Not Inserted');
	// 			$this->session->set_flashdata('msg_class','alert-danger');
	// 	     	$this->load->view("Admin/add_article");
	// 		}

	// 	}
	// 	else
	// 	{
	// 		$this->load->view("Admin/add_article");
	// 	}
	// }
	// public function Add()
	// {
	// 	$this->load->view("Admin/add_article");
	// }
	// public function Edit()
	// {
	// 	$id = $this->input->post('id');
	// 	$this->load->model('Loginmodel');
	// 	$result = $this->Loginmodel->Fetch_value($id);
	// 	$this->load->view("Admin/edit",['articles'=>$result]);
	// }
	// public function Delete()
	// {
	// 	$id = $this->input->post('id');
	// 	$this->load->model('Loginmodel','deluser');
	// 		if($this->deluser->del_articles($id))
	// 		{
 //              $this->session->set_flashdata('msg','Record Delete');
 //               $this->session->set_flashdata('msg_class','alert-success');
		   	  
	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('msg','Record Not Deleted');
	// 			$this->session->set_flashdata('msg_class','alert-danger');
		     	
	// 		}
	// 	return redirect('admin/Welcome');

	// }

	// public function Edit_Validation()
	// {
	// 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	// 	if($this->form_validation->run('add_article_validate'))
	// 	{
	// 		$post = $this->input->post();
	// 		$id = $this->input->post('id');
	// 		$this->load->model('Loginmodel','Edit_user');
	// 		if($this->Edit_user->Edit_Articles($id,$post))
	// 		{
 //              $this->session->set_flashdata('msg','Update Successfull');
 //              $this->session->set_flashdata('msg_class','alert-success');
	// 	   	  return redirect('admin/Welcome');

	// 		}
	// 		else
	// 		{
	// 			$this->session->set_flashdata('msg','Not Update');
	// 			$this->session->set_flashdata('msg_class','alert-danger');
	// 	     	$this->load->view("Admin/edit");
	// 		}

	// 	}
	// 	else
	// 	{
	// 		//return redirect('admin/Welcome');
	// 		$this->load->view("Admin/edit");
	// 	}
	// }


	// public function signup()
	// {
	// 	// $this->load->library('form_validation');
	// 	$this->form_validation->set_rules('username','<b>Username</b>','required|alpha');
	// 	$this->form_validation->set_rules('password','<b>Password</b>','required|max_length[6]');
	// 	$this->form_validation->set_rules('firstname','<b>First Name</b>','required|alpha');
	// 	$this->form_validation->set_rules('lastname','<b>Last Name</b>','required|alpha');
	// 	$this->form_validation->set_rules('email','<b>Valid Email</b>','required|valid_email|is_unique[users.user_email]');
	// 	$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
	// 	if($this->form_validation->run())
	// 	{
	// 	   $username = $this->input->post('username');
	// 	   $password = $this->input->post('password');
	// 	   $firstname = $this->input->post('firstname');
	// 	   $lastname = $this->input->post('lastname');
	// 	   $email = $this->input->post('email');
	// 	  $this->load->model('Loginmodel');
	// 	   if($this->Loginmodel->signup_now($username,$password,$firstname,$lastname,$email))
	// 	   {
 //             // $this->load->library('session');
 //              //$this->load->view('admin/register',['success'=>'SignUp Successfull Done']);

 //              redirect('admin/register?success=SignUp Successfull Done');
	// 	   }
	// 	   else
	// 	   {
 //             $this->load->view('admin/register',['success'=>'Record Not Inserted !']); 	
	// 	   }
		  

	// 	}
	// 	else
	// 	{
	// 		$this->load->view('Admin/register');
	// 		//echo "Invalid Match";
	// 	}
	// }

}



?>