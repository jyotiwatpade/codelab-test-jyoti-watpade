


<?php $__env->startSection('content'); ?>
	<h1>Create New Model</h1>
	<hr>
	<form action="<?php echo e(url('submitmodel')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<div class="form-group">
		    <label for="brand_id">Brand Name:</label>
		    <select class="form-control" id="brand_id" name="brand_id">
		    	<option value="" selected="true" disabled="disabled">Select Brand</option>
		    	<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        		<option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
	        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	      </select>
	      <span class="text-danger">
		    	<?php $__errorArgs = ['brand_id'];
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
		    <label for="name">Model Name:</label>
		    <input type="text" class="form-control" placeholder="Enter Name" name="model_name" id="model_name">
		    <span class="text-danger">
		    	<?php $__errorArgs = ['model_name'];
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
		    <label for="manufacturing_year">Manufacturing Year</label>
		    <input type="text" id="manufacturing_year" class="form-control" name="manufacturing_year" />
		    <span class="text-danger">
		    	<?php $__errorArgs = ['manufacturing_year'];
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
		    <label for="image">Image:</label>
		    <input type="file" class="form-control"  name="image" id="image">
		    <span class="text-danger">
		    	<?php $__errorArgs = ['image'];
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
		<a href="<?php echo e(url('listmodels')); ?>" class="btn btn-danger">Cancel</a>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\codelab-test\resources\views/models/createmodel.blade.php ENDPATH**/ ?>