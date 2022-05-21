<?php if (isset($component)) { $__componentOriginal9b667a6fef62fa4a2552b2eb841208bb5ae10923 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Softy::class, ['data' => 'about form data component']); ?>
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
<p>ABOUT ME</p>
&nbsp<strong>No</strong><?php /**PATH C:\xampp\htdocs\laravel_app\resources\views/aboutform.blade.php ENDPATH**/ ?>