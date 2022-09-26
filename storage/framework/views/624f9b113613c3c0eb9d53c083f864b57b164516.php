


<?php $__env->startSection('content'); ?>
	<h1>Create Account</h1>

	<form action="/createsubmit" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-group">
		    <label for="name">Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" placeholder="Enter password" name="password" id="pwd">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\test\resources\views/create.blade.php ENDPATH**/ ?>