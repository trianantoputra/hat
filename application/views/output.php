<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Mexican Hat</title>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url(); ?>" class="logo"><b>A<span>NN</span></b></a>
      <!--logo end-->
      
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          
          <h5 class="centered">Main</h5>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Mexican Hat</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Mexican Hat</h3>
        <!-- page start-->
        <form action="<?php echo base_url();?>" method='post'>
          <button type="Submit" class="btn btn-theme02">Kembali</button>
        </form>
        <div class="flot-chart">
          <!-- page start-->
          <div class="row mt">
            <?php 
              if(isset($data2))
              {
                $data = array('data2' => $data2);
                $this->load->view('tabel',$data);
              }
            ?>
            <?php  
              if(isset($data1))
              {
                $data = array(
                'data1' => $data1,
                'data3' => $data3,
                'data4' => $data4);
                //$data = array('data1' => $data1);
                $this->load->view('grafik',$data);
              }
            ?>
          </div>
          <!-- row -->
          <div class="row mt">
            <?php 
              if(isset($data2))
              {
                $data = array(
                  'data2' => $data2,
                  'data_step' => $data_step);
                $this->load->view('tabel_perhitungan',$data);
              }
              if(isset($data2))
              {
                $data = array(
                  'data2' => $data2,
                  'data_step' => $data_step);
                $this->load->view('tabel_perhitungan_value',$data);
              }
              if(isset($data2))
              {
                $data = array(
                  'data2' => $data2,
                  'data_step' => $data_step);
                $this->load->view('tabel_fungsi',$data);
              }
            ?>
          </div>
          <!-- row -->
        </div>
        <!--/flot-chart -->
        <!-- page end-->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url();?>assets/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.stack.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.crosshair.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flotchart-conf.js"></script>

</body>

</html>
