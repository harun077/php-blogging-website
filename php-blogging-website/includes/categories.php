<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>

            <?php
                    $getcat = $cat->display_cat();

                    if(mysqli_num_rows($getcat)>0){
                        foreach($getcat as $catItem){?>

                        <li><a href="#">- <?php echo $catItem ['cat_name']; ?></a></li>

                        <?php

                        }
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>