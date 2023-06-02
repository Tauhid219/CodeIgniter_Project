<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - RezaCorporate</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php 
  $this->load->view('admin/header'); 
  ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php
  $this->load->view('admin/sidebar');
  ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Home Edit</h5>

            <form action="<?php echo base_url('Welcome/home_update/'.$homedit->id) ?>" method="post" enctype="multipart/form-data">
            <!-- Table with hoverable rows -->
            <table class="table table-hover">
            <tbody>
                <tr>
                <th scope="row">Headline</th>
                <td><textarea class="form-control" style="height: 50px" name="headline"><?php echo $homedit->headline ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Subtitle</th>
                <td><textarea class="form-control" style="height: 50px" name="subtitle"><?php echo $homedit->subtitle ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Target 1</th>
                <td><textarea class="form-control" style="height: 40px" name="target1"><?php echo $homedit->target1 ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Target 2</th>
                <td><textarea class="form-control" style="height: 40px" name="target2"><?php echo $homedit->target2 ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Target 3</th>
                <td><textarea class="form-control" style="height: 40px" name="target3"><?php echo $homedit->target3 ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Target 4</th>
                <td><textarea class="form-control" style="height: 40px" name="target4"><?php echo $homedit->target4 ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Target 5</th>
                <td><textarea class="form-control" style="height: 40px" name="target5"><?php echo $homedit->target5 ?></textarea></td>
                </tr>
                <tr>
                <th scope="row">Action</th>
                <td>
                <button type="submit" class="btn btn-primary">Update</button>
                </td>
                </tr>
            </tbody>
            </table>
            <!-- End Table with hoverable rows -->
            </form>

        </div>
    </div>
    </section>

  </main><!-- End #main -->
  
  <!-- ======= Footer ======= -->
  <?php
  $this->load->view('admin/footer');
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>