<?php 
include "connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
   
  
    <title>Post</title>
    
    
    
  </head>
  <body>


    <!-- NAV BAR -->
    <?php
    include "nav.php";

    ?>

    <?php

        if(isset($_GET['id'])) {
            $id = mysqli_escape_string($db, $_GET['id']);
            $res = mysqli_query($db, "SELECT * FROM posts WHERE `id`=$id" );
            $row = mysqli_fetch_array($res);
        }
    ?>

    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post-single">
              
              <div class="post-details">
                
                <h1><?php echo $row['title'] ?>
                <!-- <a href="#"><i class="fa fa-bookmark-o"></i></a> -->
            </h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                    
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i><?php echo $row['date']; ?></div>
                    <!-- <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div> -->
                  </div>
                </div>
                <div class="post-body">
                  <p class="">
                      <?php echo $row['message']; ?>
                  </p>
                  
                  </div>
               
              </div>
            </div>
          </div>
        </main>
        <aside class="col-lg-4">
          <?php 
            include "side.php";
          ?>
        </aside>
      </div>
    </div>
    <!-- Page Footer-->
    <?php
    include "foot.php";
    ?>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>