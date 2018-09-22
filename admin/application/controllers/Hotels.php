<?php 
/**
* @author Jay Rathos
*/
class Hotels extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin');
	}
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('new_hotels', 'New Hotels', 'required');
			$this->form_validation->set_rules('description', 'description', 'required');
			$this->load->library('upload', $this->friend->hotelsImageUploadConfig());
			if ($this->form_validation->run() && $this->upload->do_upload('hotels_images')) {
				$this->admin->setNewHotel($this->input->post(),$this->upload->data('file_name'));
				$this->session->set_flashdata('success_hotels','Hotel Created Successfully');
				redirect('hotels');
			}
		}
		$data['all_hotels_key'] = $this->admin->getAllHotels();
		$this->load->view('hotels_form',$data);
	}
	public function delete_hotels()
	{
		$this->admin->deleteHotels($this->friend->base64url_decode($this->uri->segment(3)));
		$this->session->set_flashdata('success_hotels','Deleted Hotel Successfully..!!');
		redirect('hotels');
	}
}