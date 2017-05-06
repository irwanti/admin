<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/css/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/css/custom.min.css" rel="stylesheet">

    <style>
      /* Disabled Horizontal Scroll */
      html, body {
      max-width: 100%;
      overflow-x: hidden;
      }
      /* End Disabled Horizontal Scroll */
    </style>

  </head>

  <body>
    <div class="container body">
       
        <!-- top navigation -->
        <div class="top_nav">
          
            <nav>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-user"></i> Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                
              </ul>
            </nav>
          
        </div>
        <!-- /top navigation -->
        
        <!-- page content -->
        <div class="right_col" role="main">
             
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_title">
                    <h2>Gallery</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div> <!-- title-->

                  <div class="x_content">
                  <div class="row">
                      <div class="title_right">
                        <div class="col-md-2 col-sm-2 col-xs-6 form-group pull-right top_search">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <?php 
                          foreach ($query as $row) {
                      ?>
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="<?php echo base_url();?>assets/upload/<?=$row->namafile;?>" alt="image"/>
                            <div class="mask">
                              <p><?=$row->namafile;?></p>
                              <div class="tools tools-bottom">
                                
                                <a data-toggle="modal" data-target="#myModalGallery" onclick="javascript:load_gallery(<?php echo $row->id; ?>)">
                                <i class="fa fa-link"></i></a>
                                
                              </div>
                            </div>
                          </div>
                          <div class="caption">
                            <p><?=$row->ket;?></p>
                          </div>
                        </div>
                      </div>
                      <?php } ?>

                  </div>
                    
                    <?php
                        echo $this->pagination->create_links();
                    ?>
                  
                  </div> <!--x_content-->

                </div>
              </div>
            </div> <!-- Row-->
       
        </div>
        <!-- /page content -->
     
    </div>
   
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/js/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/js/custom.min.js"></script>

    <script type="text/javascript">
      function load_gallery(id) {
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('cimage/detaildata');?>",
          data: "id="+id,
          success: function(response) {
            $("#myModalGallery").html(response);
          }
        });
      }
    </script>

    <div class="modal fade displaycontent" id="myModalGallery">

    <?php include('modal.php'); ?>

  </body>
</html>
