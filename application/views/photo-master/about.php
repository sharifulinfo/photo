<?php require_once('public_header.php');?>

<!-- Principal Content Start-->
   <div id="about">

    <!-- Header -->
      <div class="row">
         <div class="col-xs-12 intro">
            <div class="carousel-inner">
               <div class="item active">
                <img class="img-responsive" src="<?php echo $cover->about_pic;?>" alt="header picture">
               </div>
               <div class="carousel-caption">
                  <h1><?php echo $cover->about_head;?></h1>
                  <p><?php echo $cover->about_content;?></p>
                  <hr>
               </div>
            </div>
         </div>
      </div>
    <!-- End of header -->  

    <!-- Container Box -->
      <div class="container">
        <div class="row">
       
             <div class="col-xs-12 col-sm-6">
               <div class="box-about">
                <i class="<?php echo $content->studio_icon;?>"></i>
                <h4><?php echo $content->studio_title;?></h4>
                <p class="text-left text-muted"><?php echo $content->studio_text;?></p>
               </div>
             </div> 
             <div class="col-xs-12 col-sm-6">
               <div class="box-about">
                <i class="<?php echo $content->team_icon;?>"></i>
                <h4><?php echo $content->team_title;?></h4>
                <p class="text-left text-muted"><?php echo $content->team_text;?></p>
               </div>
             </div> 
             
             <div class="col-xs-12 col-sm-6">
               <div class="box-about">
                <i class="<?php echo $content->service_icon;?>"></i>
                <h4><?php echo $content->service_title;?></h4>
                <p class="text-left text-muted"><?php echo $content->service_text;?></p>
               </div>
             </div>  

           <div class="col-xs-12 col-sm-6">
            <?php foreach($progress as $pro){?>
             <p class="text-muted"><strong><?php echo $pro->progress_name;?></strong> <span class="pull-right"><?php echo $pro->progress_value;?>%</span></p>
             <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $pro->progress_value;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pro->progress_value;?>%;"></div>
             </div> 
             <?php }?>
           </div>
        </div>

      <!-- Pricing Tables -->  
       <!--  <div class="row pricing text-center">
          <h3>FORMATION PRICING TABLES</h3>
          <hr>
          <div class="col-xs-12 col-sm-4 first">
            <div class="beginner">
              <h4>BEGINNER</h4>
              <h5>$99.97</h5>
              <ul class="nav">
                <li>Beginner Option I</li>
                <li>Beginner Option II</li>
                <li>Beginner Option III</li>
                <li>Beginner Option IV</li>
                <li>Beginner Option V</li>
              </ul>
              <a href="#" class="btn btn-lg sr-button">SIGN UP</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 middle">
            <div class="intermediary">
              <h4>INTERMEDIARY</h4>
              <h5>$199.97</h5>
              <ul class="nav">
                <li>Intermediary Option I</li>
                <li>Intermediary Option II</li>
                <li>Intermediary Option III</li>
                <li>Intermediary Option IV</li>
                <li>Intermediary Option V</li>
              </ul>
              <a href="#" class="btn btn-lg sr-button">SIGN UP</a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="higher">
              <h4>PROFESSIONAL</h4>
              <h5>$299.97</h5>
              <ul class="nav">
                <li>High Option I</li>
                <li>High Option II</li>
                <li>High Option III</li>
                <li>High Option IV</li>
                <li>High Option V</li>
              </ul>
              <a href="#" class="btn btn-lg sr-button">SIGN UP</a>
            </div>
          </div>
        </div> -->
      <!-- End of Pricing Tables -->

      <!-- Clients Feedback -->
        <div class="row feedback text-center">
           <h3>CLIENTS FEEDBACK</h3>
           <hr>
            <?php $i = 0; foreach($clients as $client){?>
             <div class="col-xs-12 col-sm-3">
               <img style="width: 204px; height: 212px;" class="img-responsive" src="<?php echo $client->client_img;?>" alt="client's picture">
               <h5><?php echo $client->client_name;?></h5>
               <q><?php echo $client->client_word;?></q>
             </div>
             <?php 
              if($i==3){
                break;
              }
             $i++;}?>
        </div>
      <!-- End of Clients Feedback --> 
       
      </div>
    <!-- End of container Box -->  
   </div>
<!-- End of principal content -->

   <!-- Footer -->
  <?php //require_once('public_footer.php');?>