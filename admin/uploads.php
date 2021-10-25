<?php
  include "connection.php";
  include "upload.php";
?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>Uploads</title>
    
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
                        <h3 class="h4 mb-0">Audio Upload</h3>
                      </div>
                      <div class="card-body">
                        <p class="text-sm">Upload your audio files here</p>

                        <form method="POST" enctype="multipart/form-data"> 
                          <div class="mb-3">
                            <label class="form-label" for="">Audio name</label>
                            <input class="form-control" id="" name="audio_name" type="text" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="">FIle upload</label>
                            <input class="form-control" id="" name="file" type="file" required>
                          </div>                        
                          <input class="btn btn-primary" type="submit" name="upload_audio" value="upload">
                        </form>

                      </div>
                    </div>
                  </div>
    
                  <!-- Video Form-->
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-close">
                          <div class="dropdown">
                            <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                            <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                          </div>
                        </div>
                        <h3 class="h4 mb-0">Video Upload</h3>
                      </div>
                      <div class="card-body">
                        <p class="text-sm">Upload your video files here</p>

                        <form method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">Video Name</label>
                            <input class="form-control" id="exampleInputPassword1" name="video_name" required type="text">
                          </div>
                          <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">Add file</label>
                            <input class="form-control" id="formFile" name="file" type="file" required>
                          </div>
                          <input class="btn btn-primary" type="submit" name="upload_video">
                        </form>

                      </div>
                    </div>
                  </div>
                  
                    <!-- Book Form-->
                    <div class="col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <div class="card-close">
                            <div class="dropdown">
                              <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                              <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                            </div>
                          </div>
                          <h3 class="h4 mb-0">Book Upload</h3>
                        </div>
                        <div class="card-body">
                          <p class="text-sm">upload your book files here.</p>
                          
                          <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                              <label class="form-label" for="">Book name</label>
                              <input class="form-control" id="" name="book_name" type="text" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="">Author</label>
                              <input class="form-control" id="" name="author" type="text" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="">ISBN</label>
                              <input class="form-control" id="" name="isbn" type="text" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="">Publisher</label>
                              <input class="form-control" id="" name="publisher" type="text" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="">Department</label>
                              <input class="form-control" id="" name="dept" type="text" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="">Add file</label>
                              <input class="form-control" id="" name="file" type="file" required>
                            </div>
                            <input class="btn btn-primary" type="submit" name="upload_book">
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