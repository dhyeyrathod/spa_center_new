<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$data['all_services_key'] = $this->website->getServicesBylimitedsix();
		$data['all_hotels_key'] = $this->website->getHotelsDataLimitedBySix();
		$this->load->view('home_view',$data);
	}
	public function hotel_details()
	{
		$data['all_services_key'] = $this->website->getServicesBylimitedsix();
		$this->load->view('hotel_details_view',$data);
	}
}