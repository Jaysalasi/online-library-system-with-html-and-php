<div class="container" >
                  <div style="padding-top: 150px;">
                    <h2>Recent videos</h2><hr>
                  </div>
            
              <div class="contain">
              <?php 
                            $v = mysqli_query($db, "SELECT * FROM `videos_table`");

                            if(mysqli_num_rows($v) > 0) {
                              while($row = mysqli_fetch_array($v)) { 
         
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
                                <video width="100%" controls src="../das/<?php echo $row['link'] ?>"></video>
                              </div>
                            <div class="category">
                              <a href="../das/<?php echo $row['link']?>" download>Download</a></div>
                          </div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>