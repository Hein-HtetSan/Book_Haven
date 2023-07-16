<?php

    include_once("config.php");
    // echo "Hello from add";
    $id = $_GET['id'];
    $sql = "SELECT count FROM cart WHERE bookid = $id";
    $query = mysqli_query($con, $sql);

    if($query){
        $row = mysqli_fetch_assoc($query);
        $item_count = $row['count'] + 1;
        $update = mysqli_query($con, "UPDATE cart SET count = $item_count WHERE bookid = $id");
        if($update){
            header("location: ../template/cart.php");
        }
    }

?>