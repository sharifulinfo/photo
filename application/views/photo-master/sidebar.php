
        <div class="col-xs-12 col-sm-4">
          <?php echo form_error('search');?>
            <?php echo form_open('users/search',['class' => 'form-horizontal','role'=>'search']);?> 
             <div class="input-group">
              <?php echo form_input(['class'=> 'form-control','placeholder'=>'Search Here..','type'=>'text','name'=>'search']);?> 
               <span class="input-group-btn"> 
                <?php echo form_submit(['name'=>'submit','value' => 'Search','class'=>'btn']);?> 
               </span>
             </div>
           </form>

           <div class="panel">
             <div class="panel-heading">
              
               <h4>Categories</h4>
             </div>
             <div class="panel-body">
               <ul class="nav">
                <?php
                //  $i = 0;
                // foreach ($sidebarData as $single) {
                //   $catid[$i] = explode(',', $single->cat_id);
                //   $i++;
                //   }
                //   echo "<pre>";
                //   print_r($catid);
                //   echo "</pre>"; 
                ?>
                <?php foreach ($allCat as $cat) {
                  $num = $model_obj->m_count_cat($cat->cat_id); ?>
                  <li><a href="<?php echo base_url('users/category/'.$cat->cat_id);?>"><?php echo $cat->cat_name;?><span style="color: red;">  (<?php echo $num;?>)</span></a></li> 
                <?php } ?>
               </ul>
             </div>
           </div>
           <div class="well">
             <h4>Soluta</h4>
             <p>Quod soluta corrupti earum officia vel inventore vitae quidem, consequuntur odit impedit.</p>
           </div>
            <h3>Recent Posts</h3>
            <hr>
            <?php $i = 1; foreach ($sidebarData as $single) {?>
             <div class="post">
               <div class="post-heading">
                 <span><?php echo date('d F',strtotime($single->blog_time));?></span>
                 <img class="img-responsive" src="<?php echo $single->blog_img;?>" alt="post's picture">
               </div>
               <div class="post-body">
                 <span>
                 <i class="fa fa-heart sr-icons"></i> 10
                 <i class="fa fa-comments sr-icons"></i> 10
                 </span>
                 <h4 class="text-left"><a href="single_post.html"><strong><?php echo $single->blog_title;?></strong></a></h4>
               </div>
             </div> 
             <?php 
              if($i==2){
                break;
              } $i++;
           }?> 
        </div>