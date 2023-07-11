<?php

session_start();
    include_once("config.php");
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($con, "SELECT * FROM book WHERE title='$searchTerm' OR Author='$searchTerm' ");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "No book found!";
    }
    echo $output;

?>