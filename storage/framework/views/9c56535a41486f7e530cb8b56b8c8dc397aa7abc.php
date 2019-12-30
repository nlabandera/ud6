<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Post  - Start Bootstrap Template</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('font-awesome/css/font-awesome.min.css')); ?>">

	<!-- Custom styles for this template -->
	<link href="css/blog-post.css" rel="stylesheet">

</head>

<body>
	<!-- Navigation -->


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('img/eye-3-24.png')); ?>"> NereaBlog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				
				<ul class="navbar-nav ml-auto">
					<!-- Authentication Links -->
					<?php if(auth()->guard()->guest()): ?>
					
					<li class="nav-item">
						<a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
					</li>
					<?php if(Route::has('register')): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
					</li>
					<?php endif; ?>
					<?php else: ?>
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<?php echo e(Auth::user()->name); ?> <span class="caret"></span>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							<?php echo e(__('Logout')); ?></a>

							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
							<?php echo csrf_field(); ?>
							</form>
							
							<a class="dropdown-item" href="<?php echo e(route('posts.index')); ?>"
							>
							My Posts</a>

						</div>
						
				</li>
				
				<li class="nav-item active">
					<a class="nav-link" href="">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>

<!--Contenido-->

<?php echo $__env->yieldContent('content'); ?>

<!-- Footer -->
<footer class="py-5 bg-dark">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright &copy; Desarrollo web en entorno servidor 2020</p>
	</div>
	<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/layouts/plantilla.blade.php ENDPATH**/ ?>