<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/welcome.php/welcome
	 *	- or -  
	 * 		http://example.com/welcome.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//        if ($this->agent->is_mobile()){
//            $this->load->view('m_welcome_message');
//        } else {
//
//        }



        $data = array(
            "view"=>'welcome'
        );
        $this->load->view('layout',$data);
	}
	public function test()
	{
		$this->load->view('welcome_message');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */