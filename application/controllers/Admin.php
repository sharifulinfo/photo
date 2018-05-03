<?php
/**
* Admin Class
*/
class Admin extends MY_Controller{ 

	public function __construct(){
		parent::__construct();
		 if(! $this->session->userdata('user_id')){
			redirect('login');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('admin_model','amodel');
		$this->admin_header();
		$this->admin_sidebar();
	}
	public function admin_header(){
		$data['numMsg'] = $this->amodel->__number_of_msg();  
		$this->load->view('photo-master/Admin/inc/ad_header',$data);
	}
	public function admin_footer(){
		$this->load->view('photo-master/Admin/inc/ad_footer');
	}

	public function dashboard(){
		$this->load->view('photo-master/Admin/index');
		$this->admin_footer(); 
	}
	public function Blog(){ 
		$data['AllBlog'] = $this->amodel->__blog_list();
		$data['object'] = $this->amodel;
		$this->load->view('photo-master/Admin/postlist',$data);
		$this->admin_footer(); 
	}

	public function newBlog($upload_error=null){
		$data['cats'] = $this->amodel->allCat();
		$data['error'] = $upload_error;
		$this->load->view('photo-master/Admin/addPost',$data);
		$this->admin_footer();
	}

	public function addBlog(){
		$cc = null;
		$config = [
			'upload_path'		=> './assets/images/blog',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');

		if( $this->form_validation->run('addblog')){
			if( $this->upload->do_upload('blog_img') ){
				$data = $this->input->post();
				$image = $this->upload->data();
				$data['blog_img'] = base_url('/assets/images/blog/'.$image['file_name']);
				unset($data['submit']);
				$cat = $data['cats'];  
				 	$cc .= implode(',', $cat);
				 $data['cat_id'] = $cc;
				 unset($data['cats']);
				 $this->_flashandredirect(
		 			$this->amodel->__add_blog($data),
		 				'Article added successfully!...',
		 				'Article not inserted!!...'
	 			); 
			}else{
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->newBlog($data);
			}
		}else{ 
			$this->newBlog();

		}
	}

	public function _flashandredirect($successful,$successMassage,$failerMassage,$action){
	 	if( $successful ){
				$this->session->set_flashdata('feedback_article', $successMassage);
				$this->session->set_flashdata('feedback_article_class','alert alert-dismissible alert-success');
			}else{
				$this->session->set_flashdata('feedback_article', $failerMassage);
				$this->session->set_flashdata('feedback_article_class','alert alert-dismissible alert-secondary');
			}
		 	return redirect($action);
	 }

	public function editBlog($blog_id,$upload_error=null){
		$data['error'] = $upload_error;
		$data['blogData'] = $this->amodel->__edit_blog_data($blog_id);
		$data['cats'] = $this->amodel->allCat();
		$this->load->view('photo-master/Admin/EditPost',$data);
		$this->admin_footer();
	}

	public function updateBlog($blog_id){
		$cc = null;
		$config = [
			'upload_path'		=> './assets/images/blog',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addblog')){ 
			if(!empty($_FILES['blog_img']['name'])){
				if( $this->upload->do_upload('blog_img') ){
					$data = $this->input->post();
					$image = $this->upload->data(); 
					$data['blog_img'] = base_url('/assets/images/blog/'.$image['file_name']);
					unset($data['submit']);
					$cat = $data['cats'];  
					 $cc .= implode(',', $cat);
					 $data['cat_id'] = $cc;
					 unset($data['cats']); 
					 $gg = $this->amodel->__img($blog_id)->blog_img;
					 $c = explode('photo/', $gg); 	 
					 unlink($c[1]); 
					 $this->_flashandredirect(
			 			$this->amodel->__update_blog($data,$blog_id),
			 				'Blog updated successfully!...',
			 				'Blog not updated!!...',
			 				'Admin/Blog'
		 			); 
				}else{
					$data['error'] = array('error' => $this->upload->display_errors());
					$this->editBlog($blog_id,$data);
				}
			}else{
				$data = $this->input->post();
					$image = $this->upload->data(); 

					$data['blog_img'] = $this->amodel->__img($blog_id)->blog_img;
					unset($data['submit']);
					$cat = $data['cats'];  
					 $cc .= implode(',', $cat);
					 $data['cat_id'] = $cc;
					 unset($data['cats']); 

					 $this->_flashandredirect(
			 			$this->amodel->__update_blog($data,$blog_id),
			 				'Blog updated successfully!...',
			 				'Blog not updated!!...',
			 				'Admin/Blog'
		 			);
			}

		}else{ 
			$this->editBlog($blog_id);

		}
	}

	public function deleteBlog($blog_id){
		$this->_flashandredirect(
			$this->amodel->__delete_blog($blog_id),
				'Blog Deleted successfully!...',
				'Blog not Deleted!!...',
				'Admin/Blog'
		);
	}

	public function viewBlog($blog_id){ 
		$data['blogData'] = $this->amodel->__edit_blog_data($blog_id);
		$data['object'] = $this->amodel;
		$this->load->view('photo-master/Admin/ViewPost',$data);
		$this->admin_footer();
	}

	public function categories(){
		$data['cats'] = $this->amodel->allCat();
		$this->load->view('photo-master/Admin/catlist',$data);
		$this->admin_footer();
	}

	public function newCategory(){ 
		$this->load->view('photo-master/Admin/addcat');
		$this->admin_footer();
	}
	public function addCategory(){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addCat')){ 
			$data = $this->input->post();
			$this->_flashandredirect(
			$this->amodel->__add_cat($data['cat_name']),
				'Category Added Successfully!...',
				'Something is not right!!...',
				'Admin/categories'
		); 
		}else{
			$this->newCategory();
			//echo validation_errors();
		}
	}
	public function editCategory($cat_id){
		$data['cats'] =  $this->amodel->category($cat_id); 
		$this->load->view('photo-master/Admin/EditCat',$data);
		$this->admin_footer();
	}

	public function updateCategory($cat_id){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addCat')){ 
			$data = $this->input->post(); 
			$this->_flashandredirect(
			$this->amodel->__edit_cat($data['cat_name'],$cat_id),
				'Category updated Successfully!...',
				'Something is not right!!...',
				'Admin/categories'
		); 
		}else{
			$this->newCategory();
			//echo validation_errors();
		}
	}

