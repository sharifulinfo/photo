<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block">

            <style>
                table td{ border:1px solid #F00 ;  }
                table th{ border:1px solid #F00 ;  }
                table td{ padding:20px; }
            </style>
            <div class="tablebody">
                <div class="addnew">
                    <a href="<?php echo base_url('Admin/newSocial/')?>">Add new Social</a>
                </div>
              <table border="0" cellpadding="0" cellspacing="5">
                  <tr>
                      <th>SL</th>
                      <th>Name</th> 
                      <th>Action</th> 
                  </tr>
                    <?php $i = 1 ; foreach($allsocial as $social){?>
                  <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $social->social_name;?></td> 
                      <td><a href="<?php echo base_url('Admin/editSocial/'.$social->social_id)?>">Edit</a> || <a href="<?php echo base_url('Admin/deleteSocial/'.$social->social_id)?>">Delete</a></td> 
                  </tr>
                  <?php $i++; }?>
              </table>
              <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <strong class="successData"><?php echo $esrr;?></strong> 
        <?php } ?>
            </div>
        </div>
    </div>
</div> 