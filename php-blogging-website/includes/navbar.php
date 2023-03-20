
<?php

?>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2>Personal Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <?php
                       $getcat = $cat->display_cat();

                       if(mysqli_num_rows($getcat)>0){
                            foreach($getcat as $catItem){?>

                            <li class="nav-item">
                                <a class="nav-link  text-black px-4" href="admin/index.php"><?php echo $catItem['cat_name'];?></a>
                            </li>
                            <?php

                            }
                       }
                    ?>
                    <li class="nav-item main-button">
                        <a class="nav-link  text-white px-4" href="admin/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>