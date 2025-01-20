<?php include "includes/header.php"; ?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"> Gallery</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="" href="index.php" class="home"><span>Home</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item">Gallery</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<div class="page-content">
	<section class="section-lgx">
		<div class="container">
			<div class="row pbmit-element-posts-wrapper">
				<?php
				include "admin/db-connect.php";
				$query = "SELECT * FROM gallery";
				$result = mysqli_query($myconn, $query);
				if ($result && mysqli_num_rows($result) > 0) {
					// Loop through each row and display images
					while ($data = mysqli_fetch_assoc($result)) {
				?>
						<div class="pbmit-portfolio-style-1 col-md-4">
							<a href="admin/uploads-gallery/<?php echo ($data['image']); ?>" data-lightbox="gallery" data-title="Agriculture Farming">
								<img src="admin/uploads-gallery/<?php echo ($data['image']); ?>" class="img-fluid" alt="Agriculture Farming">
							</a>
						</div>
				<?php
					}
				} else {
					// If no images are found, display a message
					echo "<p>No images found in the gallery.</p>";
				}
				?>
			</div>
		</div>
	</section>
</div>

<?php include 'includes/sticky.php'; ?>
<?php include "includes/footer.php"; ?>