 <?php
                                    session_start();
                                    include("customersession.php");
                                    include('../partials/connect.php');
                                    $customerid=$_SESSION['customerid'];

                                    $target = "../uploads/";
                                            $file_path = $target.basename($_FILES['receipt']['name']);
                                            $file_name = $_FILES['receipt']['name'];
                                            $file_tmp = $_FILES['receipt']['tmp_name'];
                                            $file_store = "../uploads/" . $file_name;

                                    move_uploaded_file($file_tmp, $file_store);

                                    $sql="INSERT INTO banktransfer(customerid_pay, receipt) VALUES ('$customerid','$file_path')";

                                    $connect->query($sql);
                                    echo "<script>alert('Bukti Pemabayaran Terkirim');
                                    window.location.href='../userproduct.php';
                                    </script>";


                                ?>        