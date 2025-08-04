<style>
	.custom-navbar {
		display: none;
	}

	.sidebar {
		display: none;
	}
</style>
<div class="main-wrapper">

	<section>
		<form method="post" action="<?php echo site_url('UserController/saveUser'); ?>" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="Enter Name">
			<input type="text" name="paragraph" placeholder="Enter Email">
			<input type="file" name="image" required><br>
			<button type="submit">Submit</button>
		</form>
	</section>

	<section>
		<form action="<?php echo site_url('UserController/demoData') ?>" method="post" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="Enter Name"><br>
			<textarea name="description" id="editor" cols="30" rows="10"></textarea><br>
			<input type="file" name="image" required><br>
			<button type="submit">Submit</button>
		</form>
	</section>
</div>
<script>
	ClassicEditor
		.create(document.querySelector('#editor'), {
			toolbar: ['bold', 'italic', 'link', 'bulletedList', 'numberedList', 'undo', 'redo']
		})
		.catch(error => {
			console.error(error);
		});
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
