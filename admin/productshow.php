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
      <h2>Product List</h2> 

      

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row"> 
            <div class ="col-sm-3">

              <?php
              include('../partials/connect.php');
              $sql="select * from products";
              $results=$connect->query($sql);
              while($final=$results->fetch_assoc()){ ?>

                <a href="proshow.php?pro_id=<?php echo $final['id']?>">
                <h3> <?php echo $final['id'] ?> : <?php echo $final['name']?></h3><br> 
                </a>

                <a href="proupdate.php?up_id=<?php echo $final['id'] ?>">
                <button>Update</button>
                </a>

                <a href="prodelete.php?del_id=<?php echo $final['id'] ?>">
                <button style="color:red">Delete</button>
                </a><br><br><br>

              <?php }
              ?>

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

    

    


    