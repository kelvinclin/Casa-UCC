<?php
session_start();
if(!isset($_SESSION['adminId'])){
  header("Location: index");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_ad.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    

    <title>Administrator | Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a href="" class="navbar-brand hide-on-med-and-down">CASA UCC</a>
      <a href="javascript:void(0)" id="menu" class="hide-on-large-only bar" style="color:#fff"><span class="fa fa-bars"></span></a>
      <ul class="nav">
        <li class="nav-item">
          <a href="logout"><button type="button" class="btn btn-outline-success btn-custom1">Sign out</button></a>
        </li>
      </ul>
    </nav>
    <section class="dropdownLoader">
      <i class="fa fa-check icon-success"></i>
      <i class="fa fa-warning icon-error"></i>
      <img src="../assets/img/dropdown-loader.gif" class="dropdown-loader">
      <span class="dropdown-text"><b></b></span>
    </section>

    <section class="side-div" id="sideNav">
      <br>
      <a href="javascript:void(0)" style="color:#fff" class="closeSide"><span class="fa fa-close"></span></a>
        <ul class="side-div-list">
            <a href="dashboard" class="nav-link"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="post" class="nav-link"><i class="fa fa-eye"></i> All Post</a>
            <a href="front" class="nav-link"><i class="fa fa-users"></i> Front Post</a>
            <a href="users" class="nav-link"><i class="fa fa-users"></i> Users</a></a>
            <a href="gallery" class="nav-link"><i class="fa fa-users"></i> Gallery Uploads</a>
            <a href="view" class="nav-link"><i class="fa fa-eye"></i> View Gallery Images</a>
            <a href="executive" class="nav-link"><i class="fa fa-address-card"></i> Executive Post</a>
            <a href="members-exec"  class="nav-link"><i class="fa fa-eye"></i> View Executives</a>
            <a href="postData"  class="nav-link"><i class="fa fa-address-card"></i> Page Writing</a>
          </ul>
    </section>
