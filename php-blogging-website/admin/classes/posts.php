<?php
    class Posts extends Config{
        // Add Post
        public function add_post($data){
          
             $postTitle = $data['post_title'];
             $postContent = $data['post_content'];
             $postimgName = $_FILES['post_img']['name'];
             $postTmpimgName = $_FILES['post_img']['tmp_name'];
             $postCat = $data['post_cat'];
             $postSummery = $data['post_summery'];
             $postStatus = $data['post_status'];

           $sql = "INSERT INTO `posts`(`post_title`, `post_content`, `post_img`, `post_cat`, `post_user`, `post_summary`, `post_date`, `post_status`) VALUES ('$postTitle','$postContent','$postimgName','$postTmpimgName',' $postCat','$postSummery',now(), '$postStatus') ";

           $result = $this->con->query($sql);

          if($result){
            move_uploaded_file($postTmpimgName, "../upload/".$postimgName);
          }
        }

        // Display Post
        public function display_post(){
           return $this->con->query("SELECT * FROM `posts`");
        }
       
    }

?>