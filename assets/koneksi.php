<?php

    $con = mysqli_connect("localhost","root","","test");

    if(!$con){
        die("Gagal Terhubung Database : " .mysqli_connect_error());
    }
