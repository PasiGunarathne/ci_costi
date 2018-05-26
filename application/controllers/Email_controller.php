 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Email_controller extends CI_controller{
	
	// function __construct()
	// {
	// 	parent:: __construct();
	// 	$this->load->library('session');
	// 	$this->load->helper('form');
	// }

	public function index()
	{
		$this->load->helper('form');
		// $this->load->view('email_form');
		$this->load->view('welcome_message');

	}

	public function send_email()
	{
		$from_email="pasigunarathne@gmail.com";
		$to_email="pasigunarathne@gmail.com";

		//load email library
		$this->load->library('email');
		$this->email->from($from_email, 'Pasindu');
		$this->email->to($to_email);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class');

	  
		if ($this->email->send()) {

			echo "Check your emails, there you can change your password";
			
			?><!-- <script type="text/javascript">
				alert("Check your emails, there you can change your password");
			</script> -->

			<?php
			// index();
			// $this->load->helper('form');
			// $this->load->view('welcome_message');
		}
		else {
			// $this->load->view('email_form');
			echo "fail";
			// echo $from_email;
			echo $this->email->print_debugger();
		}

	}


}

?>