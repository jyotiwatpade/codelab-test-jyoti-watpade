


<?php $__env->startSection('content'); ?>
	<h1>Edit Model</h1>

	<form action="<?php echo e(url('updatemodel')); ?>" method="POST" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="model_id" id="model_id" value="<?php echo e($model->model_id); ?>">
		<div class="form-group">
		    <label for="brand_id">Brand Name:</label>
		    <select class="form-control" id="brand_id" name="brand_id">
		    	<option value="" selected="true" disabled="disabled">Select Brand</option>
		    	<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        		<option value="<?php echo e($brand->id); ?>" <?php echo e(( $brand->id == $model->brand_id) ? 'selected': ''); ?>><?php echo e($brand->name); ?></option>
	        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	      </select>
	    </div>
		<div class="form-group">
		    <label for="name">Model Name:</label>
		    <input type="text" class="form-control" value="<?php echo e($model->model_name); ?>" name="model_name" id="model_name" required="">
		</div>
		  
		<div class="form-group">
		    <label for="manufacturing_year">Manufacturing Year</label>
		    <input type="text" id="manufacturing_year" class="form-control" name="manufacturing_year" value="<?php echo e($model->manufacturing_year); ?>" />
		</div>

		<div class="form-group">
		    <label for="image">Image:</label>
		    <input type="file" class="form-control"  name="image" id="image">
		    <input type="hidden" name="old_image" id="old_image" value="<?php echo e($model->image); ?>">
		 </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		  <a href="<?php echo e(url('listmodels')); ?>" class="btn btn-danger">Cancel</a>
		</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\codelab-test\resources\views/models/editmodel.blade.php ENDPATH**/ ?>