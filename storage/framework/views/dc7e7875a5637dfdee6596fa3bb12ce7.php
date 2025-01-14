<!DOCTYPE html>
<html>
<head>
    <title>LMS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\lms\resources\views/layout.blade.php ENDPATH**/ ?>