	public function deleteCategory($cat_id){
		$this->_flashandredirect(
			$this->amodel->__delete_cat($cat_id),
				'Category Deleted successfully!...',
				'Category not Deleted!!...',
				'Admin/categories'
		);
	}

	public function admin_sidebar(){
		$data['pages'] = $this->amodel->__allPage();
		$this->load->view('photo-master/Admin/inc/ad_sidebar',$data);
	}

	public function editPage($page_id,$upload_error=null){
		$data['error'] = $upload_error;
		$data['page'] =  $this->amodel->__page($page_id); 
		$this->load->view('photo-master/Admin/EditPage',$data);
		$this->admin_footer();
	}
	public function updatePage($page_id){ 
		$config = [
			'upload_path'		=> './assets/images/',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addpage')){ 
			if(!empty($_FILES['page_img']['name'])){
				if( $this->upload->do_upload('page_img') ){
					$data = $this->input->post();
					$image = $this->upload->data(); 
					$data['page_img'] = base_url('/assets/images/'.$image['file_name']);
					unset($data['submit']);  
					 $gg = $this->amodel->__img_page($page_id)->page_img;
					 $c = explode('photo/', $gg);	 
					 unlink($c[1]); 
					 $this->_flashandredirect(
			 			$this->amodel->__update_page($data,$page_id),
			 				'Page updated successfully!...',
			 				'Page not updated!!...',
			 				"Admin/editPage/{$page_id}"
		 			); 
				}else{
					$data['error'] = array('error' => $this->upload->display_errors());
					$this->editPage($page_id,$data);
				}
			}else{
				$data = $this->input->post();
					$image = $this->upload->data(); 

					$data['page_img'] = $this->amodel->__img_page($page_id)->page_img;
					unset($data['submit']); 

					 $this->_flashandredirect(
			 			$this->amodel->__update_page($data,$page_id),
			 				'Page updated successfully!...',
			 				'Page not updated!!...',
			 				"Admin/editPage/{$page_id}"
		 			);
			}

		}else{ 
			$this->editPage($page_id);

		}
	}


	public function newPage($upload_error=null){  
		$data['error'] = $upload_error;
		$this->load->view('photo-master/Admin/addPage',$data);
		$this->admin_footer();
	}

