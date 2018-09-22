<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod 
*/
class Contact_us extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$data['all_services_key'] = $this->website->getServicesBylimitedsix();
		$this->load->view('contact_us_view',$data);
	}
}