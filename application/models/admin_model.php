<?php
/**
* Admin Model
*/
class Admin_model extends MY_Model{
	public function __blog_list(){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog')
	 				->order_by('blog_id','desc')
	 				->get(); 
		$allBlog = $q->result_array();  
		return $allBlog;
	}

	public function category($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_categories') 
	 				->where('cat_id',$data)
	 				->get(); 
		$cat_name = $q->row();  
		return $cat_name; 
	}

	public function Author($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_users') 
	 				->where('user_id',$data)
	 				->get(); 
		$user_name = $q->row()->user_name;  
		return $user_name; 
	}
	public function allCat(){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_categories')  
	 				->get(); 
		$result = $q->result();  
		return $result; 
	}

	public function __add_blog($data){
		return $this->db->insert('tbl_blog',$data);
	}

	public function __edit_blog_data($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog') 
	 				->where('blog_id',$data)
	 				->get(); 
		$result = $q->row();  
		return $result; 
	}

	public function __img($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog') 
	 				->where('blog_id',$data)
	 				->get(); 
		$blog_img = $q->row();  
		return $blog_img; 
	}
	public function __img_page($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_page') 
	 				->where('page_id',$data)
	 				->get(); 
		$blog_img = $q->row();  
		return $blog_img; 
	}

	public function __update_blog($data,$blog_id){
		return $this->db->update('tbl_blog',$data,['blog_id' => $blog_id]);
	}

	public function __delete_blog($blog_id){
		return $this->db->delete('tbl_blog', ['blog_id' => $blog_id]);
	}

	public function __add_cat($cat){
		return $this->db->insert('tbl_categories',['cat_name'=>$cat]);
	}
	public function __edit_cat($cat,$cat_id){
		return $this->db->update('tbl_categories',['cat_name'=>$cat],['cat_id' => $cat_id]);
	}
	public function __delete_cat($cat_id){
		return $this->db->delete('tbl_categories', ['cat_id' => $cat_id]);
	}

	public function __allPage(){
		$q =  $this->db->get('tbl_page');
		return $q->result();
	}
	public function __page($page_id){
		$q = $this->db
					->where('page_id',$page_id)
					->get('tbl_page');
		return $q->row();
	}

	public function __add_page($data){
		return $this->db->insert('tbl_page',$data);
	}

	public function __update_page($data,$page_id){
		return $this->db->update('tbl_page',$data,['page_id' => $page_id]);
	}
	public function __delete_page($page_id){
		return $this->db->delete('tbl_page', ['page_id' => $page_id]);
	}

	public function __cover_query(){
		$q = $this->db
					->where('cover_id',1)
					->get('tbl_pages_cover');
		return $q->row();	
	}
	public function __update_cover($data){
		return $this->db->update('tbl_pages_cover',$data,['cover_id' => 1]);
	}
	public function __copyright_query(){
		$q = $this->db
					->where('footer_id',1)
					->get('tbl_footer');
		return $q->row();	
	}
	public function __update_copyright($data){
		return $this->db->update('tbl_footer',$data,['footer_id' => 1]);
	}

	public function __allsocial(){
		$q =  $this->db->get('tbl_social');
		return $q->result();
	}
	public function __social_query($data){
		$q = $this->db
					->where('social_id',$data)
					->get('tbl_social');
		return $q->row();	
	}
	public function __update_social($data,$id){
		return $this->db->update('tbl_social',$data,['social_id' => $id]);
	}
	public function __delete_social($social_id){
		return $this->db->delete('tbl_social', ['social_id' => $social_id]);
	}
	public function __add_social($data){
		return $this->db->insert('tbl_social',$data);
	}

	public function __logo_query(){
		$q = $this->db
					->where('logo_id',1)
					->get('tbl_logo');
		return $q->row();	
	}

	public function __update_logo($data){
		return $this->db->update('tbl_logo',$data,['logo_id' => 1]);
	}

	public function __about_content_query(){
		$q = $this->db
						->where('about_id',1)
						->get('tbl_about_content');
		return $q->row();
	}

	public function __update_aboutcontent($data){
		return $this->db->update('tbl_about_content',$data,['about_id' => 1]);
	}
	public function __progress_query(){
		$q = $this->db->select('*')
						->from('tbl_progress')
						->order_by('progress_id','desc')
						->get();
		return $q->result();
	}

	public function __add_progress($data){
		return $this->db->insert('tbl_progress',$data);
	}
	public function __about_progress_query($id){
		$q = $this->db->where('progress_id',$id)
						->get('tbl_progress');
		return $q->row();
	}
	public function __update_progress($data,$id){
		return $this->db->update('tbl_progress',$data,['progress_id' => $id]);
	}
	public function __delete_progress($id){
		return $this->db->delete('tbl_progress', ['progress_id' => $id]);
	}
	public function __clients_query(){
		$q = $this->db->select('*')
						->from('tbl_clients')
						->order_by('client_id','desc')
						->get();
		return $q->result();
	}
	public function __add_client($data){
		return $this->db->insert('tbl_clients',$data);
	}
	public function __img_client($data){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_clients') 
	 				->where('client_id',$data)
	 				->get(); 
		$blog_img = $q->row();  
		return $blog_img; 
	}

	public function __update_client($data,$id){
		return $this->db->update('tbl_clients',$data,['client_id' => $id]);
	}
	public function __delete_client($id){
		return $this->db->delete('tbl_clients', ['client_id' => $id]);
	}

	public function __user_query($id){
		$q = $this->db->where('user_id',$id)
						->get('tbl_users');
		return $q->row();
	}

	public function __email_check($id){
		$q = $this->db->where('user_id',$id)
						->get('tbl_users');
		return $q->row();
	}

	public function __post_email_check($email){
		$q = $this->db->where('user_email',$email)
						->get('tbl_users');
		return $q->num_rows();
	}
	public function __pass_check($id){
		$q = $this->db->where('user_id',$id)
						->get('tbl_users');
		return $q->row();
	}

	public function __update_userProfile($data,$id){
		return $this->db->update('tbl_users',$data,['user_id' => $id]);
	}
	public function __update_Password($data,$id){
		return $this->db->update('tbl_users',['user_pass'=>$data],['user_id' => $id]);
	}

	public function __msg_query(){
		$q = $this->db->where('msg_status',0)
						->order_by('msg_id','desc')
						->get('tbl_msg');
		return $q->result();
	}
	public function __msg_query_seen(){
		$q = $this->db->where('msg_status',1)
						->order_by('msg_id','desc')
						->get('tbl_msg');
		return $q->result();
	}

	public function __single_msg_query($id){
		$q = $this->db->where('msg_id',$id)
						->get('tbl_msg');
		return $q->row();
	}

	public function __update_msg($id){
		return $this->db->update('tbl_msg',['msg_status'=>1],['msg_id' => $id]);
	}

	public function __delete_msg($id){
		return $this->db->delete('tbl_msg', ['msg_id' => $id]);
	}
	public function __number_of_msg(){
		$q = $this->db->where('msg_status',0)
						->order_by('msg_id','desc')
						->get('tbl_msg');
		return $q->num_rows();
	}
}