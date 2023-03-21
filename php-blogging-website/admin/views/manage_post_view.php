<?php
    $pageTitle = " Manage Post";
    include_once("classes/posts.php");
    $post =  new posts();
?>

<h1 class="mt-4"><?php echo $pageTitle;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active"><?php echo $pageTitle;?></li>
</ol>


<div class="row">
    <div class="col-12">
                    
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    All Post
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Post_ID</th>
                                <th>Post Title</th>
                                <th>Post Content</th>
                                <th>Post Image</th>
                                <th>Post Summery</th>
                                <th>Post Status</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Post_ID</th>
                                <th>Post Title</th>
                                <th>Post Content</th>
                                <th>Post Image</th>
                                <th>Post Summery</th>
                                <th>Post Status</th>
                                <th>Action</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>

                        <?php
                            $getpost = $post->display_post();
                            $i= 1;
                            if(mysqli_num_rows($getpost)>0){

                                foreach($getpost as $postItem){?>
                                
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td><?php echo $postItem['post_title'];?></td>
                                    <td><?php echo $postItem['post_content'];?></td>
                                    <td>
                                       <img src="../upload/<?php echo $postItem['post_img'];?> " alt="" width="100px" height="100px">
                                    </td>
                                    <td><?php echo $postItem['post_summary'];?></td>
                                    <td>
                                        <?php 
                                            if($postItem['post_status']== 1){
                                                echo "Published";
                                            }else{
                                                echo "unpublished";
                                            }

                                        ?>
                                    </td>
                                    
                                    <td>
                                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                   
                            
                                </tr>
                        
                                <?php    
                                }
                            }
                        ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>

    </div>
</div>