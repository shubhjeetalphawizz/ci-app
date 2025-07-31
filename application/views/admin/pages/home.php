<div class="main-wrapper">
	<h1>hello</h1>

	<section>
		<form method="post" action="<?php echo site_url('UserController/saveUser'); ?>">
			<input type="text" name="title" placeholder="Enter Name">
			<input type="text" name="paragraph" placeholder="Enter Email">
			<button type="submit">Submit</button>
		</form>
	</section>
</div>
