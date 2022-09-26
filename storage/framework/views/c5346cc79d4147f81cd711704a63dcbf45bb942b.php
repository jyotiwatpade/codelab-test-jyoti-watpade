


<?php $__env->startSection('content'); ?>
	<h1>List Brands</h1>
<div class="table-responsive text-nowrap">
	<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Logo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	
        <!--Table-->
        

            <tr>
              <th scope="row"><?php echo e($brand->id); ?></th>
              <td><?php echo e($brand->name); ?></td>
              <td><img class="listimage" src="<?php echo e(asset('storage/Brands/'.$brand->logo)); ?>"></td>
              <td><a href="<?php echo e(url('editbrand/'.$brand->id )); ?>" class="btn btn-primary">Edit</a> /
        	<a href="/deletebrand/<?php echo e($brand->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this brand?')" >Delete</a></td>
            </tr>
           
          
        <!--Table-->
      
</section>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\test\resources\views/listbrands.blade.php ENDPATH**/ ?>