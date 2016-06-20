	</main>

		<footer class="menu-back-dole">
			<ul class="footer-menu">
				<li id="home"><a href="./">HOME</a></li>
				<li id="kontakt"><a href="./contact">KONTAKT</a></li>
				<li id="impressum"><a href="./impressum">IMPRESSUM</a></li>               
			</ul>
		</footer>

	<div id="checkout-button">
		<img src="<?php echo get_bloginfo('template_url'); ?>/image/checkout-140.png" srcset="<?php echo get_bloginfo('template_url'); ?>/image/checkout-140.png 140w, <?php echo get_bloginfo('template_url'); ?>/image/checkout-70.png 70w" alt="Show Cart" class="unclickable">
	</div>
	<div id="checkout-div">
		<img src="<?php echo get_bloginfo('template_url'); ?>/image/close.png" class="close-window unclickable" alt="Close window">
		<div id="cart-list">
			<h1>Your Cart:</h1>
			<table>
				<tr>
					<td>Sushi bowl extra large for three people</td>
					<td>5,90$</td>
					<td><img src="<?php echo get_bloginfo('template_url'); ?>/image/remove.png" class="remove-button unclickable" alt="Remove item"></td>
				</tr>
				<tr>
					<td>Sushi bowl extra large for three people</td>
					<td>5,90$</td>
					<td><img src="<?php echo get_bloginfo('template_url'); ?>/image/remove.png" class="remove-button unclickable" alt="Remove item"></td>
				</tr>
				<tr>
					<td>Sushi bowl extra large for three people</td>
					<td>5,90$</td>
					<td><img src="<?php echo get_bloginfo('template_url'); ?>/image/remove.png" class="remove-button unclickable" alt="Remove item"></td>
				</tr>
			</table>
			<p>Total: <span>12,30$</span></p>
			<button>☞</button>
		</div>
		<div id="cart-form">
			<h1>Enter your contact details:</h1>
			<form>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
				<label for="phone">Phone:</label>
				<input type="text" name="phone" id="phone">
				<label for="address">Address:</label>
				<input type="text" name="address" id="address">
				<label for="additional">Additional Instructions:</label>
				<textarea id="additional" name="additional" rows="3"></textarea>
				<button>✓</button>
			</form>
		</div>
		<div id="cart-aftermath">
			<h1>Thank you for your order. Our staff will contact you soon.</h1>
		</div>
	</div>


	<div id="posts-data" style="display: none;">
	<?php
	$dataObject = array();
	// List of Category IDs to query
	$categoriesList = [8, 7, 6, 5, 4, 3];

	foreach ($categoriesList as $key => $value) {
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'cat' => $value
		);
		$query = new WP_Query( $args );
		
		$categoryName = get_category($value)->slug;


		$dataObject[$categoryName] = array();

		while ( $query->have_posts() ) {
			$query->the_post();
			$dataObject[$categoryName][] = [
				'id' => get_the_ID(),
				'name' => get_the_title(),
				'price' => 5,
				'image' => 'imag',
				'description' => wp_strip_all_tags( get_the_content() )
			];
		}
		wp_reset_postdata();
	}

	echo json_encode($dataObject, JSON_FORCE_OBJECT);

	?>



	</div>

	<?php wp_footer(); ?>
</body>
</html>