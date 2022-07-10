<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("handler/customersession.php");
include ("partials/head.php");
?>
<body class="animsition">
    <?php
    include ("partials/userheader.php");


?>


    <br>
    <br>
    <br>
    <!-- Shoping Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-3">Upload Bukti Pembayaran</th>
                                </tr>
                              
                                


                                <tr class="table_row">
                                    
                                    <td class="column-3">
                                           

                                
                                <form role="form" action="handler/transferhandler.php" method="post" enctype="multipart/form-data">
              
                                    
                                      <div class="form-group">
                                      <label for="receipt">File input</label>
                                      <input type="file" id="receipt" name="receipt">
                                      </div>  
                                  <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>

                                </td>
                              </tr>

                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                
                            </div>
                            
                        </form>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
        

    <?php
    include('partials/footer.php');
    ?>
</body>
</html>