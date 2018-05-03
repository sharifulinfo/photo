<?php

class Test{
	public function some(){
		$ci = & get_instance();
		$ci->load->helper('abc');
		echo 'Test Libraries';
	}
}