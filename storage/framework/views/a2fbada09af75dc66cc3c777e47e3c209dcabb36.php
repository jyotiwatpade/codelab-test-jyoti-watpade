


<?php $__env->startSection('content'); ?>
	<h1>Edit Brand</h1>

	<form action="<?php echo e(url('updatebrand')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="id" id="id" value="<?php echo e($brand->id); ?>">
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required="" value="<?php echo e($brand->name); ?>">
		  </div>
		  
		  <div class="form-group">
		    <label for="logo">Logo:</label>
		    <input type="file" class="form-control" placeholder="Enter logo" name="logo" id="logo">
		    <input type="hidden" name="old_logo" id="old_logo" value="<?php echo e($brand->logo); ?>">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\codelab-test\resources\views/editbrand.blade.php ENDPATH**/ ?>