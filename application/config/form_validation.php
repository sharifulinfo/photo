<?php

$config = [
          'Search_validation'     =>    [
                                             [
                                                'field'   => 'search', 
                                                'label'   => 'Search Field', 
                                                'rules'   => 'trim|required'                                                         
                                             ], 

               ],
           'contact_validation'     =>    [
                                             [
                                                'field'   => 'fname', 
                                                'label'   => 'First Name', 
                                                'rules'   => 'trim|required'                                                         
                                             ],
                                             [
                                                'field'   => 'lname', 
                                                'label'   => 'Last Name', 
                                                'rules'   => 'trim|required'                                                         
                                             ], 
                                             [
                                                'field'   => 'email', 
                                                'label'   => 'Email Address', 
                                                'rules'   => 'trim|required|valid_email'                                                         
                                             ],
                                             [
                                                'field'   => 'subject', 
                                                'label'   => 'Subject', 
                                                'rules'   => 'trim|required'                                                         
                                             ],
                                             [
                                                'field'   => 'msg', 
                                                'label'   => 'Message', 
                                                'rules'   => 'trim|required'                                                         
                                             ],   

               ],
            'comments_validation'   =>    [
                                             [
                                                'field'  => 'comment_name',
                                                'label'  => 'Your Name',
                                                'rules'  => 'trim|required'
                                             ],
                                             [
                                                'field'  => 'comment_email',
                                                'label'  => 'Your Email Address',
                                                'rules'  => 'trim|valid_email'
                                             ],
                                             [
                                                'field'  => 'comment_msg',
                                                'label'  => 'Your Comments',
                                                'rules'  => 'trim|required'
                                             ]
            ],

            'login'     =>    [
                                          [
                                             'field'   => 'email', 
                                             'label'   => 'User Name', 
                                             'rules'   => 'trim|required|valid_email'                                                         
                                          ],

                                          [
                                             'field'   => 'password', 
                                             'label'   => 'Password', 
                                             'rules'   => 'trim|required'
                                          ]

               ],
               
            'addblog'     =>    [
                                          [
                                             'field'   => 'blog_title', 
                                             'label'   => 'Blog Title', 
                                             'rules'   => 'trim|required'                                                         
                                          ],

                                          [
                                             'field'   => 'blog_desc', 
                                             'label'   => 'Blog content', 
                                             'rules'   => 'trim|required'
                                          ]

               ],
            'addCat'     =>    [
                                          [
                                             'field'   => 'cat_name', 
                                             'label'   => 'Category Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 

               ],
            'addpage'     =>    [
                                          [
                                             'field'   => 'page_title', 
                                             'label'   => 'Page Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'page_menu', 
                                             'label'   => 'Page Menu Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'page_menu_icon', 
                                             'label'   => 'Page Menu Icon', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'page_content', 
                                             'label'   => 'Page Content', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'page_short', 
                                             'label'   => 'Page Short Note', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 

               ],
            'addcover'     =>    [
                                          [
                                             'field'   => 'index_head', 
                                             'label'   => 'Index Header', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'index_content', 
                                             'label'   => 'index Content', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'about_head', 
                                             'label'   => 'About Header', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'about_content', 
                                             'label'   => 'About Content', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'contact_head', 
                                             'label'   => 'Contact Header', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'contact_content', 
                                             'label'   => 'Contact Content', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 

               ],  
               'aboutcontent'     =>    [
                                          [
                                             'field'   => 'studio_icon', 
                                             'label'   => 'Studio Icon', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'studio_title', 
                                             'label'   => 'Studio Title', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'studio_text', 
                                             'label'   => 'Studio text', 
                                             'rules'   => 'trim|required'                                                         
                                          ],
                                          [
                                             'field'   => 'team_icon', 
                                             'label'   => 'Team Icon', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'team_title', 
                                             'label'   => 'Team Title', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'team_text', 
                                             'label'   => 'Team text', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'service_icon', 
                                             'label'   => 'Service Icon', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'service_title', 
                                             'label'   => 'Service Title', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'service_text', 
                                             'label'   => 'Service text', 
                                             'rules'   => 'trim|required'                                                         
                                          ],  

               ], 
               'addprogress'     =>    [
                                          [
                                             'field'   => 'progress_name', 
                                             'label'   => 'Progress Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ], 
                                          [
                                             'field'   => 'progress_value', 
                                             'label'   => 'Progress Value', 
                                             'rules'   => 'trim|required|max_length[2]|integer'                                                         
                                          ],

               ],
               'addclient'     =>    [
                                          [
                                             'field'   => 'client_name', 
                                             'label'   => 'Client Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ],

                                          [
                                             'field'   => 'client_word', 
                                             'label'   => 'Client Word', 
                                             'rules'   => 'trim|required|max_length[100]'
                                          ]

               ],
               'updateuser'     =>    [
                                          [
                                             'field'   => 'user_name', 
                                             'label'   => 'User Name', 
                                             'rules'   => 'trim|required'                                                         
                                          ],

                                          [
                                             'field'   => 'user_email', 
                                             'label'   => 'User Email', 
                                             'rules'   => 'trim|required|valid_email'
                                          ],
                                          [
                                             'field'   => 'user_details', 
                                             'label'   => 'User Details', 
                                             'rules'   => 'trim'
                                          ],

               ],
                'updatepass'     =>    [
                                          [
                                             'field'   => 'old_pass', 
                                             'label'   => 'Old Password', 
                                             'rules'   => 'trim|required'                                                         
                                          ],

                                          [
                                             'field'   => 'new_pass', 
                                             'label'   => 'New Password', 
                                             'rules'   => 'trim|required'
                                          ],
                                          [
                                             'field'   => 'con_pass', 
                                             'label'   => 'Confarm Password', 
                                             'rules'   => 'trim|required|matches[new_pass]'
                                          ],

               ],


        ];