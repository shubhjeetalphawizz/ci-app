<!-- <style>
	.custom-navbar {
		display: none;
	}

	.sidebar {
		display: none;
	}
</style> -->
<div class="main-wrapper">

	<section class="contentSection">
		<div class="container">
			<div class="customCard">
				<div class="cardHeader">
					<h2>Hero Section</h2>
				</div>
				<div class="cardBody">
				<form method="post" action="<?php echo site_url('UserController/saveUser'); ?>"
					enctype="multipart/form-data">
					<div class="inputFeald">
						<label for="">Title</label>
						<input type="text" name="title" placeholder="Enter your title.">
					</div>
					<div class="inputFeald">
						<label for="">Description</label>
						<input type="text" name="paragraph" placeholder="Enter description">
					</div>
					<div class="inputFeald">
						<label for="">Upload Image</label>
						<input type="file" name="image" required>
					</div>
					<button type="submit">Submit</button>
				</form>
				</div>
			</div>
		</div>
	</section>

	<section class="contentSection">
		<div class="container">
			<form action="<?php echo site_url('UserController/demoData') ?>" method="post"
				enctype="multipart/form-data">
				<input type="text" name="title" placeholder="Enter Name"><br>
				<textarea name="description" id="editor" cols="30" rows="10"></textarea><br>
				<input type="file" name="image" required><br>
				<button type="submit">Submit</button>
			</form>
		</div>
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