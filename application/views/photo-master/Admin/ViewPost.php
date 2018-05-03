<div class="grid_10">
    <div class="box round first grid">
        <h2>View Post</h2>
        <div class="block" style="padding-left: 30px;">  
            <form>
            <table class="form"> 
                <tr>
                    <td> 
                    </td>
                    <td> 
                       <h3><?php echo $blogData->blog_title;?></h3>
                    </td>
                </tr>   
                <tr>
                    <td> 
                    </td>
                    <td> 
                        <img src="<?php echo $blogData->blog_img?>" height="300" width = "600"><br> 
                    </td>
                </tr>
                <tr>
                    <td> 
                    </td>
                    <td> 
                        <p><?= date('Y-m-d h:i A',strtotime($blogData->blog_time));?></p>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;"> 
                    </td>
                    <td> 
                        <?php echo $blogData->blog_desc;?> 
                    </td>
                </tr>
                <tr>
                    <td> 
                    </td>
                    <td>
                        <?php 
                        $mm = null;
                            $cat_ids = $blogData->cat_id;
                             $d = explode(',', $cat_ids);   
                        ?>
                        <?php 
                            $allcat = explode(',', $blogData->cat_id);
                            $n = count($allcat); 
                            for($j=0;$j<$n;$j++){
                                $mm .= $object->category($allcat[$j])->cat_name.', ';
                            }
                            $mm = rtrim($mm,', ');
                            echo $mm;
                            ?> 
                    </td>
                </tr> 
                 
                        <input type="hidden" name="blog_user" value="<?php echo $this->session->userdata('user_id');?>" class="medium" />
                        <input type="hidden" name="blog_time" value="<?php echo $blogData->blog_time;?>" class="medium" />
                  
                <tr>
                    <td></td>
                    <td>             
                        <a href="<?php echo base_url('Admin/Blog')?>">Go Back</a>
                    </td>
                </tr>
            </table>
           </form>

        </div>
    </div>
</div> 
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
 