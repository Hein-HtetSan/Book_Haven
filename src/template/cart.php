<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Haven | Shopping Cart </title>
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="icon" href="../icons/svg/logo.svg">
</head>

<body>
    
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 d-flex align-items-center justify-content-start navbar px-3 py-3">
                <img src="../icons/svg/logotext.svg" alt="">
            </div>
            <div class="col-12 d-flex align-items-end justify-content-between header px-3 px-md-5  border-bottom">
                <h4><span><i class="bi bi-cart-fill"></i></span> Shopping Cart</h4>
                <a href="./shop.php" class="back z-2">Back</a>
            </div>

            <div class="col-12 d-flex align-items-start justify-content-center py-3 ">
                <div class="row item-wrapper px-3 py-2">


                <?php
                
                    include_once("../php/config.php");
                    $status = "d-none";
                    $i = 0;
                    $arr = [];
                    $sql = "SELECT * FROM cart";
                    $query = mysqli_query($con, $sql);

                    if(mysqli_num_rows($query) != 0){
                        $status = "d-none";
                        while($row = mysqli_fetch_assoc($query)){
                            $arr[$i] = $row['book_id'];
                            $i++;
                        }
                        for($j=0; $j<count($arr); $j++){
                            // echo $arr[$j];
                            $fetch_book = mysqli_query($con, "SELECT * FROM book WHERE id = $arr[$j]");
                            $row2 = mysqli_fetch_assoc($fetch_book);
                            $title = $row2['title'];
                            $price = $row2['price'];
                            $img = $row2['cover_img'];
                            $id = $row2['id'];
                            // $count = $row2['count'];

                            echo "
                            <div class=' itembox d-flex align-items-center justify-content-center px-3 py-2 mb-3'>
                                <!-- image  -->
                                <div class='img-box shadow me-5' style='background: url(../books/$img);
                                background-position: center; background-size: cover; background-repeat: no-repeat;'></div>
                                <!-- content  -->
                                <div class='d-flex align-items-center justify-content-start flex-column '>
                                    <h3 class='mb-3 text-start'>$title</h3>
                                    <span class='border-bottom mb-3 text-sm text-start'>Price : <span class='price'>$$price</span></span>
                                    <!-- <small class='mb-2 '>Quantity</small> -->
                                    <div class='count position-relative shadow mb-3 text-start'>
                                        <a href='' class='minus'>-</a>
                                        <span class='number shadow'>1</span>
                                        <a href='../php/add.php?id=$id' class='add'>+</a>
                                    </div>
                                    <div class='btn-gp d-flex align-items-center justify-content-start mt-2 text-start'>
                                        <a href='' class='me-3 select ' id='select'>Select</a>
                                        <a href='../php/cart2.php?id=$id' class='mb-2'><i class='bi bi-trash'></i></a>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                        $arr = [];
                    }else{
                        $status = "d-block";
                    }
                
                
                ?>

                    <!-- item  -->
                    
                    <!-- item  -->

                    

                    
                     
                    <div class="status d-flex align-items-center <?php echo $status;?>">
                        <p>Blank Cart!<br>Please make some choice!</p>
                    </div>



                    <div class="mb-5"></div>
                    <div class="mb-5"></div>
                    <div class="mb-5"></div>
                    <div class="mb-5"></div>
                    <div class="mb-5"></div>
                    <div class="mb-5"></div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center footer py-4">
                <div class="footer-wrapper px-5 py-5 d-flex align-items-center justify-content-between">
                    <div class="footer_item_price d-flex flex-column flex-md-row align-items-start justify-content-center text-center text-light py-3">
                        <h6 class="me-md-3 me-0">Items : <span>1</span></h6> 
                        <h6>Prices : $<span>50</span></h6>
                    </div>
                    <a href="" class="shop">Shop</a>
                </div>
            </div>
        </div>


    </div>

    <script src="../assets/js/cart.js"></script>
</body>
</html>