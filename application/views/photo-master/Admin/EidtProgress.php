<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Progress Bar</h2>
        <div class="block">
         <form action="<?php echo base_url('Admin/updateProgress/'.$progress->progress_id)?>" method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Progress Name</label>
                    </td>
                    <td>
                        <input type="text" name="progress_name" value="<?php echo $progress->progress_name?>" class="medium" /><?php echo form_error('progress_name');?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Progress Value</label>
                    </td>
                    <td>
                        <input type="text" name="progress_value" value="<?php echo $progress->progress_value?>" class="medium" /><?php echo form_error('progress_value');?>
                    </td>
                </tr> 
				  
				
				 <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>  
        </div>
    </div>
</div> 