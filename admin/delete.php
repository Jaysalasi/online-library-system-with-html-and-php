<?php
include "connection.php";


//delete post

if(isset($_GET['del_post'])) {
    $id = $_GET['del_post'];
    // $update = true ;
    $res = mysqli_query($db, "DELETE FROM `posts` WHERE id=$id");
    ?>
    <script type="text/javascript">
          alert("Deleted Successfully");
        </script>
    <?php
    header("Location: post_table.php");
}

?>


<?php 
//delete audio
if(isset($_GET['del_audio'])) {
  $id = $_GET['del_audio'];
  // $update = true ;
  $res = mysqli_query($db, "DELETE FROM `audio_table` WHERE id=$id");
  ?>
  <script type="text/javascript">
        alert("Deleted Successfully");
      </script>
  <?php
  header("Location: audio_table.php");
}

?>




<?php 
//delete books
if(isset($_GET['del_book'])) {
  $id = $_GET['del_book'];
  // $update = true ;
  $res = mysqli_query($db, "DELETE FROM `books_table` WHERE id=$id");
  ?>
  <script type="text/javascript">
        alert("Deleted Successfully");
      </script>
  <?php
  header("Location: books_table.php");
}

?>




<?php 
//delete video
if(isset($_GET['del_vid'])) {
  $id = $_GET['del_vid'];
  // $update = true ;
  $res = mysqli_query($db, "DELETE FROM `videos_table` WHERE id=$id");
  ?>
  <script type="text/javascript">
        alert("Deleted Successfully");
      </script>
  <?php
  header("Location: videos_table.php");
}

?>




<?php 
//delete student
if(isset($_GET['del_stud'])) {
  $id = $_GET['del_stud'];
  // $update = true ;
  $res = mysqli_query($db, "DELETE FROM `student_table` WHERE id=$id");
  ?>
  <script type="text/javascript">
        alert("Deleted Successfully");
      </script>
  <?php
  header("Location: student_table.php");
}

?>