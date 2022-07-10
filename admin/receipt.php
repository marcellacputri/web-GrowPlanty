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
      <div>
        <a href="productshow.php" class="logo">
            <img src="../images/icons/growplanty.png" alt="IMG-LOGO">
          </a>
      </div>
      <hr>
      <h2>Payment Approved</h2> <br> <br> 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-9">


          <?php
          include("../partials/connect.php");
          $sql="select * from banktransfer";

          $results=$connect->query($sql);
          while($final=$results->fetch_assoc()){?>

            <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="<?php echo $final['receipt'] ?>" alt="No File" style="height:300px; width:300px">
            </div>
            <div class="block2-txt flex-w flex-t p-t-14">

              <div class="block2-txt-child1 flex-col-l ">
                <h3>  
                  Customer ID : <?php echo $final['customerid_pay'] ?>
                </h3>
              </div>
            </div>
          </div>
          <br>
          <br>
          <hr>




          <?php } ?>


          
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
