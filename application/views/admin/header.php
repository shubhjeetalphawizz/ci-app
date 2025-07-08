<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/style.css'); ?>">
</head>

<body>
	<main>
		<div class="main-wrapper">
			<div class="custom-navbar">
				<button onclick="sidebarBtn()" class="sidebarBtn">Enable body scrolling</button>



				<p class="admin-Card">
					<a class="profileImg" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
					<img src="<?php echo base_url('assets/admin/images/profile.png'); ?>" alt="">
					</a>
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Button with data-bs-target
					</button>
				</p>
				<div class="collapse" id="collapseExample">
					<div class="card card-body">
						Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
					</div>
				</div>


				

				<div class="admin-Card">
					<a class="profileImg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
						<img src="<?php echo base_url('assets/admin/images/profile.png'); ?>" alt="">
					</a>
				</div>
				<div>
					<div class="collapse collapse-horizontal" id="collapseWidthExample">
						<div class="card card-body">
							This is some placeholder content for a horizontal collapse. It’s hidden by default and shown when triggered.
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?php echo base_url('assets/admin/script.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
</body>

</html>
