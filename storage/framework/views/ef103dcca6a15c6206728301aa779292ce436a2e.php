<?php echo e(csrf_field()); ?>


<div class="form-group" >
    <label>Title</label>
    <input type="text" name="title" class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" placeholder="Enter title" <?php if(isset($post)): ?> value="<?php echo e(old('title',$post->title)); ?>" <?php endif; ?>>
    <?php echo $errors->first('title','<span class="invalid-feedback ">:message</span>'); ?>

</div>
<div class="form-group">
    <label>Description</label>
    <textarea name="excerpt" class="form-control <?php echo e($errors->has('excerpt') ? 'is-invalid' : ''); ?>" placeholder="Enter Excerpt"><?php if(isset($post)): ?> <?php echo e(old('excerpt',$post->excerpt)); ?> <?php endif; ?></textarea>
    <?php echo $errors->first('excerpt','<span class="invalid-feedback ">:message</span>'); ?>

</div>
<div class="form-group">
    <label class="control-label" for="inputError">Body</label>
    <textarea rows="5" name="body" class="form-control <?php echo e($errors->has('body') ? 'is-invalid' : ''); ?>" placeholder="Enter Body"><?php if(isset($post)): ?> <?php echo e(old('body',$post->body)); ?> <?php endif; ?></textarea>
    <?php echo $errors->first('body','<span class="invalid-feedback ">:message</span>'); ?>

</div>
<div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control <?php echo e($errors->has('category') ? 'is-invalid' : ''); ?>">
        <option value="">Select a category</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php if(isset($post)): ?> <?php echo e(old('category',$post->category_id) == $category->id ? 'selected' : ''); ?> <?php endif; ?>><?php echo e($category->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php echo $errors->first('category','<span class="invalid-feedback ">:message</span>'); ?>

</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="form-control <?php echo e($errors->has('img') ? ' is-invalid' : ''); ?>">
    <?php echo $errors->first('img','<span class="invalid-feedback "><strong>:message</strong></span>'); ?>

</div>

<button type="submit" class="btn btn-secondary"><?php echo e($btnText); ?></button>
<?php /**PATH /home/ubuntu/laravel/ud6/ud6/resources/views/posts/_form.blade.php ENDPATH**/ ?>