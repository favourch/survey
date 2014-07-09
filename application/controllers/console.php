<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Console extends CI_Controller {
	#add
	function __construct()
	{
		parent::__construct();

		// used in the view
		$this->load->helper('url');
        $this->load->database();
        $this->load->model('console_model');
	}

	public function index()
	{
        $data['all_visit'] = $this->console_model->all_visit();
        $data['valid_visit'] = $this->console_model->valid_visit();

        $result = $this->console_model->query_valid_visit();
        $data['valid_uid'] = $result['valid_uid'];
        $result = $this->console_model->query_all_visit();
        $data['all_uid'] = $result['all_uid'];

		$this->load->view("console", $data);
	}
}

/* End of file welcome_2.php */
/* Location: ./application/controllers/welcome_2.php */