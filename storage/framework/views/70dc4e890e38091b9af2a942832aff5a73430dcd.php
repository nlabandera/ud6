<?php $__env->startSection('content'); ?>
	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<!-- Post Content Column -->
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-8">
				<!-- Title -->
				<h1 class="mt-4"><?php echo e($post->title); ?></h1>
				<!-- Author -->
				<p class="lead">
					by
					<a href="#"><?php echo e($post->user_id); ?></a>
				</p>
				<hr>
				<!-- Date/Time -->
				<p>Posted on <?php echo e($post->published_at); ?></p>
				<hr>
				<!-- Preview Image -->
				<?php if(isset($post->image)): ?>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="<?php echo e($post->image); ?>" alt="">
          <hr>
        <?php endif; ?>
				<hr>
				<!-- Post Content -->
				<p class="lead"><?php echo e($post->excerpt); ?></p>
				<p><?php echo e($post->body); ?></p>
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
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<!-- Sidebar Widgets Column -->
			<div class="col-md-4">

				<!-- Categories Widget -->
				<div class="card my-4">
					<h5 class="card-header">Categories</h5>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<ul class="list-unstyled mb-0">
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li>
										<a href="#"><?php echo e($category->name); ?></a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/layouts/blog.blade.php ENDPATH**/ ?>