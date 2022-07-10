<!DOCTYPE html>
<html lang="en">
<?php
include ("partials/head.php");
?>
<body class="animsition">
	<?php
	include ("partials/header.php");


?>
	

	<br>
    <br>
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			
			<br>
			<br>
			

		



			<div class="row isotope-grid">
				<?php

				include("partials/connect.php");
				$sql="select * from articles";
				$results=$connect->query($sql);


				while ($final=$results->fetch_assoc()) {


				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?php echo $final['picture'] ?>" alt="IMG-ARTICLE"     >

							<a href="article-detail.php?article_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Load More
							</a>
						</div>
                        <div class="block2-txt-child1 flex-col-l ">
								<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['title'] ?>
								</a>

				
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