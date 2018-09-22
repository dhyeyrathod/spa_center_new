<?php 
/**
* @author Jay Rathod
*/
class About_us extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');	
	}
	public function index()
	{
		$data['all_services_key'] = $this->website->getServicesBylimitedsix();
		$this->load->view('about_us_view',$data);
	}
}