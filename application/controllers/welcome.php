<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('application/libraries/pusher.php');

class Welcome extends CI_Controller {

    public $pusher;

    public function __construct()
    {
        parent::__construct();
        $this->pusher = new Pusher("504924d8912fe11ef3dd", "b34c83a7f188e8bf32b2", "29501");
    }

	public function index()
	{
        $data = array(
            "view"=>'welcome'
        );
        $this->load->view('layout',$data);
	}
	public function increment_counter()
	{
        $number = read_file('number.txt');
        $number++;

        if (!write_file('number.txt', $number)) {
            echo 'Unable to write the file';
        } else {
            $this->pusher->trigger('tedhead', 'riff', array('message' => 'riff incremented'));
            $number = read_file('number.txt');
            echo $number;
        }
	}

    public function get_counter()
    {
        echo read_file('number.txt');

    }
}