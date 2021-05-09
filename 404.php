<?php
/**
 * 404 Page Template.
 *
 * @package Smellycat
 * @author iamRahul1973 rahulkr1973@gmail.com
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<div class="lost-in-space">
		<h1>404</h1>
		<h2>Seems like you got lost !</h2>
		<p>The page you were looking for could not be found</p>
		<div class="back-to-home">
			<a href="<?php echo esc_url( site_url() ); ?>">Take me back to Home Page</a>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
