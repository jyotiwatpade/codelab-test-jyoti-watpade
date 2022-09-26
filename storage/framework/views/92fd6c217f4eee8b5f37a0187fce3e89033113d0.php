

<?php $__env->startSection('content'); ?>
	<h1>User List</h1>
	<div>
		<ul>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<span><?php echo e($user->id); ?></span>
				<span><?php echo e($user->name); ?></span>
				<span><?php echo e($user->email); ?></span>
				
			</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel Test\test\resources\views/userlist.blade.php ENDPATH**/ ?>