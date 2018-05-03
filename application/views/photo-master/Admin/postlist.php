
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Published Post List</h2>
<?php if( $esrr = $this->session->flashdata('feedback_article') ){
				$clas = $this->session->flashdata('feedback_article_class') ;
			?> 
		  <strong class="successData"><?php echo $esrr;?></strong> 
	    <?php } ?>
	    
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5%">SL</th>
							<th width="15%">Title</th>
							<th width="25%">Desctiption</th>
							<th width="10%">Image</th>
							<th width="10%">Category</th> 
							<th width="10%">Author</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							  
								$i=1;
								foreach($AllBlog as $row){
						?>
						<tr class="odd gradeX">
							<td><?php echo $i++;?></td>
							<td><?php echo $row['blog_title'];?></td> 
							<td><p><?php
								$this->load->helper('text');
								 echo word_limiter($row['blog_desc'], 20);?></p></td> 
							<td><img src="<?php echo $row['blog_img'];?>" height="100px" width="150px" style = "margin-bottom: -125px; margin-top: 15px;padding-bottom: 57px; "></td> 
							<td><?php 
							$allcat = explode(',', $row['cat_id']);
							$n = count($allcat);
							for($j=0;$j<$n;$j++){
								$dat = $object->category($allcat[$j]);
								echo $dat->cat_name.' ';
							}
							?></td>   
							<td><?php echo $object->Author($row['blog_user']);?></td>  
							<td style="font-size: 11px;">
								<a href="<?php echo base_url('Admin/viewBlog/'.$row['blog_id']);?>">View</a> 

								<?php if($this->session->userdata('user_id') == $row['blog_user'] || $this->session->userdata('user_role') == 'admin'){?>
									|| <a href="">Unpublish</a>
									|| <a href="<?php echo base_url('Admin/editBlog/'.$row['blog_id']);?>">Edit</a> || 
									<a onclick="return confirm('Are you sure to Delete!')" href="<?php echo base_url('Admin/deleteBlog/'.$row['blog_id']);?>">Delete</a></td>
								<?php }?>	

						</tr> 
						<?php }?>
					</tbody>
				</table>
	
               </div>
            </div>
            </div>

            
<script type="text/javascript">

$(document).ready(function () {
    setupLeftMenu();

    $('.datatable').dataTable();
    setSidebarHeight();


});
</script> 
