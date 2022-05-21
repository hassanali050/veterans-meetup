<?php echo $__env->make('headernew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if (isset($component)) { $__componentOriginal9b667a6fef62fa4a2552b2eb841208bb5ae10923 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Softy::class, ['data' => 'Gurinder Gill data component']); ?>
<?php $component->withName('softy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal9b667a6fef62fa4a2552b2eb841208bb5ae10923)): ?>
<?php $component = $__componentOriginal9b667a6fef62fa4a2552b2eb841208bb5ae10923; ?>
<?php unset($__componentOriginal9b667a6fef62fa4a2552b2eb841208bb5ae10923); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<p>Gurinder Gill Singer</p>
&nbsp<strong>Xe Ap Dhillon Copyrights</strong>
<h4><?php echo e(count($users)); ?></h4>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($user); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if(!count($users)): ?>
    <p><?php echo e('yes'); ?></p>
<?php elseif(count($users)==3): ?>
    <p><?php echo e('equal to 3'); ?></p>
<?php else: ?>
    <p><?php echo e('No'); ?></p>
<?php endif; ?>
<?php echo csrf_field(); ?>
<script>
    var data=<?php echo json_encode($users, 15, 512) ?>;
    console.warn(data);
</script><?php /**PATH C:\xampp\htdocs\laravel_app\resources\views/gurinder.blade.php ENDPATH**/ ?>