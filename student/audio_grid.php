<div class="container" >
                  <div style="padding-top: 150px;">
                    <h2>Recent audios</h2><hr>
                  </div>
            
              <div class="contain">
              <?php 
                            $a = mysqli_query($db, "SELECT * FROM `audio_table`");

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
                            <div class="category">
                              <a href="../admin/<?php echo $row['audio_link']; ?>" download>Download</a></div>
                          </div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>