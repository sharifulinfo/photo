
<div class="grid_10">

    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock"> 

         <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>

         <form action="<?php echo base_url('Admin/EditCopyright/');?>" method="post"> 
            <table class="form">					
                <tr>
                    <td>
                        <textarea name="footer_text" class="tinymce">  
                            <?php echo $copytext->footer_text;?>
                        </textarea>
                        <?php echo form_error('footer_text');?>
                    </td>
                </tr>
				
				 <tr> 
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table> 
            </form>
        </div>
    </div>
</div>
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>