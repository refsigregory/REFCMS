<?php
defined('BASEPATH') OR exit('Access Denied!');

class Starter extends CI_Controller {

	public function index()
	{
                $data['page'] = 'starter';
				$data['name'] = $this->config->item("site_name");
				$this->load->view('Loader', $data);
	}
}
