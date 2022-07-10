<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<body class="animsition">
	<?php
	include ("partials/header.php");


?>
	

	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			
			<br>
			<br>
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						Tanaman Hias
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2">
						Tanaman Bunga
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
						Tanaman Buah
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".4">
						Bouquet Bunga
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".5">
						 Lain - lain
					</button>

			
					
				</div>
	
				
				
			</div>

		



			<div class="row isotope-grid">
				<?php

				include("partials/connect.php");
				$sql="select * from products";
				$results=$connect->query($sql);


				while ($final=$results->fetch_assoc()) {


				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $final['picture'] ?>" alt="IMG-PRODUCT" style="min-height: 300; max-height: 300">

							<a href="product-detail-view.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name'] ?>
								</a>

								<span class="stext-105 cl3">
									Rp<?php echo $final['price'] ?>
								</span>
							</div>

							
						</div>
					</div>
				</div>
			<?php } ?>

				
			</div>

		</div>
	</div>
		

	<?php
	include('partials/footer.php');
	?>

</body>
</html>