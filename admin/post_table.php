<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Posts</title>
    
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
              <h2 class="mb-0 p-1">Posts</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="bg-white">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3">
                  <!-- <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                  <li class="breadcrumb-item active fw-light" aria-current="page">Tables</li> -->
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
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Striped table with hover effect</h3>
                    </div>
                    <?php 
                    $res = mysqli_query($db, "SELECT * FROM `posts` ORDER BY `posts`.`date` DESC")
                    ?> 
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped table-hover">
                          <thead>
                            <tr>
                              <!-- <th>#</th> -->
                              <th>Post Title</th>
                              <th>Message</th>
                              <th>Date</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <?php 
                          while($row = mysqli_fetch_assoc($res)) {

                          ?>
                          <tbody>

                            <tr>
                              <!-- <th class="border-bottom-0" scope="row">3</th> -->
                              <td class=""><?php echo $row['title'] ?></td>
                              <td class=""><?php echo$row['message'] ?></td>
                              <td class=""><?php echo $row['date'] ?></td>
                              <td class=""><a href="edit.php?edit_post=<?php echo $row['id'] ?>"><button class="btn">Edit</button></a></td>
                              <td class=""><a href="delete.php?del_post=<?php echo $row['id'] ?>"><button class="btn">Delete</button></a></td>
                              <!-- <td class="border-bottom-0">the Bird</td>
                              <td class="border-bottom-0">@twitter</td> -->
                            </tr>
                          </tbody>
                        <?php 
                        } ?>
                        </table>
                      </div> 
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </section>

          
          <!-- Page Footer-->
          <?php include "foot.php"; ?>
        </div>
      </div>
    </div>
    
  </body>
</html>