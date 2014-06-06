<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/admin.css" type="text/css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css" type="text/css" rel="stylesheet">
  <title>Trang ADMIN</title>
</head>
<body>
  <div id="wrapper">
    

    <header id="navigation">
      <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">ADMIN</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
<!--quản lí DVC-->
                <li class="dropdown ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lí dịch vụ công <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Xem</a></li>
                        <li><a href="#">Tạo mới</a></li>                                      
                      </ul>
                </li>
<!--faq DVC-->
                  <li><a href="#">Trả lời công dân</a></li>
                  
                  <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Câu Hỏi Thường Gặp <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Xem</a></li>
                        <li><a href="#">Tạo mới</a></li>                                      
                      </ul>
                  </li>
                  <li><a href="#">Dịch vụ công trực tuyến</a></li>
                </ul>
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </header>



    <section class="content">
          <table cellpadding="0" cellspacing="0" border="0" id="datatables" class="datatable table table-striped table-bordered" id="">
          <thead>
            <tr>
              <th>Rendering engine</th>
              <th>Browser</th>
              <th>Platform(s)</th>
              <th>Engine version</th>
              <th>CSS grade</th>
            </tr>
          </thead>
          <tbody>
            <tr class="gradeX even">
              <td>Trident</td>
              <td>
                Internet
                 Explorer 
                4.0
                </td>
              <td>Win 95+</td>
              <td class="center">4</td>
              <td class="center">X</td>
            </tr>
            <tr class="gradeC odd">
              <td>Trident</td>
              <td>Internet
                 Explorer 5.0</td>
              <td>Win 95+</td>
              <td class="center">5</td>
              <td class="center">C</td>
            </tr>
          </tbody>
        </table>

        </section>
    <div id="footer"></div>
  </div>










  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/aadmin.js"></script>
    
</body>
</html>