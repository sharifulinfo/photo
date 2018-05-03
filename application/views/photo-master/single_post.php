
  <div id="single">
    <div class="container">
      <div class="row">

        <h2><?php echo $singleData->blog_title?></h2>
        <hr class="subtitle">
        <div class=" block1">
          <div class="col-xs-12 col-sm-12">
            <div class="singleimg">
              <img src="<?php echo $singleData->blog_img;?>">
            </div>
            <p>
              <?php 
                echo $singleData->blog_desc;
                $blog_id =  $singleData->blog_id;
              ?> 
            </p>
            <h4>- By <?php $dd = $model_obj->_author_query($singleData->blog_user);
              echo $dd[0]['user_name']; ?> 
            </h4> 
            <ul class="list-inline">
              <li><?= date('d F',strtotime($singleData->blog_time));?> |</li>
              <li><a class="page-scroll" href="#form">COMMENT</a> |</li>
              <li><a href="">LIKE</a></li>
            </ul>
            <hr>  
            <?php 
              echo validation_errors();
            $allcomments = $model_obj->_comments_query($blog_id);
                echo $allcomments;
            ?>

            <?php
            if(!$this->session->userdata('user_id')){ 
          $ff = '<div class="form-group">
                                <div class="col-xs-12 col-sm-6">
                                  <label class="label-control">Name</label>
                                  '.form_input(['name' => 'comment_name', 'class' => 'form-control', 'pleaceholder' => 'your name', 'require' => '1','type' => 'text']).' 
                                </div>
                                '.form_hidden(['blog_id' => $blog_id ]).' 
                                <div class="col-xs-12 col-sm-6">
                                  <label class="label-control">Email</label>
                                  '.form_input(['name' => 'comment_email', 'class' => 'form-control', 'pleaceholder' => 'your email','type' => 'text']).' 
                                </div>
                              </div>';
        }else{
          $ff = form_hidden(['comment_name'=>$this->session->userdata('user_name')]).form_hidden(['comment_email'=>$this->session->userdata('user_email')]).form_hidden(['blog_id' => $blog_id ]);
        }
            ?>
            <div id="form" class="form">
                <?= form_open('users/comments/0',['class'=>'form-horizontal']);?>
                  
                  <?php echo $ff;?>

                  <div class="form-group">
                    <div class="col-xs-12">
                        <label class="label-control">Type Your Comment</label>
                      <?= form_textarea(['name'=>'comment_msg','class'=>'form-control']);?>
                      <?= form_submit(array('name'=>'submit', 'value'=>'SEND','class'=>'btn btn-lg btn-info sr-button'))?> 
                    </div>
                  </div>
                <?= form_close();?>
            </div>


          </div>
          
        </div>
      </div>   
    </div>
  </div> 
