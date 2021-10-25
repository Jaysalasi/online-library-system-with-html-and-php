<?php
include "connection.php";


    // upload book
    if (isset($_POST['upload_book'])) {
        $target_dir = "uploads/book/";
        $space = basename($_FILES["file"]["name"]);
        $get_ext = $_FILES["file"]["name"];
        $no_space = str_replace(" ", "_", $space);
        $dot = explode(".", $get_ext);
        $file_name = $_POST['book_name'];
        $file_ext = strtolower(end($dot));
        $target_file = $target_dir 
        . date("dmYhis") 
        // . PATHINFO_EXTENSION
        . $file_name
        . "."  . $file_ext
        ; 
        $uploadOk = 1;


        //remove space
        $rem_space = str_replace(" ", "_", $target_file);
        
        // $audioType = pathinfo($target_file,PATHINFO_EXTENSION);
        $file_size = $_FILES["file"]["size"];
        $file_array = ['pdf', 'epub'];
    
        if(! in_array($file_ext,$file_array)) {
            echo "wrong file type";
    
            } elseif($file_size > 1000000) {
                echo "too large";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $rem_space);
            
            $author = $_POST['author'];
            $isbn = $_POST['isbn'];
            $publisher = $_POST['publisher'];
            $dept = $_POST['dept'];
            
                $link = $rem_space;
                    $sqli = "INSERT INTO `books_table` (`book_name`, `author`, `isbn`, `publisher`, `dept`, `size`, `link`) 
                    VALUES ('{$file_name}', '{$file_size}', '{$author}', '{$isbn}', '{$publisher}', '{$dept}', '{$link}')";
                    $result = mysqli_query($db, $sqli);  
            } if ($result) {
                echo "file uploaded";
            }
        } 
      
 

        //upload video

    if (isset($_POST['upload_video'])) {
        $target_dir = "uploads/video/";
        $space = basename($_FILES["file"]["name"]);
        $get_ext = $_FILES["file"]["name"];
        // $no_space = str_replace(" ", "_", $space);
        $dot = explode(".", $get_ext);
        $file_name = $_POST['video_name'];
        $file_ext = strtolower(end($dot));
        $target_file = $target_dir 
        . date("dmYhis") 
        // . PATHINFO_EXTENSION
        . $file_name
        . "."  . $file_ext
        ; 
        $uploadOk = 1;

        //remove space
        $rem_space = str_replace(" ", "_", $target_file);

        $audioType = pathinfo($target_file,PATHINFO_EXTENSION);
        $file_size = $_FILES["file"]["size"];
        $file_array = ['mkv', '3gp', 'm4a', 'mp4'];
    
        if(! in_array($file_ext,$file_array)) {
            echo "wrong file type";
    
            } elseif($file_size > 100000000) {
                echo "too large";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], $rem_space);
                $link = $rem_space;
                    $sqli = "INSERT INTO `videos_table` (`video_name`,`size`, `link`) 
                    VALUES ('{$file_name}', '{$file_size}', '{$link}')";
                    $result = mysqli_query($db, $sqli);  
            } if ($result) {
                echo "file uploaded";
            }
        } 
      
 



    // upload audio

    if (isset($_POST['upload_audio'])) {

        //uploads directory
    $target_dir = "uploads/audio/";
    $space = basename($_FILES["file"]["name"]);

    // retrieve file extension here
    $get_ext = $_FILES["file"]["name"];

    // we remove spaces 
    $no_space = str_replace(" ", "_", $space);

    //here we remove the default file name
    $dot = explode(".", $get_ext);
    $file_name = $_POST['audio_name'];

    //here we add our own filename from the audio_name input
    $file_ext = strtolower(end($dot));

    // here we add date to the name
    $target_file = $target_dir 
    . date("dmYhis") 
    // . PATHINFO_EXTENSION
    . $file_name
    . "."  . $file_ext
    ; 
    $uploadOk = 1;
    
    //remove space
    $rem_space = str_replace(" ", "_", $target_file);
    $audioType = pathinfo($target_file,PATHINFO_EXTENSION);
    $file_size = $_FILES["file"]["size"];
    $file_array = ['opus', 'mp3'];

    if(! in_array($file_ext,$file_array)) {
        echo "wrong file type";

        } elseif($file_size > 10000000) {
            echo "too large";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], $rem_space);
            $link = $rem_space;
                $sqli = "INSERT INTO `audio_table` (`audio_name`,`size`, `audio_link`) 
                VALUES ('{$file_name}', '{$file_size}', '{$link}')";
                $result = mysqli_query($db, $sqli);  
                if ($result) {
            echo "file uploaded";
        }
        } 
    } 
  



    // post news

    if(isset($_POST['post'])) {
        $title = $_POST['title'];
        $message = $_POST['message'];

        //removing special characters
        $trim_title = mysqli_real_escape_string($db, $title);
        $trim_message = mysqli_real_escape_string($db, $message);
        


        $sqli = "INSERT INTO `posts` (`title`, `message`) 
        VALUES ('{$trim_title}','{$trim_message}')";
        $result = mysqli_query($db, $sqli);

        if($result) {
            echo "posted";
        } else {
            echo mysqli_error($db);
            // echo "nope";
        }
    }









    