	public function addPage(){ 
		$config = [
			'upload_path'		=> './assets/images',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>'); 
		if( $this->form_validation->run('addpage')){
		// 	print_r($_FILES['page_img']);
		// exit();
			if( $this->upload->do_upload('page_img') ){
				$data = $this->input->post();
				$image = $this->upload->data();
				$data['page_img'] = base_url('/assets/images/'.$image['file_name']);
				unset($data['submit']);  

				 $this->_flashandredirect(
		 			$this->amodel->__add_page($data),
		 				'Page added successfully!...',
		 				'Page not inserted!!...',
		 				'Admin/addPage'
	 			); 
			}else{
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->newPage($data);
			}
		}else{ 
			$this->newPage();

		}
	}

	public function deletePage($page_id){
		$this->_flashandredirect(
 			$this->amodel->__delete_page($page_id),
 				'Page deleted successfully!...',
 				'Page not deleted!!...',
 				'Admin/dashboard'
			); 
	}

	public function editCover(){
		$data['cover'] =  $this->amodel->__cover_query(); 
		$this->load->view('photo-master/Admin/EditCover',$data);
		$this->admin_footer();
	}

	public function updateCover(){
		$config = [
			'upload_path'		=> './assets/images/page_img',
			'allowed_types'		=> 'jpg|jpeg|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addcover')){ 
			if(!empty($_FILES['index_pic']['name']) && !empty($_FILES['about_pic']['name']) && !empty($_FILES['contact_pic']['name'])){
				$this->upload->do_upload('index_pic');
				$e[] = $this->upload->data(); 
				$this->upload->do_upload('about_pic');
				$e[] = $this->upload->data(); 
				$this->upload->do_upload('contact_pic');
				$e[] = $this->upload->data(); 
				 
				if( $this->upload->do_upload('index_pic') && $this->upload->do_upload('about_pic') && $this->upload->do_upload('contact_pic') ){
					$data = $this->input->post(); 
					$data['index_pic'] = base_url('/assets/images/page_img/'.$e[0]['file_name']);
					$data['about_pic'] = base_url('/assets/images/page_img/'.$e[1]['file_name']);
					$data['contact_pic'] = base_url('/assets/images/page_img/'.$e[2]['file_name']);
					unset($data['submit']);

					 $gg = $this->amodel->__cover_query()->index_pic;
					 $c = explode('photo/', $gg);	 
					 unlink($c[1]);
					 $gg = $this->amodel->__cover_query()->about_pic;
					 $c = explode('photo/', $gg);	 
					 unlink($c[1]); 
					 $gg = $this->amodel->__cover_query()->contact_pic;
					 $c = explode('photo/', $gg);	 
					 unlink($c[1]);  
					 $this->_flashandredirect(
			 			$this->amodel->__update_cover($data),
			 				'Page updated successfully!...',
			 				'Page not updated!!...',
			 				"Admin/editCover/"
		 			); 
				}else{
					$data['error'] = array('error' => $this->upload->display_errors());
					$this->editCover();
				}
			}else{
				$data = $this->input->post();
					$image = $this->upload->data(); 

					$data['index_pic'] = $this->amodel->__cover_query()->index_pic;
					$data['about_pic'] = $this->amodel->__cover_query()->about_pic;
					$data['contact_pic'] = $this->amodel->__cover_query()->contact_pic;
					unset($data['submit']);
					 $this->_flashandredirect(
			 			$this->amodel->__update_cover($data),
			 				'Page updated successfully!...',
			 				'Page not updated!!...',
			 				"Admin/editCover/"
		 			);
			}

		}else{ 
			$this->editCover();

		}
	}

	public function copyRight(){
		$data['copytext'] = $this->amodel->__copyright_query();
		$this->load->view('photo-master/Admin/copyright',$data);
		$this->admin_footer();
	}

	public function EditCopyright(){
		$data = $this->input->post();
		unset($data['submit']);
			 $this->_flashandredirect(
	 			$this->amodel->__update_copyright($data),
	 				'Copyright text updated successfully!...',
	 				'Copyright not updated!!...',
	 				"Admin/copyRight/"
 			);
	}

	public function editSocial($social_id){
		$data['social'] = $this->amodel->__social_query($social_id);
		$this->load->view('photo-master/Admin/Editsocial',$data);
		$this->admin_footer();
	}

	public function updateSocial($social_id){ 
		$data = $this->input->post();
		unset($data['submit']); 
			 $this->_flashandredirect(
	 			$this->amodel->__update_social($data,$social_id),
	 				'Social text updated successfully!...',
	 				'Social not updated!!...',
	 				"Admin/sociallist/"
 			);
	}

	public function sociallist(){
		$data['allsocial'] = $this->amodel->__allsocial();
		$this->load->view('photo-master/Admin/sociallist',$data);
		$this->admin_footer();
	}

	public function deleteSocial($id){
		$this->_flashandredirect(
	 			$this->amodel->__delete_social($id),
	 				'Social text Deleted successfully!...',
	 				'Social not Deleted!!...',
	 				"Admin/sociallist/"
 			);
	}

	public function addSocial(){
		$data = $this->input->post();
		unset($data['submit']); 
			 $this->_flashandredirect(
	 			$this->amodel->__add_social($data),
	 				'Social text Added successfully!...',
	 				'Social not Added!!...',
	 				"Admin/sociallist/"
 			);
	}

