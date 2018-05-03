<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Site Option</a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('Admin/logo');?>">Change Logo</a></li>
                        <li><a href="<?php echo base_url('Admin/sociallist');?>">Social Media</a></li>
                        <li><a href="<?php echo base_url('Admin/copyRight');?>">Copyright</a></li>
                        <li><a href="<?php echo base_url('Admin/editCover');?>">Page Cover Picture</a></li>
                        
                    </ul>
                </li>
				
                 <li><a class="menuitem">Pages</a>
                    <ul class="submenu">
                        <?php 
                        foreach ($pages as $page) { ?> 
                        <li><a href="<?php echo base_url('Admin/EditPage/'.$page->page_id)?>"><?php echo $page->page_title?></a></li>
                         <?php }
                        ?>
                        <li><a href="<?php echo base_url('Admin/newPage');?>">Add New Page</a></li>
                         
                    </ul>
                </li>
                <li><a class="menuitem">Category Option</a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('Admin/newCategory');?>">Add Category</a> </li>
                        <li><a href="<?php echo base_url('Admin/categories');?>">Category List</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">About Option</a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('Admin/aboutContent')?>">About Content</a></li>
                        <li><a href="<?php echo base_url('Admin/aboutProgress')?>">Progress Bar</a> </li>
                        <li><a href="<?php echo base_url('Admin/aboutClient')?>">Clients</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Post Option</a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('Admin/newBlog/')?>">Add Post</a> </li>
                        <li><a href="<?php echo base_url('Admin/Blog/')?>">Post List</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>