<!DOCTYPE html>
<html>
	<head>
		<?php
		require 'common/head.php';
		?>
	</head>
	<body style="margin-top:100px">
		<div class="container-fluid">
			<?php
			require 'common/nav.php';
			?>
			<div class="row">
				<?php
				require 'common/categories.php';
				?>
				<div class="col-md-9">
					<div class="row">
						
                        <?php
                        foreach ($products as $product) {
                        ?>
                        
                        <!-- thumbnail -->
						<div class="col-md-3 col-sm-4">
							<div class="thumbnail">
								<img alt="Product Image" src="<?php echo $product -> image; ?>" style="width: 100%; height: 220px">
								<div class="caption">
									<h4><?php echo $product -> title; ?></h4>
									<p>
										Price: <?php echo $product -> price; ?>&nbsp;BDT 
									</p>
									<p>
										<a class="btn btn-primary" style="width: 100%;" href="products.php?op=pdesc&pid=<?php echo $product -> pid; ?>">View</a>
									</p>
								</div>
							</div>
						</div>
						<?php } ?>
						<!--end thumbnail-->
					</div>
				</div>
			</div>
		</div>
		<?php
		require 'view/common/footer.php';
		?>
	</body>

</html>