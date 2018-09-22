<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Website extends CI_Model
{
	public function getServicesBylimitedsix()
	{
		$sql_str = "SELECT * FROM services ORDER BY RAND() LIMIT 6";
		return $this->db->query($sql_str)->result();
	}
	public function getServicesDetailsById($services_id)
	{
		$sql_str = "SELECT * FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllServices()
	{
		$sql_str = "SELECT * FROM services ORDER BY RAND()";
		return $this->db->query($sql_str)->result();
	}
	public function getHotelsDataLimitedBySix()
	{
		$sql_str = "SELECT * FROM hotels ORDER BY RAND() LIMIT 6";
		return $this->db->query($sql_str)->result();	
	}
}