<div class="grid_10"> 
    <div class="box round first grid">
        <h2>Your Clients</h2>

          <style>
                table td{ border:1px solid #F00 ;  }
                table th{ border:1px solid #F00 ;  }
                table td{ padding:20px; }
            </style>
        <div class="block"> 
                <div class="addnew">
                    <a href="<?php echo base_url('Admin/newClient/')?>">Add new Client</a>
                </div>
                <?php if( $esrr = $this->session->flashdata('feedback_article') ){
                $clas = $this->session->flashdata('feedback_article_class') ;
            ?> 
          <p class="" style="color: green;"><?php echo $esrr;?></p> 
        <?php } ?> 
              <table border="0" cellpadding="0" cellspacing="5">
                  <tr>
                      <th>SL</th>
                      <th>Picture</th> 
                      <th>Name</th> 
                      <th>Word</th> 
                      <th>Action</th> 
                  </tr>
                    <?php $i = 1 ; foreach($allclient as $client){?>
                  <tr>
                      <td><?php echo $i;?></td>
                      <td><img src="<?php echo $client->client_img;?>"></td> 
                      <td><?php echo $client->client_name;?></td> 
                      <td><?php echo $client->client_word;?></td> 
                      <td><a href="<?php echo base_url('Admin/editClient/'.$client->client_id)?>">Edit</a> || <a href="<?php echo base_url('Admin/deleteClient/'.$client->client_id)?>">Delete</a></td> 
                  </tr>
                  <?php $i++; }?>
              </table> 
        </div>
    </div>
</div> 