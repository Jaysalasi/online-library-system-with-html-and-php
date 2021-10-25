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
            $res = mysqli_query($db, "SELECT * FROM books_table WHERE `id`=$id" );
            $row = mysqli_fetch_array($res);
        }
    ?>

    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="post blog-post col-lg-8"> 
          <div class="container">
            <div class="post " style="text-align: center; ">
              <div class="post-thumbnail align-items-center" style="width: 50%; position: center;"><img src="img/pdf.jpg" alt="..." class="img-fluid" /></div>
              <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                  <!-- <div class="category"><a href="#">Business</a><a href="#">Financial</a></div> -->
                </div>
                <h1><strong>Name: </strong><?php echo $row['book_name'] ?>
                <!-- <a href="#"><i class="fa fa-bookmark-o"></i></a> -->
            </h1>
            <!-- <div class="post-body"> -->
                  <p class="">
                      <strong>Author: </strong>
                      <?php echo $row['author']; ?>
                  </p>
                  <p class="">
                      <strong>ISBN: </strong>
                      <?php echo $row['isbn']; ?>
                  </p>
                  <p class="">
                      <strong>Publisher: </strong>
                      <?php echo $row['publisher']; ?>
                  </p>
                  <div class="category"><a class="btn " href="download.php?file=../das/<?php echo $row['link']; ?>">Download</a></div>
                  
                  <!-- </div> -->
                <div class="post-footer d-flex  flex-column flex-sm-row">
                  <div class="d-flex align-items-center flex-wrap">       
                    <!-- <div class="date"><i class="icon-clock"></i><?php echo $row['date']; ?></div> -->
                  </div>
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