	public function newSocial(){
		$this->load->view('photo-master/Admin/addSocial');
		$this->admin_footer();
	}

	public function logo($valid_error = NULL){
		$data['error'] = $valid_error;
		$data['logo'] = $this->amodel->__logo_query();
		$this->load->view('photo-master/Admin/EditLogo',$data);
		$this->admin_footer();
	}

	public function updateLogo(){ 
		$config = [
			'upload_path'		=> './assets/images/logo/',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		if( $this->upload->do_upload('logo_url') ){
				$data = $this->input->post();
				$image = $this->upload->data();
				$data['logo_url'] = base_url('/assets/images/logo/'.$image['file_name']);
				unset($data['submit']);  
				$gg = $this->amodel->__logo_query()->logo_url;
				$c = explode('photo/', $gg);  
				unlink($c[1]);  
				 $this->_flashandredirect(
		 			$this->amodel->__update_logo($data),
		 				'Logo Updated Successfully!...',
		 				'Logo not updated!!...',
		 				'Admin/logo'
	 			); 
			}else{
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->logo($data);
			}
	}	

	public function aboutContent(){
		$data['content'] = $this->amodel->__about_content_query();
		$this->load->view('photo-master/Admin/EditAboutcontent',$data);
		$this->admin_footer();
	}

	public function updateAboutcontent(){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('aboutcontent')){ 
			$data = $this->input->post();
			unset($data['submit']);  
			$this->_flashandredirect(
		 			$this->amodel->__update_aboutcontent($data),
		 				'About Content Updated Successfully!...',
		 				'About Content not updated!!...',
		 				'Admin/aboutContent'
	 			);
		}else{
			$this->aboutContent();
		}

	}

	public function aboutProgress(){
		$data['progress'] = $this->amodel->__progress_query();
		$this->load->view('photo-master/Admin/progresslist',$data);
		$this->admin_footer();
	}

	public function newProgress(){
		$this->load->view('photo-master/Admin/addProgress');
		$this->admin_footer();
	}

