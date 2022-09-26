


<?php $__env->startSection('content'); ?>
	<h1>Edit Brand</h1>
	<hr>
	<form action="<?php echo e(url('updatebrand')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="id" id="id" value="<?php echo e($brand->id); ?>">
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name"  value="<?php echo e($brand->name); ?>">
		    <span class="text-danger">
		    	<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		    	<?php echo e($message); ?>

		    	<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		    </span>
		  </div>
		  
		  <div class="form-group">
		    <label for="logo">Logo:</label>
		    <input type="file" class="form-control" placeholder="Enter logo" name="logo" id="logo">
		    <input type="hidden" name="old_logo" id="old_logo" value="<?php echo e($brand->logo); ?>">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="<?php echo e(url('listbrands')); ?>" class="btn btn-danger">Cancel</a>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\codelab-test\resources\views/brands/editbrand.blade.php ENDPATH**/ ?>