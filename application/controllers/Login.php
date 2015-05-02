<?php

class Login extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file'));
		$this->load->model('upload_model');
		$this->load->library('form_validation','session');

	}



	public function index()
	{
		      // $this->load->view('login'); // loading default view.

		if (isset($_GET['code']) AND !empty($_GET['code'])) {
			$code = $_GET['code'];
      // parsing the result to getting access token.
			parse_str($this->get_fb_contents("https://graph.facebook.com/oauth/access_token?client_id=815403985162109&redirect_uri=" . urlencode(base_url('login')) ."&client_secret=732fe62bd2051df8c9852d301ca665b9&code=" . urlencode($code)));
			redirect('login?access_token='.$access_token);
		}
		if(!empty($_GET['access_token'])) {
      // getting all user info using access token.
			$fbuser_info = json_decode($this->get_fb_contents("https://graph.facebook.com/me?access_token=".$_GET['access_token']), true);
      // you can get all user info from print_r($fbuser_info);
			if(!empty($fbuser_info['email'])) {

				$_SESSION['first_name']=$fbuser_info['first_name'];
				$_SESSION['last_name']=$fbuser_info['last_name'];
				$_SESSION['email']=$fbuser_info['email'];



		$this->load->view('success',$_SESSION); // loading default view.



// echo $fbuser_info['first_name'];
				// echo $fbuser_info['last_name'];
				// echo $fbuser_info['email'];
				// echo $fbuser_info['birthday'];

				// echo $fbuser_info['gender'];
				// echo $fbuser_info['location']['name'];
				// echo $fbuser_info['hometown']['name'];
    // do your stuff.
    //save the data in db save session and redirect.
	}
	else{
		$this->session->set_flashdata('message', 'Error while facebook user information.');
		redirect(base_url());
	}
}
if ($this->form_validation->run() == FALSE) {
		$this->load->view('login'); // loading default view.
	}



}


public function logout()
{
	unset($_GET['code']);

	echo "YOU ARE SUCCESSFULLY LOGGED OUT !!";

	// session_destroy();


	// Redirect to baseurl
	redirect(base_url('login'));
}

/**
  * calling facebook api using curl and return response.
  */


function get_fb_contents($url) {
	$curl = curl_init();
	curl_setopt( $curl, CURLOPT_URL, $url );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
	$response = curl_exec( $curl );
	curl_close( $curl );
	return $response;
}

}

?>