<?php


class UserModel extends CI_MODEL
{
	public function __construct()
	{
		Parent::__construct();
		
	}

	public function register($firstname,$lastname,$email,$password)
	{
		$newFirstname=$firstname;
		$newLastname=$lastname;
		$newEmail=$email;
		$newPassword=sha1($password);

		$data=array(
			"firstname"=>$newFirstname,
			"lastname"=>$newLastname,
			"email"=>$newEmail,
			"password"=>$newPassword,

			);

		

		$inserUser=$this->db->insert("users",$data);
		if($inserUser==true)
		{
			echo "<script>alert('Registered Successfully')</script>";
			return redirect('home');
		}
		else
		{
			echo "<script>alert('Some Error Occured');</script>";
		}

	}
}