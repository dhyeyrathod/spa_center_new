<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay Rathod
*/
class Services extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$data['all_services_key'] = $this->website->getServicesBylimitedsix();
		$this->load->view('services_view',$data);
	}
	public function details()
	{
		$services_id = $this->friend->base64url_decode($this->uri->segment(3));
		$data['servies_details_key'] = $this->website->getServicesDetailsById($services_id);
		$data['all_services_key'] = $this->website->getAllServices();
		$this->load->view('services_details_view',$data);
	}
}