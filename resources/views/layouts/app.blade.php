<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>Nerea Labandera</title>
	<meta charset="utf-8">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/blog-post.css" rel="stylesheet">
</head>
<body>
	<!--Navbar-->
	@include('layouts/navbar')
	
<!-- COMO MOSTRAR ÚLTIMO POST??? -->


	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<!-- Post Content Column -->
			@foreach ($posts as $post)
			<div class="col-lg-8">
				<!-- Title -->
				<h1 class="mt-4">{{$post->title}}</h1>
				<!-- Author -->
				<p class="lead">
					by
					<a href="#">{{$post->user_id}}</a>
				</p>
				<hr>
				<!-- Date/Time -->
				<p>Posted on {{$post->published_at}}</p>
				<hr>
				<!-- Preview Image -->
				<img class="img-fluid rounded" src="{{$post->image}}" alt="">
				<hr>
				<!-- Post Content -->
				<p class="lead">{{$post->body}}</p>
				<blockquote class="blockquote">
					<p class="mb-0">blockquote ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">Someone famous in
						<cite title="Source Title">Source Title</cite>
					</footer>
				</blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
				<hr>
			</div>
			@endforeach
			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">

				<!-- Categories Widget -->
				<div class="card my-4">
					<h5 class="card-header">Categories</h5>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<ul class="list-unstyled mb-0">
									@foreach ($categories as $category)
									<li>
										<a href="#">{{$category->name}}</a>
									</li>
									@endforeach

								</ul>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

	<!-- Footer-->
	@include('layouts/footer')

</body>
</html>