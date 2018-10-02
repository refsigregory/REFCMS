<?php
defined('BASEPATH') OR exit('Access Denied!');
// Default Title
if(!isset($title)) $title = $this->config->item("site_name"); 
// Show Header
if(!isset($header)) $header = true; 
// Show Navbar
if(!isset($navbar)) $navbar = true; 
// Show Content
if(!isset($content)) $content = true; 
// Show Footer
if(!isset($footer)) $footer = true; 

// Send Data
if (isset($data)) {
    foreach ($data as $key => $value) {
         $data[$key] = $data[$value]; // send $data values to page content
    }
} else {
    $data['data'] = ""; 
}

if (isset($head)) {
    foreach ($head as $key => $value) {
         $head[$key] = $dheadata[$value]; // send $data values to page content
    }
} else {
    $head['data'] = ""; 
}

if (isset($foot)) {
    foreach ($foot as $key => $value) {
         $foot[$key] = $foot[$value]; // send $data values to page content
    }
} else {
    $foot['data'] = ""; 
}

header('X-Powered-By: Refsi Sangkay');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');
header("Access-Control-Allow-Origin: *");
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url() . $this->config->item('sys_prefix');?>-assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url() . $this->config->item('sys_prefix');?>-assets/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
        // Load Header
        if($header) $this->load->view('_templates/header.php', $head);

        // Load Navbar
        if($navbar) $this->load->view('_templates/navbar.php', $navbar);

        // Load Page
        $this->load->view('pages/'.$page);

        // Load Footer
        if($footer) $this->load->view('_templates/footer.php', $footer);
    ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url() . $this->config->item('sys_prefix');?>-assets/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
