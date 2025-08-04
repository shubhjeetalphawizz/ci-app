<div class="main-wrapper">

	<section>
		<form method="post" action="<?php echo site_url('UserController/saveUser'); ?>">
			<input type="text" name="title" placeholder="Enter Name">
			<input type="text" name="paragraph" placeholder="Enter Email">
			<button type="submit">Submit</button>
		</form>
	</section>

	<!-- <section>
		<?php
		$res = $this->db->get('home')->result_array(); ?>
		<?php foreach ($res as $key => $row) { ?>

			<p> <?= $row['paragraph'] ?></p>

		<?php } ?>
	</section> -->
</div>
