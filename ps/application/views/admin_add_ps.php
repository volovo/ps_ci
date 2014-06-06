
           

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


<!--noi dung-->
    <section class="content">
      <div class="container">
      <div class="well well-sm">
    <form enctype="multipart/form-data" action="<?php echo base_url()?>application/controller/admin/add_ps" method="post">
    <label for=""><h3>Tạo mới dịch vụ công</h3></label>
    <div class="row">
      <div class="col-md-12">

 <!-- ------------------------------------chọn cơ quan thực hiện -----------------------------------  -->        <div class="form-group">
        
          <label for="subject">
          Cơ quan thực hiện</label>
          <select required="required" class="form-control" name="coquanId" id="subject">
              <option selected="" value="-1">Chọn 1 cơ quan thực hiện</option>        
            <?php
              for ($x=0; $x<count($cqth); $x++) {
              echo "<option value=".$x.">".$cqth[$x]['ten']."</option>";
           
              }
            ?>          
          </select>
        
  
  <!-- --------------------------------------chọn lĩnh vực------------------------------------------- -->
        <div class="form-group">
        
          <label for="subject">
          Lĩnh vực tương ứng</label>
          <select required="required" class="form-control" name="coquanId" id="subject">
            <option selected="" value="-1">Chọn 1 lĩnh vực tương ứng</option>
                   
          </select>
        </div>
<!-- -----------------------------------Nhập tên dịch vụ công------------------------------------------- -->
        <div class="form-group">
        <div class="form-group">
          <label for="name">
          Tên dịch vụ công</label>
          <input type="text" required="" placeholder="Nhập tên dịch vụ công"  name="tendvc" class="form-control">
        </div>
        

        <label>Chọn văn bản đính kèm </label>
        <input type="file" value="Chọn tệp tin" name="vb">
      </div> <!-- /.col-md-6 -->
      <div>
        <!-- Tài liệu liên quan -->
        <div class="form-group">
          <label for="name">
          Cơ sở pháp lý:</label>
          <textarea placeholder="Cơ sở pháp lý liên quan đến dịch vụ công..." cols="25" rows="3" class="form-control"  name="cspl"></textarea>
        </div>
        <!-- Mô tả chi tiết dịch vụ công -->
        <div class="form-group">
          <label for="name">
          Mô tả dịch vụ công:</label>
          <textarea placeholder="Mô tả dịch vụ công..." cols="25" rows="6" class="form-control"  name="ttmt"></textarea>
        </div>
      </div>
      <div>
        <button id="btnSubmit" class="btn btn-primary pull-right" name="submit" type="submit">
        Lưu lại</button>
      </div>
    </div><!--  /.row -->
  </form> <!-- /form -->
</div>
      </div>
        

    </section>
<!--ket thuc noi dung-->















    <div id="footer"></div>
  </div>










  
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    
</body>
</html>