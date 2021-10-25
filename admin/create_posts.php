<?php
  include "connection.php";
  include "upload.php";
?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>Create New Posts</title>
    
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <?php 
        include "header.php";
      ?>

      
      <div class="page-content d-flex align-items-stretch"> 

        <!-- Side Navbar -->

        <?php
        include "nav.php";
        ?>
        
          <div class="content-inner w-100">
            <!-- Page Header-->
            <header class="bg-white shadow-sm px-4 py-3 z-index-20">
              <div class="container-fluid px-0">
                <h2 class="mb-0 p-1">Forms</h2>
              </div>
            </header>
            <!-- Breadcrumb-->
            <div class="bg-white">
              <div class="container-fluid">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 py-3">
                    <!-- <li class="breadcrumb-item"><a class="fw-light" href="index.php">Home</a></li>
                    <li class="breadcrumb-item active fw-light" aria-current="page">Forms</li> -->
                  </ol>
                </nav>
              </div>
            </div>
            <!-- Forms Section-->
            <section class="forms"> 
              <div class="container-fluid">
                <div class="row">

                  <!-- Basic Form-->
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-close">
                          <div class="dropdown">
                            <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                          </div>
                        </div>
                        <h3 class="h4 mb-0">Create Post</h3>
                      </div>
                      <div class="card-body">
                        <p class="text-sm">Upload Latest news here</p>

                        <form method="POST" enctype="multipart/form-data"> 
                          <div class="mb-3">
                            <label class="form-label" for="">Title</label>
                            <input class="form-control" id="" name="title" type="text" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="">Message</label>
                            <textarea class="form-control" id="" name="message" type="text" required></textarea>
                          </div>                        
                          <input class="btn btn-primary" type="submit" name="post" value="Post" style="color: #ffffff;">
                        </form>

                      </div>
                    </div>
                  </div>
    
                              
                </div>
              </div>
            </section>
            
            
            
            <!-- Page Footer-->
            <?php 
            include "foot.php";
            ?>

          </div>
      </div>
    </div>
    
  </body>
</html>