


<?php
    session_start();
    include("config.php");

    $sql = mysqli_query($con, "SELECT * FROM book LEFT JOIN wishlist ON book.id = wishlist.book_id LEFT JOIN cart ON book.id = cart.bookid");
    $output = "";


    if(mysqli_num_rows($sql) == 0){
        $output .= "No items here!";
    }elseif(mysqli_num_rows($sql) > 0) {
        include "data.php";
    }
    echo $output;

?>

