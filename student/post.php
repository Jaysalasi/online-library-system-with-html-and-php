<?php 
include "connection.php";
include "download.php";
?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>Blog</title>

    <style>
      /* * {
    padding: 0;
    margin: 0; */
/* } */
.contain {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 1.2rem;
}
.grid-contain {
    width: 100%;
    height: 100%;
}

.grid-tee {
    /* width: 100%;
    height: 100%; */
    overflow: hidden;
}

.grid-tee img {
    width: 50%;
    height: 50%;
    object-fit: contain;
    object-position: 50%;
}
    </style>
    
  </head>
  <body>

    <!-- NAV BAR  -->
    <?php 
    include "nav.php";
    ?>
    <?php
    $res = mysqli_query($db, "SELECT * FROM `posts` ORDER BY `posts`.`date` DESC");
    

    ?>
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="contain">
                <?php 
                while($row = mysqli_fetch_assoc($res)){
                  $id = $row['id'];
                  ?>
            <div class="">
              
              <!-- post -->
              <div class="post">
                <div class="post-thumbnail"><a href="post.html"><img src="img/blog-post-4.jpeg" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last"><?php echo $row['date'] ?></div>
                    <div class="category"><a href="#">Business</a></div>
                  </div><a href="post.html">
                    <h3 class="h4">
                      <?php 
                            echo "<a href='details.php?id=$id'>"; 
                            echo $row['title'];  echo "</a>";
                            ?> 
                      
                    </h3></a>
                  <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
                  <div class="post-footer d-flex align-items-center">
                    <!-- <a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                      <div class="title">
                        <span>John Doe</span>
                      </div></a> -->
                    <!-- <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div> -->
                  </div>
                </div>
              </div>
            </div>
                <?php 
                  }
                ?>
            <!-- Pagination -->
            <!-- <nav aria-label="Page navigation example">
              <ul class="pagination pagination-template d-flex justify-content-center">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
              </ul>
            </nav> -->
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