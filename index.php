<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title> Data Mahasiswa </title>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> YOU SEE ME! </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            See Below!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">I</a></li>
            <li><a class="dropdown-item" href="#">Love</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">You</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> OG INHUMAN </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> Ready for Searching! </button>
      </form>
    </div>
  </div>
</nav>

<div class="container data-mahasiswa mt-5">
    
    <table class="table table-striped">
      
      <thead>

        <tr>

          <th scope="col"> No.</th>

          <th scope="col"> Name </th>

          <th scope="col"> Student Number </th>

          <th scope="col"> Address </th>

          <th scope="col"> Edit Data </th>

        </tr>

      </thead>

      <tbody>

        <?php

        include 'config.php';

        $no = 1;

        $mahasiswa = mysqli_query($koneksi, "select * from mahasiswa");

        while ($data = mysqli_fetch_array($mahasiswa)) {

          ?>

          <tr>

              <td><?php echo $no++; ?></td>

              <td><?php echo $data['name']; ?></td>

              <td><?php echo $data['student_number']; ?></td>

              <td><?php echo $data['address']; ?></td>

              <td>

                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white"> EDIT </a>

                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure About This?')"> Hapus </a>
              
              </td>

          </tr>

        <?php
        
        }

        ?>

      </tbody>

    </table>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>

</html>