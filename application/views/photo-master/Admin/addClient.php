<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Add New Client</h2>
        <div class="block">
         <form action="<?php echo base_url('Admin/addClient/')?>" method="post" enctype="multipart/form-data">
            <table class="form">					
                <tr>
                    <td>
                        <label>Client Name</label>
                    </td>
                    <td>
                        <input type="text" name="client_name" value="<?php echo set_value('client_name')?>" class="medium" /><?php echo form_error('client_name');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Client Picture</label>
                    </td>
                    <td>
                       <input type="file" name="client_img" value="<?php echo set_value('client_img')?>" class="medium" /><span style="color: red"><?php echo $error['error']['error'];?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Client Word</label>
                    </td>
                    <td>
                       <textarea name="client_word" class="tinymce">  
                            <?php echo set_value('client_word')?>
                        </textarea>
                        <?php echo form_error('client_word');?>
                    </td>
                </tr> 
				  
				
				 <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>  
        </div>
    </div>
</div> 
 <script src="<?php echo base_url('application/views/photo-master/Admin/js/tinymce')?>/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>