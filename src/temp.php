<?php

    include_once("./php/config.php");
    $text = "
    What is Spare about? Spare (2023) is Prince Harrys highly anticipated memoir, which offers unprecedented insight into life as a royal. With remarkable candor, Harry reflects on his mothers death, his complex relationships with other family members, and his battles with the press.
    ";
    mysqli_query($con, "UPDATE book set description = '$text' where id = 4");

?>