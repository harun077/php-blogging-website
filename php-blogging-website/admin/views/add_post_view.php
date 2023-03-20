<?php
    $pageTitle = "Add Post";

    include_once("classes/Categories.php");
    include_once("classes/posts.php");

    $cat = new Categories();  
    $post =  new Posts();

    if(isset($_POST['add_post'])){
        $post->add_post($_POST); 
     
    }
?>

<h1 class="mt-4"><?php echo $pageTitle;?></h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><?php echo $pageTitle;?></li>
</ol>


    <div class="row">
        <div class="col-lg-8 offset-lg-2">

          
            <!-- Form Start -->
            <form action="" method="POST" class="mt-3 shadow p-4 rounded" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="post_title" class="mb-2">Post Title</label>
                    <input type="text" name="post_title" id="post_title" placeholder="Enter Post Title" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="post_content" class="mb-2">Post Content</label>
                    <textarea name="post_content" id="post_content" cols="30" rows="4" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="post_img" class="mb-2">Upload Image</label>
                    <input type="file" name="post_img" id="post_img" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="post_cat" class="mb-2"> Post Category</label>
                    <select name="post_cat" id="post_cat" class="form-control">
                        <option value="">----Select Category----</option>

                        <?php 
                            
                            $getcat = $cat->display_cat();
                            if(mysqli_num_rows($getcat)>0){
                               foreach ($getcat as $catItem) {?>
                              
                              <option value=""><?php echo $catItem['cat_name'];?></option>
                              <?php
                               } 
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="post_summery" class="mb-2">Post Summary</label>
                    <textarea name="post_summery" id="post_summery" cols="30" rows="2" class="form-control"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="post_status" class="mb-2">Post Status</label>
                    <select name="post_cat" id="post_cat" class="form-control">
                    <option value="">----Select Status----</option>
                        <option value="0">Published</option>
                        <option value="1">Unpublished</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" value="Add Post" name="add_post" class="btn btn-primary btn-block w-100">
                </div>
            </form>
        </div>
    </div>
