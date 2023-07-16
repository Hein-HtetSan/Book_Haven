<?php

    include_once("config.php");
    $book_id = $_GET['id'];
    $is_include = false;

    $fetch = "SELECT * FROM cart";
    $fetch_query = mysqli_query($con, $fetch);

    if(mysqli_num_rows($fetch_query) == 0){
        $append = "INSERT INTO cart (bookid, count) VALUES ($book_id, 1)";
            $append_query = mysqli_query($con, $append);
            if($append_query){
                header("location:../template/shop.php");
            }
    }else{
        while($row = mysqli_fetch_assoc($fetch_query)){
            if($book_id == $row['bookid']){
                $is_include = true;
            }
        }
        if($is_include){
            $remove = "DELETE FROM cart WHERE bookid = $book_id";
            $remove_query = mysqli_query($con, $remove);
            if($remove_query){
                header("location: ../template/shop.php");
            }
        }else{
            $append = "INSERT INTO cart (bookid, count) VALUES ($book_id, 1)";
            $append_query = mysqli_query($con, $append);
            if($append_query){
                header("location: ../template/shop.php");
            }
        }
        $is_include = false;
    }


?>