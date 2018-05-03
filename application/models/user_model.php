<?php
/**
* Users Model
*/
class User_model extends MY_Model{
	public $output='';
	
	public function m_blog_list( $limit, $offset ){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog')
	 				->limit($limit,$offset)
	 				->order_by('blog_id','desc')
	 				->get(); 
		$allBlog = $q->result();  
		return $allBlog;
	}
	public function m_side_blog_list(){
		$q = $this->db->select('*')
						->from('tbl_blog')
						->order_by('blog_id','desc')
						->get();
		return $sidebarData = $q->result(); 					
	}
	public function m_category_list(){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_categories') 
	 				->get();
		$allCat = $q->result();  
		return $allCat;
	}
	public function m_count_cat($cat_id){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog')
	 				->like('cat_id',$cat_id)
	 				->get();
	 	$num = $q->num_rows();
	 	return $num;
	}

	public function m_blog_single($article_id){
	 	$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog')
	 				->where('blog_id',$article_id)
	 				->get();
	 	$result = $q->row();
	 	return $result;
	 }

	public function m_count_rows(){
		$q = $this->db->select('*')
						->from('tbl_blog')
						->get();
		return $result  = $q->num_rows();
	}

	public function m_count_rows_search($content){
		$q = $this->db->select('*')
						->from('tbl_blog')
						->like('blog_title',$content)
						->get();
		return $result  = $q->num_rows();
	}

	public function m_search_result($query,$limit,$offset){
	 	$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog') 
	 				->like(['blog_title'=>$query]) 
	 				->limit($limit,$offset)
	 				->get();
	 	$result = $q->result();
	 	return $result;
	}

	public function m_search_cat($cat_id,$limit,$offset){
	 	$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog') 
	 				->like('cat_id',$cat_id) 
	 				->limit($limit,$offset)
	 				->get();
	 	$result = $q->result(); 
	 	return $result;
	}
	public function m_count_rows_cat($cat_id){
		$q = $this->db->select('*')
						->from('tbl_blog')
						->like('cat_id',$cat_id)
						->get();
		return $result  = $q->num_rows(); 
	}

	public function _menu_query(){
		$q = $this->db->get('tbl_menus');
		return $q->result_array();
	}

	public function _footer_query(){
		return $this->db->get('tbl_footer')
						->result_array();
	}
	public function _social_query(){
		return $this->db->get('tbl_social')
						->result_array();
	}
	public function _clients_query(){
		$q = $this->db->select('*')
						->from('tbl_clients')
						->order_by('client_id','desc')
						->get();
		return $q->result();
	}
	public function _progress_query(){
		$q = $this->db->select('*')
						->from('tbl_progress')
						->order_by('progress_id','desc')
						->get();
		return $q->result();
	}
	public function _about_content_query(){
		$q = $this->db
						->where('about_id',1)
						->get('tbl_about_content');
		return $q->row();
	}

	public function _author_query($user_id){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_users')
	 				->where('user_id',$user_id)
	 				->get();
	 	$result = $q->result_array();
	 	return $result;
	}
	public function _comments_query($blog_id){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_comments')
	 				->where('comment_parent_id',0)
	 				->where('comment_blog_id',$blog_id)
	 				->get();
	 	$result = $q->result_array(); 
	 	$this->output = '';
			foreach($result as $row)
			{
			if(!$this->session->userdata('user_id')){ 
				$ff = '<div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label>
                                '.form_input(['name' => 'comment_name', 'class' => 'form-control', 'pleaceholder' => 'your name', 'require' => '1','type' => 'text']).' 
                              </div>
                              '.form_hidden(['blog_id' => $row["comment_blog_id"] ]).' 
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label>
                                '.form_input(['name' => 'comment_email', 'class' => 'form-control', 'pleaceholder' => 'your email','type' => 'text']).' 
                              </div>
                            </div>';
			}else{
				$ff = form_hidden(['comment_name'=>$this->session->userdata('user_name')]).form_hidden(['comment_email'=>$this->session->userdata('user_email')]).form_hidden(['blog_id' => $row["comment_blog_id"] ]);
			}
			 $this->output .= '
			   <div class="col-xs-12 col-sm-12 block2"> 
                <div class="comment">
                  <h4>'.$row["comment_name"].'</h4> 
                  <a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  <p class="time">'.date("d M, h:i A",strtotime($row["comment_time"])).'</p> 
                  <hr>
                  <p>'.$row["comment_msg"].'</p> 
                 
                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                  	 <hr/>
                      <div id="form">
                          '.form_open('users/comments/'.$row["comment_id"],['class'=>'form-horizontal']).'
                            
                            '.$ff.'

                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label> 
                                '.form_textarea(['name'=>'comment_msg','class'=>'form-control']).'
                                 
                                '.form_submit(array('name'=>'submit', 'value'=>'Add Comment','class'=>'btn btn-primary')).'
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>   
			   ';
			 $this->output = $this->_comments_replay_query($blog_id,$row["comment_id"]);
			}
	 	return $this->output;
	}

