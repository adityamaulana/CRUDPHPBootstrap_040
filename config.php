<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

if(mysqli_connect_error()) {

    echo "Failed Database Connect : " . mysqli_connect_error();

}