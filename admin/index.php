<!DOCTYPE html>
<html>
  <head>
    
    <title>Dashboard</title>
    
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
              <h2 class="mb-0 p-1">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="pb-0">
            <div class="container-fluid">
              <div class="card mb-0">
                <div class="card-body">
                  <div class="row gx-5 bg-white">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-violet">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#user-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Students</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-violet" role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">


                        <!-- count number of registered students, books, audios, and videos -->
                          <?php
                            $s = mysqli_query($db, "SELECT COUNT(*) FROM student_table");
                            $row_s = mysqli_fetch_array($s);
                            echo $row_s[0];
                            ?></strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-red">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#survey-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Books</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-red" role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">
                          <?php
                          //books
                            $b = mysqli_query($db, "SELECT COUNT(*) FROM books_table");
                            $row_b = mysqli_fetch_array($b);
                            echo $row_b[0];
                            ?></strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-green">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#numbers-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Videos</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-green" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">
                          <?php
                            $v = mysqli_query($db, "SELECT COUNT(*) FROM videos_table");
                            $row_v = mysqli_fetch_array($v);
                            echo $row_v[0];
                            ?></strong></div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6 py-4">
                      <div class="d-flex align-items-center">
                        <div class="icon flex-shrink-0 bg-orange">
                          <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#list-details-1"> </use>
                          </svg>
                        </div>
                        <div class="mx-3">
                          <h6 class="h4 fw-light text-gray-600 mb-3">Audios</h6>
                          <div class="progress" style="height: 4px">
                            <div class="progress-bar bg-orange" role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="number"><strong class="text-lg">
                          <?php
                            $a = mysqli_query($db, "SELECT COUNT(*) FROM audio_table");
                            $row_a = mysqli_fetch_array($a);
                            echo $row_a[0];
                            ?></strong></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         
                   
          <!-- Updates Section   -->
          <section>
            <div class="container-fluid">
              <div class="row gy-4">
                <!-- Recent Updates-->
                <div class="col-lg-4">
                  <div class="card mb-0">
                    <div class="card-header position-relative px-4">
                      <div class="card-close">
                        <div class="dropdown">
                          <button class="dropdown-toggle text-sm" type="button" id="closeCard1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                          <div class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="closeCard1"><a class="dropdown-item py-1 px-3 remove" href="#"> <i class="fas fa-times"></i>Close</a><a class="dropdown-item py-1 px-3 edit" href="#"> <i class="fas fa-cog"></i>Edit</a></div>
                        </div>
                      </div>
                      <h3 class="h4 mb-0">Recent Updates</h3>
                    </div>
                    
                    <div class="card-body p-0">
                        <!-- Item-->
                        <div class="p-3 d-flex justify-content-between">
                          <div class="d-flex"><i class="fas fa-rss text-gray-600"></i>
                          
                            <div class="ms-3">
                                <?php 
                              $res = mysqli_query($db, "SELECT * FROM `posts` ORDER BY `posts`.`date` DESC");
                              while($row = mysqli_fetch_assoc($res)) {  
                              ?>      
                                      <h5 class="fw-normal text-gray-600 mb-1"><?php echo $row['title'] ?></h5>
                                      <p class="mb-0 text-xs text-gray-500"><?php echo $row['message'] ?></p>
                                      <?php
                              }
                              ?>
                            </div>
                          </div>
                          <div class="text-end ms-2"><strong class="d-block lh-1 h2 mb-0 text-gray-500">24</strong><small class="d-block lh-1 text-gray-500">May</small></div>
                        </div>
                        
                    </div>
                  </div>
                </div>
                  
                <!-- Daily Feeds -->
                <div class="col-lg-4">
                  <div class="card mb-0">
                    
                  </div>
                </div>
                <!-- Recent Activities -->
                
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <?php 
          include "foot.php"
           ?>
           
  </body>
</html>