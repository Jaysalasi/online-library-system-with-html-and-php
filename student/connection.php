<?php 

    $db = mysqli_connect("localhost", "root", "", "fut_lib");

    if(!$db) {
        die( "failed to connect" . mysqli_connect_error());
    }
