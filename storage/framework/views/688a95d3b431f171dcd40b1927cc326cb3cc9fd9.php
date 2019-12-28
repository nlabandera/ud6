<?php $__env->startSection('content'); ?>
<br>
  <!-- Page Content -->
  <div class="container">
  <a href= "<?php echo e(route('posts.create')); ?>"><button type="button" class="btn btn-secondary">New Post</button></a><br><br>
  

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Fecha/Hora</th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
        <th style="width:15px"></th>
      </tr>
      </thead>
    <tbody>
      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($p->id); ?></td>
        <td><?php echo e($p->title); ?></td>
        <td><?php echo e(date("j/m/Y H:i:s", strtotime($p->published_at))); ?></td>
        <td>
        <a title="Ver" href="<?php echo e(route ('posts.show',$p->id)); ?>"><i class="fa fa-eye" style="color:black"></i></a>
        </td>
        <td>
          <a title="Editar" href="<?php echo e(route ('posts.edit',$p->id)); ?>"><i class="fa fa-pencil" style="color:black"></i></a>
        </td>
        <td>
        <form style="display:inline" action="<?php echo e(route('posts.destroy',$p->id)); ?>" method="POST">
           <?php echo e(method_field('DELETE')); ?>

           <?php echo e(csrf_field()); ?>

           <button type="submit" id="delete" style="background: none;padding: 0px;border: none;color:red">
              <i class="fa fa-trash-o" style="color:black"></i>
            </button>
        </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
  </div>
  <!-- /.container -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/posts/index.blade.php ENDPATH**/ ?>