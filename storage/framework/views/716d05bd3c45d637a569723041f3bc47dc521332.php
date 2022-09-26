


<?php $__env->startSection('content'); ?>
	<h1>Create New Brand</h1>

	<form action="<?php echo e(url('submitbrand')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required="">
		  </div>
		  
		  <div class="form-group">
		    <label for="logo">Logo:</label>
		    <input type="file" class="form-control" placeholder="Enter logo" name="logo" id="logo">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\test1\resources\views/createbrand.blade.php ENDPATH**/ ?>