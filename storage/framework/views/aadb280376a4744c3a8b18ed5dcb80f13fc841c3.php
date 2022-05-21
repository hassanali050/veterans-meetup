

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-8/12 p-6 bg-white rounded-lg">
            <?php if(auth()->guard()->check()): ?>
            <li>
                <a href="" class="p-3"><?php echo e(auth()->user()->name); ?></a>
            </li>
            <li>
                <form action="<?php echo e(route('logout')); ?>" method="POST" class="p-3 inline">
                    <?php echo csrf_field(); ?>
                <button type="submit">Logout</button>
                </form>
            </li>
            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            <button class="p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="location.href='<?php echo e(url('/login')); ?>'">
                Login
            </button>
            <button class="p-3 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="location.href='<?php echo e(url('/register')); ?>'">
                Register
            </button>
            <?php endif; ?>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_app\resources\views/home.blade.php ENDPATH**/ ?>