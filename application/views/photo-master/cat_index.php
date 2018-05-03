<?php require_once('public_header.php');?>
<?php 

               $num = array(); 
          foreach ($allCat as $cat) {
                  $num[$cat->cat_id] = $model_obj->m_count_cat($cat->cat_id);
                   
                } 
                arsort($num); 
              $category = array();
              $i = 0;
              foreach ($num as $n=>$x) {
                $category[$i] = $n;
                $i++; 
                } 
          ?>

<!-- Principal Content Start -->
   <div id="index">

    <!-- Header -->
      <div class="row">
         <div class="col-xs-12 intro">
            <div class="carousel-inner">
               <div class="item active">
                <img class="img-responsive" src="<?php echo base_url('assets/images/index/woman.jpg')?>" alt="header picture">
               </div>
               <div class="carousel-caption">
                  <h1>FIND NICE PICTURES HERE</h1>
                  <hr>
               </div>
            </div>
         </div>
      </div>
      

      <div id="index-body">
      <!-- Pictures Navigation table -->
        <div class="table-responsive">
          <table class="table text-center">
            <thead>
              <tr>
                <td><a class="link active" href="<?php echo base_url('users/main_category/'.$category[0]);?>"><?php echo $model_obj->_category_name($category[0]);?></a></td>
                <td><a class="link active" href="<?php echo base_url('users/main_category/'.$category[1]);?>"><?php echo $model_obj->_category_name($category[1]);?></a></td>
                <td><a class="link active" href="<?php echo base_url('users/main_category/'.$category[2]);?>"><?php echo $model_obj->_category_name($category[2]);?></a></td><!-- 
                <td><a class="link" href="#category2" data-toggle="tab">category II</a></td>
                <td><a class="link" href="#category3" data-toggle="tab">category III</a></td> -->
              </tr>
            </thead>
          </table>
          <hr>
        </div>
      
      <!-- Navigation Table Content -->
        <div class="tab-content">  

        <!-- First Category pictures -->
           <div class="tab-pane active" >
              <div class="row popup-gallery">
                <?php foreach ($values as $single) {?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="sol">
                    <img class="img-responsive" src="<?php echo $single->blog_img?>" alt="First category picture">
                    <div class="behind">
                        <div class="head text-center">
                          <ul class="list-inline">
                            <li>
                              <a class="gallery" href="<?php echo $single->blog_img?>" data-toggle="tooltip" data-original-title="Quick View">
                                <i class="fa fa-eye"></i>
                              </a>
                            </li> 
                            <li>
                              <a href="<?php echo base_url('users/single/'.$single->blog_id);?>" data-toggle="tooltip" data-original-title="<?php echo $single->blog_title?>">
                                <i class="fa fa-info"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="row box-content">
                          <ul class="list-inline text-center">
                            <li><i class="fa fa-comments"></i> <?php echo $model_obj->_count_comments($single->blog_id);?></li>
                            <li><i class="fa fa-clock"></i> <span><?php echo date('d M y',strtotime($single->blog_time));?></span></li> 
                          </ul>
                        </div>
                    </div>
                  </div>
                </div> 
                <?php } ?>
              </div>
              <nav class="text-center">
                <?= $this->pagination->create_links();?> 
              </nav>
           </div>
    
        </div>
    <!-- End of Navigation Table Content -->
      </div><!-- End of Index-body box -->

    <!-- Newsletter form -->
      <div class="index-form text-center">
        <h3>SUSCRIBE TO OUR NEWSLETTER </h3>
        <h5>Suscribe to receive our News and Gifts</h5>
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
            <input class="form-control" type="text" placeholder="Type here your email address">
            <a href="" class="btn btn-lg sr-button">SUBSCRIBE</a>
            </div>
          </div>
        </form>
      </div>
    <!-- End of Newsletter form -->  
    <!-- Box within partners name and logo -->
      <div class="last-box row">
        <div class="col-xs-12 col-sm-4 col-sm-push-4 last-block">
        <div class="partner-box text-center">
          <p>
          <i class="fa fa-map-marker fa-2x sr-icons"></i> 
          <span class="text-muted">35 North Drive, Adroukpape, PY 88105, Agoe Telessou</span>
          </p>
          <h4>Our Main Partners</h4>
          <hr>
          <div class="text-muted text-left">
            <ul class="list-inline">
              <li><img src="<?php echo base_url('assets/')?>images/index/log2.jpg" alt="logo"></li>
              <li>First Partner Name</li>
            </ul>
            <ul class="list-inline">
              <li><img src="<?php echo base_url('assets/')?>images/index/log1.jpg" alt="logo"></li>
              <li>Second Partner Name</li>
            </ul>
            <ul class="list-inline">
              <li><img src="<?php echo base_url('assets/')?>images/index/log3.jpg" alt="logo"></li>
              <li>Third Partner Name</li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    <!-- End of Box within partners name and logo -->

   </div><!-- End of index box -->
   
<?php //require_once('public_footer.php');?>