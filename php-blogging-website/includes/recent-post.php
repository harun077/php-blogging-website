<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Recent Posts</h2>
        </div>
        <div class="content">
            <ul>
                <?php 

                   $getpost = $post ->display_post();
                     $i = 0;
                   if(mysqli_num_rows($getpost)>0){
                    foreach($getpost as $postItem){

                        if($i ==1){
                            break;
                        }elseif($postItem['post_status']== "1"){?>
                            <li>
                                <a href="post-details.html">
                                    <h5><?php echo $postItem['post_title']; ?></h5>
                                    <span><?php echo $postItem['post_date']; ?></span>
                                </a>
                           </li>

                           <?php

                            $i++;
                        }
                    }
                   }
                ?>              
            </ul>
        </div>
    </div>
</div>