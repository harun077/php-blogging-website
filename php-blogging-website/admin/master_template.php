
<?php
    include("classes/Users.php");

    $user = new Users();

   // If Not 
    $email = $_SESSION['admin_email'];
    if(!$email){
        header("location: index.php");
    }
    
    // For Logout
    if(isset($_GET['admin_logout'])){
        if($_GET['admin_logout']== "logout"){
            session_destroy();
            header("Location: ../index.php");
        }
    }
?>


 <!-- Template Mastering -->

 <!-- Header -->
 <?php include_once("includes/header.php"); ?>
 <!-- Navbar Top -->
 <?php include_once("includes/navbar-top.php"); ?>

    <body class="sb-nav-fixed">
       
        <div id="layoutSidenav">

            <!-- SideNav -->
            <?php include_once("includes/sidenav.php"); ?>

            <div id="layoutSidenav_content">
                <main>

                    <div class="container-fluid px-4">
                        
                    <!--  Loading Require Page View -->
                        <?php
                            if(isset($view)){

                                if($view == "add_category"){
                                    require("views/add_cat_view.php");
                                }
                                elseif($view == "manage_category"){
                                    require("views/manage_cat_view.php");
                                }
                                elseif($view == "dashboard"){
                                    require("views/dash_view.php");
                                }
                                elseif($view == "add_post"){
                                    require("views/add_post_view.php");
                                }
                                elseif($view == "manage_post"){
                                    require("views/manage_post_view.php");
                                }
                                
                            }
                        ?>
                    </div>
                </main>

                 <!-- Footer  -->
                <?php include_once("includes/footer.php"); ?>

            </div>
        </div>

        <!-- Script  -->
        <?php include_once("includes/script.php"); ?>

    </body>
</html>
