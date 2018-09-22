<?php 
/**
 * @author Jay rathod
 */
class Friend
{
	public function base64url_encode($data) { 
	  	return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 
	public function base64url_decode($data) { 
	  	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	} 
	public function profileImageUploadConfig()
	{
		$config['upload_path'] = './post_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
	public function servicesImageUploadConfig()
	{
		$config['upload_path'] = './services_image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
	public function hotelsImageUploadConfig()
	{
		$config['upload_path'] = './hotels_images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['encrypt_name'] = TRUE ;
		return $config ;
	}
}
