<div class="main-wrapper">

	<section>
		<form method="post" action="<?php echo site_url('UserController/saveUser'); ?>">
			<input type="text" name="title" placeholder="Enter Name">
			<input type="text" name="paragraph" placeholder="Enter Email">
			<input type="file" name="image">
			<button type="submit">Submit</button>
		</form>
	</section>
</div>
