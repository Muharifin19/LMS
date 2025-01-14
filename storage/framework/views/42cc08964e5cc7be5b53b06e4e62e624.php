

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Show Course</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($course->title); ?></h5>
                    <p class="card-text"><?php echo e($course->description); ?></p>
                    <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lms\resources\views/courses/show.blade.php ENDPATH**/ ?>