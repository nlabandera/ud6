<?php $__env->startSection('content'); ?>
	<form action="<?php echo e(route('posts.store')); ?>" method="post" style="width: 40vw; margin:0 auto">
		<?php echo $__env->make('posts._form',['btnText'=>'Add'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/posts/create.blade.php ENDPATH**/ ?>