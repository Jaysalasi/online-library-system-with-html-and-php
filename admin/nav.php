<?php 
    // session_start();
    include "connection.php";
    

?>
<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      
      
        <!-- Side Navbar -->
        <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center py-4 px-3">
            <!-- <img class="avatar shadow-0 img-fluid rounded-circle" src="img/avatar-1.jpg" alt="..."> -->
            <div class="ms-3 title">
              <h1 class="h4 mb-2"><?php echo $_SESSION['login_user']; ?></h1>
              <!-- <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Web Designer</p> -->
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <!-- <span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span> -->
          <ul class="list-unstyled py-4">
            <li class="sidebar-item"><a class="sidebar-link" href="index.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#real-estate-1"> </use>
                </svg>Home </a></li>
            
            <li class="sidebar-item"><a class="sidebar-link" href="uploads.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#survey-1"> </use>
                </svg>Uploads</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown" data-bs-toggle="collapse"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#browser-window-1"> </use>
                </svg>Data </a>
              <ul class="collapse list-unstyled " id="exampledropdownDropdown">
                <li><a class="sidebar-link" href="audio_table.php">Audios</a></li>
                <li><a class="sidebar-link" href="books_table.php">Books</a></li>
                <li><a class="sidebar-link" href="students_table.php">Students</a></li>
                <li><a class="sidebar-link" href="Videos_table.php">Videos</a></li>
                <li><a class="sidebar-link" href="post_table.php">Posts</a></li>
              </ul>
            </li>
            <li class="sidebar-item"> <a class="sidebar-link" href="create_posts.php"> 
                <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                  <use xlink:href="#imac-screen-1"> </use>
                </svg>Create Posts</a>
              </li>
           
          </ul>
          
        </nav>
       
     
    </div>
    
  </body>
</html>