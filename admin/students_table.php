<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Students Data</title>
    
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
              <h2 class="mb-0 p-1">Students data</h2>
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
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <!-- <h3 class="h4 mb-0">Striped table with hover effect</h3> -->
                    </div>
                    <?php 
                    $res = mysqli_query($db, "SELECT * FROM `student_table` ORDER BY `student_table`.`f_name` ASC")
                    ?>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table mb-0 table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Student ID</th>
                              <th>Department</th>
                              <th>email</th>
                              <th>Phone</th>
                              <th></th>
                            </tr>
                          </thead>
                          <?php
                          while($row = mysqli_fetch_assoc($res)) {

                          
                          ?>
                          <tbody>
                            
                            <tr>
                              <!-- <th class="border-bottom-0" scope="row">3</th> -->
                              <td class="border-bottom-0"></td>
                              <td class="border-bottom-0"><?php echo $row['f_name'] ?></td>
                              <td class="border-bottom-0"><?php echo $row['l_name'] ?></td>
                              <td class="border-bottom-0"><?php echo $row['student_id'] ?></td>
                              <td class="border-bottom-0"><?php echo $row['dept'] ?></td>
                              <td class="border-bottom-0"><?php echo $row['email'] ?></td>
                              <td class="border-bottom-0"><?php echo $row['phone'] ?></td>
                              <!-- <td class="border-bottom-0"><a href="edit_student.php?es=<?php
                              //  echo $row['id']
                                ?>">Edit</a></td> -->
                              <td class="border-bottom-0"><a href="delete.php?del_stud=<?php echo $row['id'] ?>" class="btn btn-delete">Delete</a></td>
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
        include "foot.php";
      ?>

      
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>