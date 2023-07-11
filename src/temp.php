<?php

    include_once("./php/config.php");
    $text = "
    The book discusses the power of genetics in determining peoples well-being and traits. It delves into the personal genetic history of Siddhartha Mukherjees family, including mental illness.
    ";
    mysqli_query($con, "UPDATE book set description = '$text' where id = 1");

?>