<?php
class Dashboard extends CI_Controller
{
	
	public function __construct()
	{
        parent::__construct();
        $this->logged_in();
	}
    
    private function logged_in()
    {
      if(! $this->session->userdata('admin_active'))
      {
      	redirect(base_url('admin'));
      }
    }

	public function index()
	{
	   $page_title['title']="Dashboard";
	   $this->load->model('Admin_Model');
	   $page_title['total_student']=$this->Admin_Model->Number_of_Student();
	   $this->load->view('admin/dashboard/header',$page_title);
	   $this->load->view('admin/dashboard/index');
	   $this->load->view('admin/dashboard/footer');
	}

	public function change_password()
	{
	   $page_title['title']="Change Password";
	   $this->load->view('admin/dashboard/header',$page_title);
	   $this->load->view('admin/dashboard/change_password');
	   $this->load->view('admin/dashboard/footer');
	   $this->load->view('admin/dashboard/script/change_password_master');
	}


    public function view_student()
    {
       $page_title['title']="View Student";
       $this->load->view('admin/dashboard/header',$page_title);
	   $this->load->view('admin/dashboard/view_student');
	   $this->load->view('admin/dashboard/footer');
	   $this->load->view('admin/dashboard/script/search_master');
    }
	public function display_student()
	{  
      //  Array
		// (
		//     [from_date] => 
		//     [to_date] => 
		//     [search_val] => 
		//     [status] => All
		//     [top] => 50
		// )
	   
	   $from_date = $this->input->post('from_date');
	   $to_date = $this->input->post('to_date');
	   $search_val = $this->input->post('search_val');
	   $status = $this->input->post('status');
	   $top = $this->input->post('top');
	   $this->load->model('Admin_Model');
	   if($data = $this->Admin_Model->All_Register_Student($from_date,$to_date,$search_val,$status,$top))
	   {
	   	  $output =array();
	   	  $i = 1;
         foreach ($data as $value) {  
           // $value['delete']='<a href="view_ncert_mcq_summeries.php?id='.$value['Sum_Id'].'" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>';
           $value['Sl_no']=$i;
           $value['print']='<a href="'.base_url('Dashboard/print/').$value['Reg_Id'].'" class="btn btn-success btn-sm" ><i class="fas fa-download"></i></a>';
           $output[]= array_values($value);
         $i++;
         }
	      $value = array_values($output);
	      $result['status_code']=1;
	      $result['message']='Data Successfully Found';
	      $result['data']=$value;
	      $json = json_encode($result);
	      echo $json;
	   }
	   

	}

	public function print($id)
	{
      
      $id = $id;
      $this->load->model('Admin_Model');
	  $result = $this->Admin_Model->Fetch_Application_Details($id);
	  $this->load->view('user/header');
	  $this->load->view("admin/dashboard/print_application",['data'=>$result]);  
	  $this->load->view('user/footer');  
	}


	public function change_password_action()
	{
		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run('validate_change_password'))
		{
		   $password = $this->security->xss_clean($this->input->post('password'));
		   $id = $this->session->userdata('id');
		   // echo "Username & Password ".$username. " ".$password ;
		   $this->load->model('Admin_Model');
		   $data = $this->Admin_Model->Change_Password($password,$id);
		   if($data)
		   {
		   	
            $array = array(
                'success'   => true,
		        'message' => 'Password Change Successfully Done',
              );

		    }
		    else
		    {
		       $array = array(
                'error'   => true,
		        'message' => '<div class="alert alert-danger">Technical issue, Please try again  !</div>',
                );

		    }
		
		}
		else
		{
		   $array = array(
		    'error'   => true,
		    'message' => '
		    <div class="alert alert-danger">'.form_error('password').'</div>
		    <div class="alert alert-danger">'.form_error('c_password').'</div>
		    '    
		   );
		}


	 echo json_encode($array);

	}







}

?>