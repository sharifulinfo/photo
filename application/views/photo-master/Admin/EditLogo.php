<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Site Title and Description</h2> 
            <div class="block sloginblock"> 
            <form action="<?php echo base_url('Admin/updateLogo')?>" method="post" enctype="multipart/form-data">
                  <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>
                <table class="form"> 
                    <tr>
                        <td>
                            <label></label>
                        </td>
                        <td>
                            <img src="<?php echo $logo->logo_url?>">     
                        </td>
                    </tr> 			
                    <tr>
                        <td>
                            <label>Website Logo</label>
                        </td>   
                        <td>
                            <input type="file" value=""  name="logo_url" class="medium" />
                            <span style="color: red;"><?php echo $error['error']['error'];?></span>
                        </td>
                    </tr> 
    				
    				 <tr>
                        <td>
                        </td>
                        <td>
                            <input type="submit" name="submit" Value="Update" />
                        </td>
                    </tr>
                </table>
                </form>
            </div> 
         
    </div>
</div>

