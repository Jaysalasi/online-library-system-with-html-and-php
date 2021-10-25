<div class="container">
                <div style="padding-top: 100px;">
                    <h2>Recent books</h2><hr>
                  </div>
            
            
              <div class="contain">
              <?php 
                            $b = mysqli_query($db, "SELECT * FROM `books_table`");

                            if(mysqli_num_rows($b) > 0) {
                              while($row = mysqli_fetch_array($b)) { 
                                $id = $row['id'];
                                $down = $row['link'];
         
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
                                    <div style="font-size: 14px;">

                                      <p class="text-muted" ><?php echo $row['author']; ?> </p>  
                                      <p class="text-muted"><?php echo $row['isbn']; ?> </p>  
                                    </div>
                                </div>
                              
                              <div class="category"><a href="../admin/<?php echo $down ?>" download>Download</a></div>
                          </div>
                </div>
                <?php 
                    }
                  }
                  ?>
              </div>
          </div>