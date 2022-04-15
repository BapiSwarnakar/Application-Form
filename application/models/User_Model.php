<?php
class User_Model extends CI_Model
{
	public function isvalidate($username,$password)
	{
		$q = $this->db->where(['username'=>$username,'password'=>$password])
		              ->get('users');

		              // echo "<pre>";
		              // print_r($q);

		              //echo "<pre>";
		              // print_r($q->result());
		             // print_r($q->row()->id);

		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return false;
		}
	}

	public function Articlelist($limit,$offset)
	{
		$id = $this->session->userdata('id');
		$sql = $this->db->select()
		                ->from('articles')
		                ->where(['user_id'=>$id])
		                ->limit($limit,$offset)
		                ->get();
		// echo "<pre>";
		// print_r($sql);
		return $sql->result();
		//print_r($sql->result());
	}

	public function num_rows()
	{
		$id = $this->session->userdata('id');
		$sql = $this->db->select()
		                ->from('articles')
		                ->where(['user_id'=>$id])
		                ->get();
		// echo "<pre>";
		// print_r($sql);
		return $sql->num_rows();
		//print_r($sql->result());
	}

	public function signup_now($username,$password,$firstname,$lastname,$email)
	{
		$data = array(
		        'username' => $username,
		        'password' => $password,
		        'firstname' => $firstname,
		        'lastname' =>$lastname,
		        'user_email' =>$email
		);
		if($this->db->insert('users', $data))
		{
			return true;
		}
		else
		{
			return false;
		}  
	}

	public function Register_Form($array)
	{
		$this->db->insert('tbl_registration',$array);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function del_articles($id){

	  return $this->db->delete('articles',['id'=>$id]);

	}
	public function Fetch_Application_Details($id)
	{
		$sql = $this->db->select()
		                 ->where('Reg_Id',$id)
		                 ->get('tbl_registration');

		return $sql->row();
	}
	public function Edit_Articles($id,$array)
	{
		return $this->db->where('id',$id) 
		            ->update('articles',$array);

	}
}