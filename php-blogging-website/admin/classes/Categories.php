<?php
    class Categories extends Config{

        public function add_cat($data){

            $catName = $data['cat_name'];
            $catDesc = $data['cat_des'];

            $sql = "INSERT INTO `tbl_categories`(`cat_name`, `cat_des`) VALUES ('$catName','$catDesc')";

          $result = $this->con->query($sql);

          if($result){
                echo "OK";
          }
        }
    }

?>