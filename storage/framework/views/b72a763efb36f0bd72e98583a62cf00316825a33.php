<?php $__env->startSection('content'); ?>
<br>

  <div class="container">
  <table class="table table-condensed">
      <tr>
        <th class="bg-dark text-light">Id</th>
        <td><?php echo e($post->id); ?></td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Title</th>
        <td><?php echo e($post->title); ?></td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Fecha/Hora</th>
        <td><?php echo e(date("d/m/Y H:i:s", strtotime($post->published_at))); ?></td>
      </tr>
      <tr>
        <th class="bg-dark text-light">Category</th>
        <td><?php echo e($post->category->name); ?></td>
      </tr>
      <tr>
        <td>
          <a class="btn btn-primary" title="Editar" href="<?php echo e(route ('posts.edit',$post->id)); ?>">Edit</a>
        </td>
        <td>
        <form style="display:inline" action="<?php echo e(route('posts.destroy',$post->id)); ?>" method="POST">
           <?php echo method_field('DELETE'); ?>
           <?php echo csrf_field(); ?>
           <button type="submit" id="delete">
              <a class="btn btn-danger text-light">Delete</a>
            </button>
        </form>
        </td>
      </tr>
    </table>
  </div>
  <?php $__env->stopSection(); ?>

  <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/posts/show.blade.php ENDPATH**/ ?>