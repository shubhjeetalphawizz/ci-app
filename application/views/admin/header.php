<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/style.css'); ?>">
</head>

<body>
	<main>
		<div class="main-wrapper">
			<div class="custom-navbar">
				<button onclick="sidebarBtn()" class="sidebarBtn"><img src="<?php echo base_url('assets/admin/images/list.png'); ?>" alt=""></button>
				<div class="admin-Card">
					<a class="profileImg" onclick="adminPanel()">
						<img src="<?php echo base_url('assets/admin/images/profile.png'); ?>" alt="">
					</a>
				</div>
			</div>
			<div class="adminCard">
				<a href="#">Profile</a>
			</div>
		</div>
	</main>
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
	<script src="<?php echo base_url('assets/admin/script.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
		integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK"
		crossorigin="anonymous"></script>
</body>

</html>