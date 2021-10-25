<!DOCTYPE html>
<html>
  <head>
    
    <title>Audios</title>
    
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
              <h2 class="mb-0 p-1">Tables</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="bg-white">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                  <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                  <li class="breadcrumb-item active fw-light" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row gy-4">
               
                
                <div class="col-lg">
                  <div class="card mb-0">
                    <div class="card-header">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#">open <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Uploaded Audios</h3>
                    </div>
                    <?php
                      $res = mysqli_query($db, "SELECT * FROM `audio_table` ORDER BY `audio_table`.`date` DESC")
                    ?>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped table-hover">
                          <thead>
                            <tr>
                              <!-- <th>#</th> -->
                              <th>Audio name</th>
                              <th>File</th>
                              <th>Size</th>
                              <th></th>
                              <!-- <th>Username</th> -->
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            while($row = mysqli_fetch_assoc($res)){

                            
                             ?>
                            <tr>
                              <!-- <th scope="row">1</th> -->
                              <td><?php echo $row['audio_name'] ?></td>
                              <td>
                                    <audio controls> 
                                        <source src="<?php echo $row['audio_link'] ?>">
                                    </audio>
                              </td>
                              <td><?php echo $row['size'] ?></td>
                              <td><a href="delete.php?del_audio=<?php echo $row['id'] ?>" class="btn delete">Delete</a></td>
                              
                            </tr>
                           
                          </tbody>
                          <?php
                        }
                        ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>



          <!-- Page Footer-->
          <?php 
          include "foot.php"
           ?>
        </div>
      </div>
    </div>
    </body>
</html>