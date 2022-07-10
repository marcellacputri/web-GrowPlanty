<!DOCTYPE html>
<html lang="en">
<?php
    include("partials/head.php")
?>
<body class="animsition">
	
	<?php
        include ("partials/userheader.php");
    ?>

	<!-- breadcrumb -->
	<div class="container">
		
	</div>
		<br>
        <br>

	
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php 
					include("partials/connect.php");
					$id=$_GET['article_id'];
					$sql="select * from articles where id='$id'";
					$results=$connect->query($sql);
					$final=$results->fetch_assoc();

				?> 


				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								

								<div class="item-slick3" >
									<div class="wrap-pic-w pos-relative" style="height:100x ">
										<img src="<?php echo $final['picture'] ?>" alt="IMG-ARTICLE">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $final['picture'] ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['title'] ?>
						</h4>
				        <p class="stext-102 cl3 p-t-23">
							<?php echo $final['content1'] ?>
						</p>
                        <p class="stext-102 cl3 p-t-23">
							<?php echo $final['content2'] ?>
						</p>
                        <p class="stext-102 cl3 p-t-23">
							<?php echo $final['content3'] ?>
						</p>
                        <p class="stext-102 cl3 p-t-23">
							<?php echo $final['content4'] ?>
						</p>
                        <p class="stext-102 cl3 p-t-23">
							<?php echo $final['content5'] ?>
						</p>
						
						<!--  -->
						

							

						</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							

							
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				
			</div>
		</div>

		
	</section>


		

	<!-- Footer -->
	<?php
    include ('partials/footer.php');
    ?>
</body>
</html>