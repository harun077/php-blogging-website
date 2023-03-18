<?php
    class Categories extends Config{

        public function add_cat($data){
         
           $cateName = $data['cat_name'];
           $cateDes = $data['cat_des'];

           $sql = "INSERT INTO `tbl_categories`(`cat_name`, `cat_des`) VALUES ('$cateName','$cateDes')";

          $result = $this->con->query($sql);

          if($result){
            echo "ok";
          
          }
        }
    }

?>