<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include ("partials/head.php");
?>
<body class="animsition">
    <?php
    include ("partials/header.php");


?>

    
    <!-- Shoping Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Discussion</th>
                                    <th class="column-2">Started By</th>
                                    <th class="column-3">Replies</th>
                                    <th class="column-4">Last Post</th>
                                    <th class="column-5">Update</th>
                                </tr>
                              
                                 

                                <td class="column-1">
                                    <tr class="table_row">
                                    <br>
                                    <li><a href="forum1.php">Tanaman Hias</a></li>
                                    <li><a href="forum2.php">Tanaman Bunga</a></li>
                                    <li><a href="forum3.php">Tanaman Buah</a></li>
                                    <li><a href="forum4.php">Bouquet Bunga</a></li>
                                    <li><a href="forum5.php">Lain - lain</a></li>
                                    </br>
                                </tr>
                                </td>

                                    <td class="column-2"><?php echo $value['item_name'] ?>;</td>
                                    <td class="column-3">$ <?php echo $value['item_price'] ?></td>
                                    <td class="column-4">
                                        <form action="cartupdate.php" method="POST">
                                            
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input name="quantity" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="<?php echo $value['quantity'] ?>">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-5">
                                    


                                        <button class="btn btn-sm btn-outline-danger" name="update">Update</button>
                                            <input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>"> 




                                            
                                            </form>
                                        </td>
                                </tr>
                              
                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                
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