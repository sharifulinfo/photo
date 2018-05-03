<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Progress Bar</h2>
        <div class="block">

            <style>
                table td{ border:1px solid #F00 ;  }
                table th{ border:1px solid #F00 ;  }
                table td{ padding:20px; }
            </style>
            <div class="tablebody">
                <div class="addnew">
                    <a style="width: 30%!important" href="<?php echo base_url('Admin/newProgress/')?>">Add New Progress Bar</a>
                </div>
              <table border="0" cellpadding="0" cellspacing="5">
                  <tr>
                      <th>SL</th>
                      <th>Name</th> 
                      <th>Value</th> 
                      <th>Action</th> 
                  </tr>
                    <?php $i = 1 ; foreach($progress as $progres){?>
                  <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $progres->progress_name;?></td> 
                      <td><?php echo $progres->progress_value;?></td> 
                      <td><a href="<?php echo base_url('Admin/editProgress/'.$progres->progress_id)?>">Edit</a> || <a href="<?php echo base_url('Admin/deleteProgress/'.$progres->progress_id)?>">Delete</a></td> 
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