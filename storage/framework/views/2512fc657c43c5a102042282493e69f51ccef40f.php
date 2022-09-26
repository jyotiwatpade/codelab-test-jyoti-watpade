


<?php $__env->startSection('content'); ?>
	<h1>List Models</h1>
<div class="table-responsive text-nowrap">
	<table id="myModelTable" class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Brand Name</th>
        <th>Model Name</th>
        <th>Manufacuring Year</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <th scope="row"><?php echo e($model->model_id); ?></th>
              <td><?php echo e($model->name); ?></td>
              <td><?php echo e($model->model_name); ?></td>
              <td><?php echo e($model->manufacturing_year); ?></td>
              <td><img class="listimage" src="<?php echo e(asset('storage/models/'.$model->image)); ?>"></td>
              <td><a href="<?php echo e(url('editmodel/'.$model->model_id  )); ?>" class="btn btn-primary">Edit</a> /
        	<a href="<?php echo e(url('deletemodel/'.$model->model_id)); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this model?')" >Delete</a></td>
            </tr>
           
          
        <!--Table-->
      
</section>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\test\resources\views/listmodels.blade.php ENDPATH**/ ?>