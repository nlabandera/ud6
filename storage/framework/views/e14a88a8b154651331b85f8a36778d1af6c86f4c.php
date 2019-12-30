<?php $__env->startSection('content'); ?>
	<form action="<?php echo e(route('posts.update',['post'=>$post])); ?>" method="post" style="width: 40vw; margin:0 auto">
		<?php echo method_field('PUT'); ?>
		<?php echo $__env->make('posts._form',['btnText'=>'Edit'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/posts/edit.blade.php ENDPATH**/ ?>