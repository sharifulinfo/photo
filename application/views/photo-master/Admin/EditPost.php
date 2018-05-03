<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post</h2>
        <div class="block">  
            <?php echo form_open_multipart('Admin/updateBlog/'.$blogData->blog_id);?>
            <table class="form"> 
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td> 
                        <?php echo form_input(['name'=>'blog_title','placeholder'=>'Enter post title','class'=> 'medium','value' =>$blogData->blog_title]);?>
                        <?php echo form_error('blog_title');?>
                    </td>
                </tr>   
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td> 
                        <img src="<?php echo $blogData->blog_img?>" height="200" width = "400"><br>
                        <?php echo form_upload(['name'=>'blog_img']);?>
                       <span style="color: red;"><?php echo @$error['error']['error'];?></span> 
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Content</label>
                    </td>
                    <td> 
                        <?php echo form_textarea(['name'=>'blog_desc','value'=>$blogData->blog_desc]);?>
                         <?php echo form_error('blog_desc');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Categories</label>
                    </td>
                    <td>
                        <?php 
                            $cat_ids = $blogData->cat_id;
                             $d = explode(',', $cat_ids);   
                        ?>
                        <?php foreach($cats as $cat){
                            for($m = 0; $m<count($d);$m++){ 
                                if($d[$m] == $cat->cat_id){
                                    $v = TRUE;
                                    break;
                                }else{
                                    $v = False;
                                }
                            }
                        ?>
                            <?php echo form_checkbox(['name'=>'cats[]','value'=>$cat->cat_id,'checked'=>$v])?><?php echo $cat->cat_name ?><br>
                      <?php  }

                        ?> 
                    </td>
                </tr> 
                 
                        <input type="hidden" name="blog_user" value="<?php echo $this->session->userdata('user_id');?>" class="medium" />
                        <input type="hidden" name="blog_time" value="<?php echo $blogData->blog_time;?>" class="medium" />
                  
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
 