	public function _add_contact_msg($data){
		$name = $data['fname'].' '.$data['lname'];
		return $this->db->insert('tbl_msg',[
					'msg_user'		=> $name,
					'msg_user_mail'	=> $data['email'],
					'msg_sub'		=> $data['subject'],
					'msg_content'	=> $data['msg'],
					'msg_time'		=> $data['msg_time'],
				]);
	}

	public function _comments_replay_query($blog_id,$parent_id = 0,$marginleft = 0){
		//echo $parent_id;
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_comments')
	 				->where('comment_parent_id',$parent_id)
	 				->where('comment_blog_id',$blog_id)
	 				->get();
	 	$num = $q->num_rows(); 
	 	$result = $q->result_array(); 
	 	if($parent_id == 0)
		 {
		  $marginleft = 0;
		 }
		 else
		 {
		  $marginleft = $marginleft + 48;
		 }
		 if($num > 0)
			 {
			  foreach($result as $row)
			  {
			   if(!$this->session->userdata('user_id')){ 
				$ff = '<div class="form-group">
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Name</label>
                                '.form_input(['name' => 'comment_name', 'class' => 'form-control', 'pleaceholder' => 'your name', 'require' => '1','type' => 'text']).' 
                              </div>
                              '.form_hidden(['blog_id' => $row["comment_blog_id"] ]).' 
                              <div class="col-xs-12 col-sm-6">
                                <label class="label-control">Email</label>
                                '.form_input(['name' => 'comment_email', 'class' => 'form-control', 'pleaceholder' => 'your email','type' => 'text']).' 
                              </div>
                            </div>';
			}else{
				$ff = form_hidden(['comment_name'=>$this->session->userdata('user_name')]).form_hidden(['comment_email'=>$this->session->userdata('user_email')]).form_hidden(['blog_id' => $row["comment_blog_id"] ]);
			}
			 $this->output .= '
			   <div class="col-xs-12 col-sm-12 block2"> 
                <div class="comment" style = "margin-left:'.$marginleft.'px">
                  <h4>'.$row["comment_name"].'</h4> 
                  <a href="#collapse'.$row["comment_id"].'" data-toggle="collapse" class="btn pull-right">Replay</a>
                  <p class="time">'.date("d M, h:i A",strtotime($row["comment_time"])).'</p> 
                  <hr>
                  <p>'.$row["comment_msg"].'</p>

                  <div id="collapse'.$row["comment_id"].'" class="panel-collapse collapse"> 
                  	<hr/> 
                      <div id="form">
                          '.form_open('users/comments/'.$row["comment_id"],['class'=>'form-horizontal']).'
                            
                            '.$ff.'

                            <div class="form-group">
                              <div class="col-xs-12">
                                  <label class="label-control">Type Your Comment</label>
                                '.form_textarea(['name'=>'comment_msg','class'=>'form-control']).'
                                 
                                '.form_submit(array('name'=>'submit', 'value'=>'Add Comment','class'=>'btn btn-primary')).'
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                </div>   
               </div>   
			   ';
			   $this->output = $this->_comments_replay_query($blog_id, $row["comment_id"], $marginleft);
			  }
			 }
			 return $this->output;
			} 
	

	public function comments_row_count($id){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_comments')
	 				->where('comment_parent_id',$id)
	 				->get();
	 	$result = $q->result();
	 	return $result;
	}

	public function _comments_insert_child($parint_id,$data){
		$q = $this->db->insert('tbl_comments',[
					'comment_name'		=> $data['comment_name'],
					'comment_email'		=> $data['comment_email'], 
					'comment_parent_id'	=> $parint_id, 
					'comment_blog_id'	=> $data['blog_id'],
					'comment_msg'		=> $data['comment_msg'],
				]);

	}

	public function _category_name($cat_id){
		$q = $this->db->select('cat_name')
						->from('tbl_categories')
						->where('cat_id',$cat_id)
						->get();
			$result = $q->result_array();
			return $result[0]['cat_name'];
	}

	public function _count_comments($blog_id){
		$q = $this->db->select('*')
						->from('tbl_comments')
						->like('comment_blog_id',$blog_id)
						->get();
		return $result  = $q->num_rows(); 
	}

	public function _index_blog_list($limit){
		$q = $this->db 
	 				->select('*')
	 				->from('tbl_blog')
	 				->order_by('blog_id','desc')
	 				->limit($limit) 
	 				->get(); 
		$allBlog = $q->result();  
		return $allBlog;
	}
	public function _custom_menus(){
		$q = $this->db->get('tbl_page');
		return $q->result();
	}
	public function _page($page_id){
		$q = $this->db
					->where('page_id',$page_id)
					->get('tbl_page');
		return $q->row();
	}
	public function _cover_query(){
		$q = $this->db
					->where('cover_id',1)
					->get('tbl_pages_cover');
		return $q->row();	
	}

	public function _logo_query(){
		$q = $this->db
					->where('logo_id',1)
					->get('tbl_logo');
		return $q->row();	
	}

	
	
}