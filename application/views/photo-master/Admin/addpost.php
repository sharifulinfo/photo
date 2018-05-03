<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
        <div class="block">      
            <?php echo form_open_multipart('Admin/addBlog');?>
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td> 
                        <?php echo form_input(['name'=>'blog_title','placeholder'=>'Enter post title','class'=> 'medium','value' =>set_value('blog_title')]);?>
                        <?php echo form_error('blog_title');?>
                    </td>
                </tr>   
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td> 
                        <?php echo form_upload(['name'=>'blog_img']);?>
                       <span style="color: red;"><?php echo $error['error']['error'];?></span> 
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td> 
                        <?php echo form_textarea(['name'=>'blog_desc']);?>
                         <?php echo form_error('blog_desc');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Categories</label>
                    </td>
                    <td>
                        <?php foreach($cats as $cat){?> 
                            <?php echo form_checkbox(['name'=>'cats[]','value'=>$cat->cat_id])?><?php echo $cat->cat_name ?><br>
                      <?php  }

                        ?> 
                    </td>
                </tr> 
                 
                        <input type="hidden" name="blog_user" value="<?php echo $this->session->userdata('user_id');?>" class="medium" />
                        <input type="hidden" name="blog_time" value="<?php echo date('Y-m-d H:i:s');?>" class="medium" />
                  
                <tr>
                    <td></td>
                    <td>            
                        <?php echo form_submit(['name'=>'submit','value'=>'Save']);?>
                    </td>
                </tr>
            </table>
            <?php form_close();?>

        </div>
    </div>
</div> 
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 