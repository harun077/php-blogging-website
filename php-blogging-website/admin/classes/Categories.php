<?php
    class Categories extends Config{
        // Add Categories
        public function add_cat($data){
         
           $cateName = $data['cat_name'];
           $cateDes = $data['cat_des'];

           $sql = "INSERT INTO `tbl_categories`(`cat_name`, `cat_des`) VALUES ('$cateName','$cateDes')";

          $result = $this->con->query($sql);

          if($result){
            $_SESSION['msg'] = "Added Successfully";
          
          }
        }
        //Display Category
        public function display_cat(){

          return  $this->con->query("SELECT * FROM `tbl_categories`;");
        }

        // Delete Category
        public function delete_cat($cid){
         $result = $this->con->query("DELETE FROM `tbl_categories` WHERE `cat_id`='$cid'");
         if($result){
              $_SESSION['msg'] = "Category Delete Successfully";
              //header("Location: manage_category.php");
         }

        }
    }

?>