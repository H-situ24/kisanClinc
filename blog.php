<?php include "includes/header.php"; ?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"> Blogs</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="" href="index.php" class="home"><span>home</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Blog</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<div class="page-content">

	<!-- Blog Grid Col 3 -->
	<section class="section-lgx pbmit-element-column-three">
		<div class="container">
			<div class="row g-xl-0 pbmit-element-posts-wrapper">
				<?php
				include "admin/db-connect.php";
				$sql = "SELECT * FROM blogs";
				$result = mysqli_query($myconn, $sql);
				$row = mysqli_num_rows($result);
				if ($row > 0) {
					while ($data = mysqli_fetch_assoc($result)) {
				?>
						<article class="col-md-4 pbmit-ele-blog pbmit-blog-style-1">
							<div class="post-item">
								<div class="pbminfotech-box-content">
									<div class="pbmit-featured-container">
										<div class="pbmit-featured-img-wrapper">
											<div class="pbmit-featured-wrapper">
												<img src="admin/uploads/<?php echo $data['image'] ?>" class="img-fluid" alt="">
											</div>
										</div>
										<a class="pbmit-blog-btn" href="blog-details.php">
											<span class="pbmit-button-icon-wrapper">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-black-arrow-1"></i>
												</span>
											</span>
										</a>
										<div class="pbmit-meta-cat-wrapper pbmit-meta-line">
											<div class="pbmit-meta-category">
												<a href="#" rel="category tag"><?php echo $data['category'];  ?></a>
											</div>
										</div>
										<a class="pbmit-link" href="blog-details.php?id=<?php echo $data['id'] ?>"></a>
									</div>
									<div class="pbmit-category-date-wraper d-flex align-items-center">
										<div class="pbmit-meta-date-wrapper pbmit-meta-line">
											<div class="pbmit-meta-date">
												<span class="pbmit-post-date">
													<i class="pbmit-base-icon-calendar-3"></i><?php echo $data['blog_date'] ?></span>
												</span>
											</div>
										</div>
										<div class="pbmit-meta-author pbmit-meta-line">
											<span class="pbmit-post-author">
												<i class="pbmit-base-icon-user-3"></i>admin
											</span>
										</div>
									</div>
									<div class="pbmit-content-wrapper">
										<h3 class="pbmit-post-title">
											<a href="blog-details.php?id=<?php echo $data['id'] ?>"><?php echo $data['title']; ?></a>
										</h3>
									</div>
								</div>
							</div>
						</article>
				<?php

					}
				}
				?>
			</div>
		</div>
	</section>
	<!-- Blog Grid Col 3 End -->

</div>
<?php include 'includes/sticky.php'; ?>
<?php include "includes/footer.php"; ?>