	public function addProgress(){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addprogress')){ 
			$data = $this->input->post();
			unset($data['submit']);
			$this->_flashandredirect(
		 			$this->amodel->__add_progress($data),
		 				'New Progress Bar Added Successfully!...',
		 				'Something is not right!!...',
		 				'Admin/aboutProgress'
	 			);
		}else{
			$this->newProgress();
		}
	}

	public function editProgress($id){
		$data['progress'] = $this->amodel->__about_progress_query($id);
		$this->load->view('photo-master/Admin/EidtProgress',$data);
		$this->admin_footer();
	}
	public function updateProgress($id){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addprogress')){ 
			$data = $this->input->post();
			unset($data['submit']);
			$this->_flashandredirect(
		 			$this->amodel->__update_progress($data,$id),
		 				'Progress Updated Successfully!...',
		 				'Something is not right!!...',
		 				'Admin/aboutProgress'
	 			);
		}else{
			$this->editProgress($id);
		}
	}

	public function deleteProgress($id){
		$this->_flashandredirect(
	 			$this->amodel->__delete_progress($id),
	 				'Progress Bar Deleted successfully!...',
	 				'Progress Bar not Deleted!!...',
	 				"Admin/aboutProgress/"
 			);
	}

	public function newClient($valid_error = null){
		$data['error'] = $valid_error;
		$this->load->view('photo-master/Admin/addClient',$data);
		$this->admin_footer();
	}

	public function addClient(){
		$config = [
			'upload_path'		=> './assets/images/clients/',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config); 
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addclient')){
			if( $this->upload->do_upload('client_img') ){ 
				$data = $this->input->post();
				unset($data['submit']);
				$image = $this->upload->data();
				$data['client_img'] = base_url('/assets/images/clients/'.$image['file_name']); 
				$this->_flashandredirect(
			 			$this->amodel->__add_client($data),
			 				'New Client Added Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/aboutClient'
		 			);
			}else{
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->newClient($data);
			}
		}else{
			$this->newClient();
		}
	}

	public function aboutClient(){
		$data['allclient'] = $this->amodel->__clients_query();
		$this->load->view('photo-master/Admin/clientslist',$data);
		$this->admin_footer();
	}

	public function editClient($id){
		$data['client'] = $this->amodel->__img_client($id);
		$this->load->view('photo-master/Admin/EditClient',$data);
		$this->admin_footer();
	}

	public function updateClient($id){
		$config = [
			'upload_path'		=> './assets/images/clients/',
			'allowed_types'		=> 'jpg|jpeg|gif|png'
		]; 
		$this->load->library('upload',$config);
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		if( $this->form_validation->run('addclient')){ 
			if(!empty($_FILES['client_img']['name'])){
				if( $this->upload->do_upload('client_img') ){ 
				$data = $this->input->post();
				unset($data['submit']);
				$image = $this->upload->data();
				$data['client_img'] = base_url('/assets/images/clients/'.$image['file_name']); 
				$this->_flashandredirect(
			 			$this->amodel->__update_client($data,$id),
			 				'New Client Added Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/aboutClient'
		 			);
				}else{
					$data['error'] = array('error' => $this->upload->display_errors());
					$this->newClient($data);
				}
			}else{
				$data = $this->input->post();
					$image = $this->upload->data(); 

					$data['client_img'] = $this->amodel->__img_client($id)->client_img;
					unset($data['submit']); 

					$this->_flashandredirect(
			 			$this->amodel->__update_client($data,$id),
			 				'New Client Added Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/aboutClient'
		 			);
			}

		}else{ 
			$this->editPage($page_id);

		}
	}

	public function deleteClient($id){
		$this->_flashandredirect(
	 			$this->amodel->__delete_client($id),
	 				'Client Deleted successfully!...',
	 				'Client not Deleted!!...',
	 				"Admin/aboutClient/"
 			);
	}

	public function userProfile($user_id,$email_error = null){
		$data['email_err'] = $email_error;
		$data['user'] = $this->amodel->__user_query($user_id);
		$this->load->view('photo-master/Admin/userProfile',$data);
		$this->admin_footer();
	}

	public function updateUserprofile($user_id){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');  
		$userinfo = $this->amodel->__email_check($user_id);
		$email = $userinfo->user_email;  
		if( $this->form_validation->run('updateuser')){ 
			$data = $this->input->post();
			$data['user_pass'] = $userinfo->user_pass;
			$data['user_role'] = $userinfo->user_role;
			unset($data['submit']);  
			if($email != $data['user_email']){
				$email_exist = $this->amodel->__post_email_check($data['user_email']); 
				if($email_exist != 0){
					$data['eeemail'] = "Email already exists";
					$this->userProfile($user_id,$data);
				}else{ 

					$this->_flashandredirect(
			 			$this->amodel->__update_userProfile($data,$user_id),
			 				'Your Profile Updated Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/userProfile/'.$user_id
		 			);
				}
			}else{
				$this->_flashandredirect(
			 			$this->amodel->__update_userProfile($data,$user_id),
			 				'Your Profile Updated Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/userProfile/'.$user_id
		 			);
			} 
		
	}else{ 
			$this->userProfile($user_id);

		}

	}

	public function ChangePass($pass_error = NULL){
		$data['passeror'] = $pass_error;
		$this->load->view('photo-master/Admin/changepassword',$data);
		$this->admin_footer();
	}
	public function updatePass($user_id){
		$this->form_validation->set_error_delimiters('<div class="text-danger" style="color:red;">', '</div>');
		$oldpass = $this->amodel->__pass_check($user_id)->user_pass; 
		$data = $this->input->post();
		$oldpas = md5($data['old_pass']); 
		if($oldpas == $oldpass ){
			if( $this->form_validation->run('updatepass')){
				 $newpass = md5($data['new_pass']);
				 $this->_flashandredirect(
			 			$this->amodel->__update_Password($newpass,$user_id),
			 				'Your Password Successfully!...',
			 				'Something is not right!!...',
			 				'Admin/ChangePass/'
		 			);

			}else{
				$this->ChangePass();
			}
		}else{
			$datsa['passerror'] = "Your old password does not match";
			$this->ChangePass($datsa);
		}
	}

	public function msg(){
		$data['msges'] = $this->amodel->__msg_query();
		$data['msge'] = $this->amodel->__msg_query_seen();
		$this->load->view('photo-master/Admin/inbox',$data);
		$this->admin_footer();
	}

	public function viewMsg($id){
		$data['msg'] = $this->amodel->__single_msg_query($id);
		$this->load->view('photo-master/Admin/viewmsg',$data);
		$this->admin_footer();
	}

	public function seenMsg($id){
		$this->_flashandredirect(
 			$this->amodel->__update_msg($id),
 				'Message goes to seenbox successfully!...',
 				'Something is not right!!...',
 				'Admin/msg/'
			);
	}

	public function deleteMsg($id){
		$this->_flashandredirect(
 			$this->amodel->__delete_msg($id),
 				'Message Deleted successfully!...',
 				'Something is not right!!...',
 				'Admin/msg/'
			);
	}

}