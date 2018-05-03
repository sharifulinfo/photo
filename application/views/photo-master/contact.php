<?php require_once('public_header.php');?>

<!-- Principal Content Start -->
   <div id="contact" style="background-image: url(<?php echo $cover->contact_pic;?>);">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
       	   <h1><?php echo $cover->contact_head;?></h1>
       	   <hr>
       	   <p><?php echo $cover->contact_content;?></p>
       	   <?php if( $esrr = $this->session->flashdata('feedback_article') ){
				$clas = $this->session->flashdata('feedback_article_class') ;
			?> 
	    <div class="<?php echo $clas;?>">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <strong><?php echo $esrr;?></strong>
		</div>
	    <?php } ?>
	    
       	   <?php echo form_open('users/contact_msg',['class'=>'form-horizontal']);?> 
	       	  <div class="form-group">
	       	  	<div class="col-xs-6">
	       	  	    <label class="label-control">First Name</label>
	       	  	    <?php echo form_input(['name'=>'fname','class'=>'form-control','value'=>set_value('fname'),'placeholder'=>'Enter Your First Name'])?> <?php echo form_error('fname');?>
	       	  	</div>
	       	  	<div class="col-xs-6">
	       	  	    <label class="label-control">Last Name</label>
	       	  		<?php echo form_input(['name'=>'lname','class'=>'form-control','value'=>set_value('lname'),'placeholder'=>'Enter Your Last Name']);?> <?php echo form_error('lname');?>
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Email</label> 
	       	  		<?php echo form_input(['name'=>'email','class'=>'form-control','value'=>set_value('email'),'placeholder'=>'Enter Your Email Address']);?><?php echo form_error('email');?>
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Subject</label>
	       	  		<?php echo form_input(['name'=>'subject','class'=>'form-control','value'=>set_value('subject'),'placeholder'=>'Enter Your Subject']);?><?php echo form_error('subject');?>
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Message</label>
	       	  		<?php echo form_textarea(['name'=>'msg','class'=>'form-control','value'=>set_value('msg')]);?> <?php echo form_error('msg');?>
	       	  		<input type="hidden" name="msg_time" value="<?php echo date('Y-m-d H:i:s');?>" class="medium" />
	       	  		<?php echo form_submit(['name'=>'submit','value'=>'SEND','class'=>'pull-right btn btn-lg sr-button']);?>
	       	  	</div>
	       	  </div>
	       <?php echo form_close();?>

	       <hr class="divider"> 
	    </div>   
   	  </div>
   </div>
<!-- Principal Content Start -->

<?php //require_once('public_footer.php');?>