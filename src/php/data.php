

<?php

    include_once("config.php");
    $user_id = $_SESSION['usr_id'];
    $is_include_in_wishlist = false;
    
    while($row = mysqli_fetch_assoc($sql)){

        $heart = "d-block";
        $heart_fill = "d-none";
        $cart = "d-block";
        $cart_fill = "d-none";
        $title = $row['title'];
        $price = $row['prices'];
        $img = $row['cover_img'];
        $id = $row['id'];
        $w_id = $row['book_id'];
        $c_id = $row['bookid'];


        if($w_id != null){
            $heart = "d-none";
            $heart_fill = "d-block";
        }else{
            $heart = "d-block";
            $heart_fill="d-none";
        }

        if($c_id != null){
            $cart = "d-none";
            $cart_fill = "d-block";
        }else{
            $cart = "d-block";
            $cart_fill="d-none";
        }

        

        $output .= "
        <div class='col-6 col-md-3 col-lg-2 p-3 text-center item'>
            <a href='./product_detail.php?id=$id' class='d-flex align-items-center justify-content-center'>
                <div class='image shadow' style='background: url(../books/$img);
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    border: 2px solid #999'></div>
            </a>
            <!-- <div class='mt-2'></div> -->
            <a href='' class='name px-lg-3 px-1'>$title</a>
                <div class='foot w-100 d-flex align-items-center justify-content-between px-lg-4 px-2'>
                    <a href='#' class='price'>$$price</a>
                <div class='btn-gp d-flex align-items-center justify-content-center mb-2'>
                    <a href='../php/wishlist.php?id=$id&usr_id=$user_id' class='me-1 wishlist'>
                        <i class='bi bi-heart add-wishlist $heart'></i>
                        <i class='bi bi-heart-fill text-danger added-wishlist $heart_fill'></i>
                    </a>
                    <a href='../php/cart.php?id=$id&usr_id=$user_id' class='cart mb-1'>
                        <i class='bi bi-cart $cart'></i>
                        <i class='bi bi-cart-fill text-warning  $cart_fill' ></i>
                    </a>
                </div>
            </div>
        </div>
        ";
    }

?>
