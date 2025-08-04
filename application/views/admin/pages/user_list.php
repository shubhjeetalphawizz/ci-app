<style>
	.custom-navbar {
		display: none;
	}

	.sidebar {
		display: none;
	}
</style>
<div class="main-wrapper">
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			<?php if (!empty($homes)): ?>
				<?php $i = 1;
				foreach ($homes as $home): ?>
				
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $home->title ?></td>
						<td><?= $home->paragraph ?></td>
						<td><?php echo form_open_multipart('upload/');?>
							<img src="<?= !empty($home->image) ? base_url('uploads/' . $home->image) : base_url('uploads/blog1.png'); ?>" alt="<?= $home->title ?>" width="100">
							<!-- <td><img src="<?= base_url('uploads/' . $home->image) ?>" alt="<?= $home->title ?>" width="100"> -->
						</td>
					</tr>
				<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">No records found.</td>
				</tr>
			<?php endif; ?>
		</tbody>
	</table>
															
	<section>
		<?php
		foreach ($demos as $demo): ?>
			<h2><?= $demo->title ?></h2>
			<div><?= $demo->description	 ?></div>
			<?php echo form_open_multipart('upload/');?>
			<img src="<?= !empty($demo->image) ? base_url('uploads/' . $demo->image) : base_url('uploads/blog1.png'); ?>" alt="<?= $demo->title ?>" width="100">
			<!-- <img src="<?= base_url('uploads/' . $demo->image) ?>" alt="<?= $demo->title ?>" width="100"> -->

		<?php endforeach; ?>
	</section>
</div>
