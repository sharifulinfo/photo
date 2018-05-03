<?php
/**
* Users Model
*/
class Login_model extends MY_Model{
	public function _login_model_($email,$pass){
		$pass = md5($pass);
		$q = $this->db->where(['user_email' => $email, 'user_pass' => $pass])
			->get('tbl_users'); 

		if( $q->num_rows() ){
			$rr = $q->row(); 
			return $rr;
			 
		}else{
			return false;
		}
	}
}