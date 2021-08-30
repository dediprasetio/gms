<!DOCTYPE html>
<html lang="en">

<!-- Start Head -->
<?php $this->load->view('template/head'); ?>
<!-- End Head -->

<body class="nav-md">
  <div class="container body">
    <div class="main_container">

      <!-- Start navbar -->
      <?php $this->load->view('template/navbar') ?>
      <!-- End Navbar -->

      <!-- top navigation - Header-->
      <?php $this->load->view('template/header') ?>
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <!-- Start Breadcrumbs -->
        <div class="row ">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <nav aria-label="breadcrumb " class="second ">
              <ol class="breadcrumb indigo lighten-6 first px-md-4">
                <?= $breadcrumb ?>
              </ol>
            </nav>
          </div>

          <!-- <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-2">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <a type="button" class="btn btn-info btn-block btn-sm text-light">Booth Office</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <a type="button" class="btn btn-info btn-block btn-sm text-light">Branch Office</a>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <a type="button" class="btn btn-info btn-block btn-sm text-light">Center Office</a>
              </div>
            </div>
          </div> -->
        </div>
        <!-- End Breadcrumbs -->
        <?php
        $this->load->view($content);
        ?>

      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php
      $this->load->view('template/footer');
      ?>
      <!-- /footer content -->
    </div>
  </div>
  <?php
  $this->load->view('template/plugins');
  if (!empty($javascript_file)) {
    echo $javascript_file;
  }
  ?>
  <script>
    console.log(sessionStorage.getItem("id"));
  </script>

</body>

</html>