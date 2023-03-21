<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">

        <?php 

                $getpost = $post ->display_post();
                $i = 0;
                if(mysqli_num_rows($getpost)>0){
                foreach($getpost as $postItem){

                    if($i ==1){
                        break;
                    }elseif($postItem['post_status']== "1"){?>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="upload/<?php echo $postItem['post_img'];?>" alt="" height="400px">
                                </div>
                                <div class="down-content">
                                    <span>Lifestyle</span>
                                    <a href="post-details.html">
                                        <h4><?php echo $postItem['post_title'];?></h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#"><?php echo $postItem['post_user'];?></a></li>
                                        <li><a href="#"><?php echo $postItem['post_date'];?></a></li>
                                        
                                    </ul>
                                    <p><?php echo $postItem['post_summary'];?></p>
                                    
                                </div>
                            </div>
                        </div>
                        <?php

                        $i++;
                    }
                }
                }
                ?>          

           
                 
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>