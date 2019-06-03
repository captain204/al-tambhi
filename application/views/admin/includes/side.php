<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My Admin</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">
              <span class="nav-link">General</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>admin">
                <span class="menu-title">Home</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="<?php echo base_url();?>admin/logout" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Logout</span>
                <i class="icon-layers menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Manage admin</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/add">
                <span class="menu-title">Add admin</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/list">
                <span class="menu-title">List of admin</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Manage graduates</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/add_graduates">
                <span class="menu-title">Add graduate</span>
                <i class="icon-flag menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>admin/list_graduate">
                <span class="menu-title">List of graduates</span>
                <i class="icon-pie-chart menu-icon"></i>
              </a>
            </li>
            <li class ="nav-item nav-category">
              <span class="nav-link">Manage student</span>
            </li>
            <li class="nav-item nav-item">
                <a class="nav-link" href="<?php echo base_url();?>students/add_student">
                  <span class="menu-title">Add student</span>
                  <i class="icon-flag menu-icon"></i>
                </a>
            </li>
            <li class="nav-item nav-item">
                <a class="nav-link" href="<?php echo base_url();?>students/list">
                  <span class="menu-title">List of student</span>
                  <i class="icon-flag menu-icon"></i>
                </a>
            </li>
            <li class="nav-item nav-item">
                <a class="nav-link" href="<?php echo base_url();?>results/add_results">
                  <span class="menu-title">Add result</span>
                  <i class="icon-flag menu-icon"></i>
                </a>
            </li>
        </nav>
