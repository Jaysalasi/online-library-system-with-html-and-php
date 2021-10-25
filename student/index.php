<?php 
include "connection.php";
// include "download.php";
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
    <section style="background: url(img/hero.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class=" center">
          <div class="text-center">
            <h1>Welcome to FUTMinna E-library</h1>
              <div>
                <p>Search for books, audios and lecture videos for free</p>
              </div>
            <div>
              <form action="" method="POST">
                <div class="md-form pt-4 pl-4 pl-4 pr-4 pr-4">
                  <input class="form-control" type="text" name="search" id="" placeholder="search items">
                  <div class="pt-4"> 

                    <button type="submit" name="submit" class="btn btn-outline-secondary" >
                      <i class="icon-search-1" ></i>Search
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- <a href="#" class="hero-link">Discover More</a> -->
          </div>
        <!-- </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a> -->
      </div>
    </section>
    
    <div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="">


<?php

        if(isset($_POST['submit'])) {
          // $b is for books
          $b = mysqli_query($db, "SELECT * FROM books_table WHERE book_name LIKE '%$_POST[search]%'");
          //  $a for audio
          $a = mysqli_query($db, "SELECT * FROM `audio_table` WHERE audio_name LIKE '%$_POST[search]%'");
          // $v for video
          $v = mysqli_query($db, "SELECT * FROM `videos_table` WHERE video_name LIKE '%$_POST[search]%'");
          
          if(!$b || mysqli_num_rows($b) == 0 ) {
            echo "<div>";
            echo "<h2>";
            echo "Book results";
            echo "</h2>";
            echo "</div>";
            echo "<div>";
            echo "<p>No file found</p>";
            echo "</div>";
          } else {


            //  contain Book grid 
            
?>
            <div class="container">
                  <div>
                    <h2>Book Results</h2><hr>
                  </div>
            
              <div class="contain">
              <?php 
                            

                            if(mysqli_num_rows($b) > 0) {
                              while($row = mysqli_fetch_array($b)) { 
         
                        ?>
                <div class="grid-contain ">
                  <div class="grid-tee">
                    <img src="img/pdf.jpg" alt="..." class="">
                  </div>
                  <div class="date meta-last">
                            <p style="font-size: 14px;"><?php echo $row['date']; ?> </p>
                          </div>    
                          <div class="post-meta ">
                              <div class="date meta-last">
                              <a href="">
                              <h4 class="">
                                      <?php 
                                        echo "<a href='book.php?id=$id'>"; 
                                        echo $row['book_name'];  echo "</a>";
                                      ?> </h4>
                            </a>
                          <p class="text-muted"><?php echo $row['author']; ?> </p>  
                          <p class="text-muted"><?php echo $row['isbn']; ?> </p>  
                              </div>
                              <div class="category"><a href="../admin/<?php echo $row['link']; ?>" download>Download</a></div>
                          </div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>
            <?php
            
 
            
          }
          if(!$a || mysqli_num_rows($a) == 0 ) {
            echo "<div>";
            echo "<h2>";
            echo "Audio results";
            echo "</h2>";
            echo "</div>";
            echo "<div>";
            echo "<p>No file found</p>";
            echo "</div>";
          } else {
           
            
            //   contain audio 
            ?>
            
            
            <div class="container" style="padding-top: 150px;">
                  <div>
                    <h2>Audio Results</h2><hr>
                  </div>
            
              <div class="contain">
              <?php 
                          

                            if(mysqli_num_rows($a) > 0) {
                              while($row = mysqli_fetch_array($a)) { 
         
                        ?>
                <div class="grid-contain ">
                  <div class="grid-tee">
                    <!-- <img src="img/pdf.jpg" alt="..." class=""> -->
                  </div>
                  <div class="date meta-last">
                            <p style="font-size: 14px;"><?php echo $row['date']; ?> </p>
                          </div>    
                          <div class="post-meta ">
                              <div class="date meta-last">
                              <a href="index.php">
                                
                              <h3 class="h6"><?php echo $row['audio_name']; ?> </h3>
                            </a>  
                                <audio controls>
                                  <source src="../admin/<?php echo $row['audio_link'] ?>">
                                </audio>
                              </div>
                              <div class="category"><a href="../admin/ <?php echo $row['audio_link']; ?>" download>Download</a></div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>
                  <?php
             
 
          } 
          if(!$v || mysqli_num_rows($v) == 0 ) {
            echo "<div>";
            echo "<h2>";
            echo "Book results";
            echo "</h2>";
            echo "</div>";
            echo "<div>";
            echo "<p>No file found</p>";
            echo "</div>";
          } 
          else {
 
 
             //  contain video 

?>
             <div class="container" style="padding-top: 150px;">
                  <div>
                    <h2>Video Results</h2><hr>
                  </div>
            
              <div class="contain">
              <?php 
                            

                            if(mysqli_num_rows($v) > 0) {
                              while($row = mysqli_fetch_array($v)) { 
                                $row['link'] = $link;
                        ?>
                <div class="grid-contain ">
                  <div class="grid-tee">
                    <!-- <img src="img/pdf.jpg" alt="..." class=""> -->
                  </div>
                  <div class="date meta-last">
                            <p style="font-size: 14px;"><?php echo $row['date']; ?> </p>
                          </div>    
                          <div class="post-meta ">
                              <div class="date meta-last">
                              <a href="index.php">
                                
                              <h3 class="h6"><?php echo $row['video_name']; ?> </h3>
                            </a>  
                                <video width="100%" controls src="../admin/<?php echo $row['link'] ?>"></video>
                              </div>
                                   <div class="category"><a href="../admin/<?php echo $row['link'] ?>" download>Download</a></div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>
 
             <?php 
            //  include "video_grid.php";
          }
        }
        
        else {
    

            // <!-- contain Book grid -->
            
            include "books_grid.php";
            

            // <!-- contain audio -->

            
            include "audio_grid.php";
           

            // // <!-- contain video -->

            
            include "video_grid.php";

         } ?>
              
              
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