<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->model('Jobs');
		
		$results = $this->Jobs->get_all_jobs();
		
		$data['jobs'] = $results;
		
		$this->load->view('welcome_message',$data);
	}
	public function get_a_job(){
		
		$this->load->helper('form');
		$this->load->model('Jobs');
		$this->load->helper('xml');
		
		$results = $this->Jobs->get_oldest_job();
		
		$dom = xml_dom();
		$job = xml_add_child($dom, 'job');
		 
		xml_add_child($job, 'description', $results[0]->description);
		xml_add_child($job, 'created', $results[0]->timestamp);		
		xml_add_child($job, 'jobid', $results[0]->jobid);
				
		xml_print($dom);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */