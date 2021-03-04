		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
					
						<hr>
						

					<div class="col-sm-6 col-md-3">
						<h4>Top Pro Categories</h4>
						<ul>
							<?php
								$product_cats = $getFromU->viewAllFromTable("product_categories");
								foreach ($product_cats as $product_cat) {
									$p_cat_id = $product_cat->p_cat_id;
									$p_cat_title = $product_cat->p_cat_title;
							?>
							<li><a href="shop.php?p_cat_id=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
						  <?php } ?>
						</ul>
						<hr class="hidden-md-down hidden-lg-down">
					</div>

					
				



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>