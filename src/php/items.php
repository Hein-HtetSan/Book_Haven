


<?php
    session_start();
    include("config.php");

    $sql = mysqli_query($con, "SELECT * FROM book");
    $output = "";


    if(mysqli_num_rows($sql) == 0){
        $output .= "No items here!";
    }elseif(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }
    echo $output;

?>

