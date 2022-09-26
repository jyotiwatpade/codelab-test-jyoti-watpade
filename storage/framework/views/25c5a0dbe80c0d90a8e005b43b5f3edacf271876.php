


<?php $__env->startSection('content'); ?>
	<h1>Create New Brand</h1>
	<hr>
	<form action="<?php echo e(url('submitbrand')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?php echo e(old('name')); ?>">
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
		    <span class="text-danger">
		    	<?php $__errorArgs = ['logo'];
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
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="<?php echo e(url('listbrands')); ?>" class="btn btn-danger">Cancel</a>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\codelab-test\resources\views/brands/createbrand.blade.php ENDPATH**/ ?>