<?php include_once('inc/header2.php'); ?>
<header class="p-3 mb-3 bg-primary text-white border-bottom">
	<div class="container">
		<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
		<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
			<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
		</a>

		<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			<li><a href="#" class="nav-link px-2 text-white">Dashboard</a></li>
			<li><a href="#" class="nav-link px-2 text-white">Courses</a></li>
		</ul>

		<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
			<input type="search" class="form-control" placeholder="Search...">
		</form>

		<div class="dropdown text-end">
			<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
			<img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
			</a>
			<ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
			<li><a class="dropdown-item" href="#">Profile</a></li>
			<li><hr class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="/logout.php">Sign out</a></li>
			</ul>
		</div>
		</div>
	</div>
</div>
</header>

<body>
<div class="container">
	<h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h3>
	<p>
        <a href="create_course.php" class="btn btn-primary">Create Course</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
    </p>
</div>

<?php include_once('inc/footer.php'); ?>