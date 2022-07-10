<!DOCTYPE html>
<html>
<?php
include('adminpartials/session.php');
include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/aside.php');
  

  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="articlehandler.php" method="post" enctype="multipart/form-data">
          <h1>Articles</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" placeholder="Enter Product Title" name="title">
                </div>
                <div class="form-group">
                  <label for="picture">Picture</label>
                  <input type="file" id="picture" name="file">
                </div>
                <div class="form-group">
                  <label for="content1">First Paragraph</label>
                  <textarea id="content1" class="form-control" rows="10" placeholder="Enter Content" name="content1"></textarea>
                </div>
                <div class="form-group">
                  <label for="content2">Second Paragraph</label>
                  <textarea id="content2" class="form-control" rows="10" placeholder="Enter Content" name="content2"></textarea>
                </div>
                <div class="form-group">
                  <label for="content3">Third Paragraph</label>
                  <textarea id="content3" class="form-control" rows="10" placeholder="Enter Content" name="content3"></textarea>
                </div>
                <div class="form-group">
                  <label for="content4">Fourth Paragraph</label>
                  <textarea id="content4" class="form-control" rows="10" placeholder="Enter Content" name="content4"></textarea>
                </div>
                <div class="form-group">
                  <label for="content5">Fifth Paragraph</label>
                  <textarea id="content5" class="form-control" rows="10" placeholder="Enter Content" name="content5"></textarea>
                </div> 
                  
                   
                  
                  
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            
</div>
<div class="col-sm-3">
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include('adminpartials/footer.php');
 ?>
</body>
</html>
