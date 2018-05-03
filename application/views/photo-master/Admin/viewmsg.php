<div class="grid_10">
    <div class="box round first grid">
        <h2>View Message</h2>
        <div class="block">    
                 
         <form action="" method="post">
            <table class="form"> 
                <tr>
                    <td>
                        <label>Name:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $msg->msg_user;?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo $msg->msg_user_mail;?>" class="medium" />
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label>Date:</label>
                    </td>
                    <td>
                        <input type="text" readonly value="<?php echo date('d M',strtotime($msg->msg_time));?>" class="medium" />
                    </td>
                </tr> 

                <tr>
                    <td>
                        <label>Message:</label>
                    </td>
                    <td>
                        <textarea cols="80" rows="20">
                           <?php echo $msg->msg_content;?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Replay" /> 
                    </td>
                </tr>
            </table>
            </form>
          
        </div>
    </div>
</div>

